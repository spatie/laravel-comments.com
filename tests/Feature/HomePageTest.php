<?php

namespace Tests\Feature;

use App\Models\Post;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Spatie\Comments\Models\Comment;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutMix();

        $this->seed(DatabaseSeeder::class);

        $price = [
            'price_in_cents' => 4900,
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'formatted_price' => '$ 49',
        ];

        Http::fake([
            'spatie.be/api/price/*' => Http::response([
                'actual' => $price,
                'without_discount' => $price,
                'discount' => [
                    'active' => false,
                    'percentage' => null,
                    'name' => null,
                    'expires_at' => null,
                ],
            ]),
        ]);
    }

    public function test_it_shows_the_demo_with_a_welcome_comment(): void
    {
        $this
            ->get('/')
            ->assertOk()
            ->assertSee('Feel free to try out this component', false)
            ->assertSee('49 USD');

        $this->assertAuthenticated();
        $this->assertSame(1, Post::count());
        $this->assertSame(1, Comment::count());
        $this->assertSame(3, Comment::first()->reactions()->count());
    }

    public function test_it_still_renders_when_the_price_api_is_down(): void
    {
        Http::fake(['spatie.be/api/price/*' => Http::response(status: 500)]);

        $this->get('/')->assertOk();
    }

    public function test_it_shows_the_legal_pages(): void
    {
        $this->get('terms-of-use')->assertOk();
        $this->get('privacy')->assertOk();
    }
}
