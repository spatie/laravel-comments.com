<?php

use App\Models\Post;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Livewire\Features\SupportLockedProperties\CannotUpdateLockedPropertyException;
use Livewire\Livewire;
use Spatie\LivewireComments\Livewire\MentionSearchComponent;

it('rejects client replacements of server-generated mention results', function () {
    Livewire::test(MentionSearchComponent::class)
        ->set('results', [123]);
})->throws(CannotUpdateLockedPropertyException::class);

it('can search for and select a demo mention', function () {
    $this->seed(DatabaseSeeder::class);

    $this->actingAs(User::firstWhere('email', 'guest@example.com'));

    $commentator = User::firstWhere('email', 'freek@spatie.be');
    $post = Post::create(['session_id' => 'mention-demo-session']);

    Livewire::test(MentionSearchComponent::class, ['commentable' => $post])
        ->call('onSearch', 'Freek')
        ->assertSuccessful()
        ->assertSee('Freek')
        ->assertSet('results.0.id', $commentator->getKey())
        ->call('select', $commentator->getKey(), $commentator->name)
        ->assertDispatched('mention-selected', [
            'id' => $commentator->getKey(),
            'display' => '@Freek',
        ]);
});
