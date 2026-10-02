<?php

namespace Tests\Feature;

use App\Console\Commands\DeleteOldComments;
use App\Models\Post;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Comments\Models\Comment;
use Tests\TestCase;

class DeleteOldCommentsTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_deletes_demo_posts_and_comments_older_than_an_hour(): void
    {
        $this->travelTo(now()->subMinutes(61));
        $oldPost = $this->createPostWithComment();

        $this->travelBack();
        $recentPost = $this->createPostWithComment();

        $this->artisan(DeleteOldComments::class)->assertSuccessful();

        $this->assertModelMissing($oldPost);
        $this->assertModelExists($recentPost);
        $this->assertSame(1, Comment::count());
        $this->assertSame($recentPost->id, Comment::first()->commentable_id);
    }

    public function test_it_is_scheduled_hourly(): void
    {
        $event = collect(app(Schedule::class)->events())
            ->first(fn ($event) => str_contains($event->command, 'delete-old-comments-and-posts'));

        $this->assertNotNull($event);
        $this->assertSame('0 * * * *', $event->expression);
    }

    protected function createPostWithComment(): Post
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
}
