<?php

use App\Models\Post;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Livewire\Livewire;
use Spatie\Comments\Models\Comment;
use Spatie\LivewireComments\Livewire\CommentsComponent;

it('lets a visitor post a markdown comment', function () {
    $this->seed(DatabaseSeeder::class);

    $this->actingAs(User::firstWhere('email', 'guest@example.com'));

    $post = Post::create(['session_id' => 'demo-session']);

    Livewire::test(CommentsComponent::class, ['model' => $post])
        ->set('text', "Hello there\n\n```php\necho 'hi';\n```")
        ->call('comment')
        ->assertHasNoErrors()
        ->assertSee('Hello there');

    $comment = Comment::sole();

    expect($comment->commentable->is($post))->toBeTrue();
    expect($comment->text)->toContain('<code>');
});
