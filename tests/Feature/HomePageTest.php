<?php

use App\Models\Post;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Http;
use Spatie\Comments\Models\Comment;

beforeEach(function () {
    $this->withoutMix();

    $this->seed(DatabaseSeeder::class);
});

/**
 * @param array<string, mixed>|null $price
 * @param array<string, mixed>|null $discount
 */
function fakePriceApi(?array $price = null, ?array $discount = null): void
{
    $price ??= [
        'price_in_cents' => 4900,
        'currency_code' => 'USD',
        'currency_symbol' => '$',
        'formatted_price' => '$ 49',
    ];

    $discount ??= [
        'active' => false,
        'percentage' => null,
        'name' => null,
        'expires_at' => null,
    ];

    Http::fake([
        'spatie.be/api/price/*' => Http::response([
            'actual' => $price,
            'without_discount' => $price,
            'discount' => $discount,
        ]),
    ]);
}

it('shows the demo with a welcome comment', function () {
    fakePriceApi();

    $this
        ->get('/')
        ->assertOk()
        ->assertSee('Feel free to try out this component', false)
        ->assertSee('49 USD');

    $this->assertAuthenticated();
    expect(Post::count())->toBe(1);
    expect(Comment::count())->toBe(1);
    expect(Comment::first()->reactions()->count())->toBe(3);
});

it('still renders when the price api is down', function () {
    Http::fake(['spatie.be/api/price/*' => Http::response(status: 500)]);

    $this->get('/')->assertOk();
});

it('shows a countdown for an active discount', function () {
    $price = [
        'price_in_cents' => 3430,
        'currency_code' => 'USD',
        'currency_symbol' => '$',
        'formatted_price' => '$ 34.30',
    ];

    fakePriceApi($price, [
        'active' => true,
        'percentage' => 30,
        'name' => 'BLACK FRIDAY',
        'expires_at' => (string) now()->addDays(3)->addHours(2)->addMinutes(30)->timestamp,
    ]);

    $this
        ->get('/')
        ->assertOk()
        ->assertSee('BLACK FRIDAY ending in')
        ->assertSeeInOrder(['03', 'days', '02', 'hours'], false);
});

it('shows the legal pages', function () {
    $this->get('terms-of-use')->assertOk();
    $this->get('privacy')->assertOk();
});
