<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Spatie\Flash\Flash;
use Spatie\LaravelMarkdown\MarkdownBladeComponent;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        Model::unguard();

        Flash::levels([
            'success' => 'alert-success',
            'error' => 'alert-error',
        ]);
    }

    public function boot()
    {
        Blade::component('highlighted-markdown', MarkdownBladeComponent::class);
    }
}
