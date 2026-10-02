<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Spatie\LaravelMarkdown\MarkdownBladeComponent;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Model::unguard();
    }

    public function boot(): void
    {
        Blade::component('highlighted-markdown', MarkdownBladeComponent::class);
    }
}
