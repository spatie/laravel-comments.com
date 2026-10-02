<?php

use Mockery\MockInterface;
use Spatie\FlareClient\Flare as FlareClient;
use Spatie\LaravelFlare\FlareConfig;

it('reports exceptions to flare when a key is configured', function () {
    app(FlareConfig::class)->apiToken = 'fake-flare-key';

    $exception = new RuntimeException('Something went wrong');

    $this->mock(FlareClient::class, function (MockInterface $mock) use ($exception) {
        $mock->shouldReceive('report')->once()->with($exception);
    });

    report($exception);
});

it('does not report exceptions to flare without a key', function () {
    app(FlareConfig::class)->apiToken = null;

    $this->mock(FlareClient::class, function (MockInterface $mock) {
        $mock->shouldNotReceive('report');
    });

    report(new RuntimeException('Something went wrong'));
});
