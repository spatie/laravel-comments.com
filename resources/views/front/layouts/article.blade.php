@extends('front.layouts.master')

@section('content')

<article class="p-4 sm:p-8 overflow-x-hidden">
    <x-circle class="hidden sm:block absolute -top-[20vw] -right-[20vw] w-[40vw] h-[40vw] "></x-circle>

    <div class="flex items-center gap-6 sm:pr-[20vw]">
        <div class="flex items-center gap-3">
            <a href="https://spatie.be"><x-logo-spatie class="text-indigo-900 hover:text-red-500 transition h-6"/></a>
            <span class="markup-h4 text-xs font-semibold">
                presents
            </span>
        </div>

        <a href="https://spatie.be/docs/laravel-comments/" class="ml-auto markup-h4 text-xs font-semibold hover:text-red-500 transition">
            Docs
        </a>
    </div>
    
    <header class="max-w-2xl mx-auto">
        <div class="mt-16 flex">
            <h1 class="markup-h1">
                Laravel
                <br/>
                <strong>Comments</strong>
                <img class="absolute left-full -ml-6 -top-4 w-24" src="/images/laravel-comments.svg"/>
            </h1>
        </div>

        <p class="mt-2 text-2xl">
            A beautiful Livewire component<br/>to associate comments with models<br/>in your Laravel application
        </p>
    </header>

    @yield('article')
</article>

@endsection
