<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelMarkdown\MarkdownBladeComponent;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        Model::unguard();
    }

    public function boot()
    {
        Blade::component('highlighted-markdown', MarkdownBladeComponent::class);
    }
}
