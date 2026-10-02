<?php

namespace Tests\Feature;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CloudSetupTest extends TestCase
{
    use RefreshDatabase;

    public function test_prices_are_fetched_for_the_visitor_ip_behind_a_proxy(): void
    {
        $this->withoutMix();

        $this->seed(DatabaseSeeder::class);

        Http::fake(['spatie.be/api/price/*' => Http::response(status: 500)]);

        $this
            ->withServerVariables(['REMOTE_ADDR' => '10.0.0.1'])
            ->withHeaders([
                'X-Forwarded-For' => '203.0.113.7',
                'X-Forwarded-Proto' => 'https',
            ])
            ->get('/')
            ->assertOk()
            ->assertSee('<link rel="canonical" href="https://', false);

        Http::assertSent(fn (Request $request) => $request->url() === 'https://spatie.be/api/price/22/203.0.113.7');
    }

    public function test_the_database_cache_can_store_binary_values(): void
    {
        config(['cache.default' => 'database']);

        $binaryValue = random_bytes(64)."\xff\xfe";

        Cache::put('binary', $binaryValue, 60);

        $this->assertSame($binaryValue, Cache::get('binary'));
    }

    public function test_the_database_session_driver_works(): void
    {
        config(['session.driver' => 'database']);

        $this->withoutMix();

        $this->seed(DatabaseSeeder::class);

        Http::fake(['spatie.be/api/price/*' => Http::response(status: 500)]);

        $this->get('/')->assertOk();

        $this->assertDatabaseCount('sessions', 1);
    }

    public function test_the_health_route_responds(): void
    {
        $this->get('up')->assertOk();
    }
}
