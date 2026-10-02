<?php

use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

it('fetches prices for the visitor ip behind a proxy', function () {
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
});

it('can store binary values in the database cache', function () {
    config(['cache.default' => 'database']);

    $binaryValue = random_bytes(64)."\xff\xfe";

    Cache::put('binary', $binaryValue, 60);

    expect(Cache::get('binary'))->toBe($binaryValue);
});

it('responds on the health route', function () {
    $this->get('up')->assertOk();
});
