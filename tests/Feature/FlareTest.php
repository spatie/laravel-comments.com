<?php

namespace Tests\Feature;

use Mockery\MockInterface;
use RuntimeException;
use Spatie\FlareClient\Flare as FlareClient;
use Spatie\LaravelFlare\FlareConfig;
use Tests\TestCase;

class FlareTest extends TestCase
{
    public function test_exceptions_are_reported_to_flare_when_a_key_is_configured(): void
    {
        app(FlareConfig::class)->apiToken = 'fake-flare-key';

        $exception = new RuntimeException('Something went wrong');

        $this->mock(FlareClient::class, function (MockInterface $mock) use ($exception) {
            $mock->shouldReceive('report')->once()->with($exception);
        });

        report($exception);
    }

    public function test_exceptions_are_not_reported_to_flare_without_a_key(): void
    {
        app(FlareConfig::class)->apiToken = null;

        $this->mock(FlareClient::class, function (MockInterface $mock) {
            $mock->shouldNotReceive('report');
        });

        report(new RuntimeException('Something went wrong'));
    }
}
