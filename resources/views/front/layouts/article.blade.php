@extends('front.layouts.master')

@section('content')

    <main class="pb-16">
        <x-layout>
            <div class="py-6 layout-sm text-xs font-extrabold uppercase tracking-widest">
                <a class="text-red-900 opacity-40 hover:opacity-100 transition-opacity duration-300" href="/"><i class="fas fa-arrow-left mr-2"></i>Back</a>
            </div>
            <article class="
                markup markup-lists markup-links markup-code
                text-lg
                "
                >
                <h1 class="layout-sm">@yield('title')</h1>
                @yield('article')
            </article>
            <div class="py-6 layout-sm text-xs font-extrabold uppercase tracking-widest">
                <a class="text-red-900 opacity-40 hover:opacity-100 transition-opacity duration-300" href="/"><i class="fas fa-arrow-left mr-2"></i>Back</a>
            </div>
        </x-layout>
    </main>


@endsection
