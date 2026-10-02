<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Spatie\Comments\Models\Comment;
use Spatie\LivewireComments\Livewire\CommentsComponent;
use Tests\TestCase;

class CommentDemoTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_visitor_can_post_a_markdown_comment(): void
    {
        $this->seed(DatabaseSeeder::class);

        $this->actingAs(User::firstWhere('email', 'guest@example.com'));

        $post = Post::create(['session_id' => 'demo-session']);

        Livewire::test(CommentsComponent::class, ['model' => $post])
            ->set('text', "Hello there\n\n```php\necho 'hi';\n```")
            ->call('comment')
            ->assertHasNoErrors()
            ->assertSee('Hello there');

        $comment = Comment::sole();

        $this->assertTrue($comment->commentable->is($post));
        $this->assertStringContainsString('<code>', $comment->text);
    }
}
