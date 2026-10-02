<?php

use App\Console\Commands\DeleteOldComments;
use App\Models\Post;
use Illuminate\Console\Scheduling\Schedule;
use Spatie\Comments\Models\Comment;

function createPostWithComment(): Post
{
    $post = Post::create(['session_id' => fake()->uuid()]);

    Comment::create([
        'commentable_type' => Post::class,
        'commentable_id' => $post->id,
        'original_text' => 'Hi',
        'text' => 'Hi',
    ]);

    return $post;
}

it('deletes demo posts and comments older than an hour', function () {
    $this->travelTo(now()->subMinutes(61));
    $oldPost = createPostWithComment();

    $this->travelBack();
    $recentPost = createPostWithComment();

    $this->artisan(DeleteOldComments::class)->assertSuccessful();

    $this->assertModelMissing($oldPost);
    $this->assertModelExists($recentPost);
    expect(Comment::count())->toBe(1);
    expect(Comment::first()->commentable_id)->toBe($recentPost->id);
});

it('is scheduled hourly', function () {
    $event = collect(app(Schedule::class)->events())
        ->first(fn ($event) => str_contains($event->command, 'delete-old-comments-and-posts'));

    expect($event)->not->toBeNull();
    expect($event->expression)->toBe('0 * * * *');
});
