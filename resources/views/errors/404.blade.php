
@extends('front.layouts.article')

@section('title', 'Page not found')

@section('article')
    <section id="404" class="mt-24 max-w-md sm:max-w-2xl mx-auto">

        <div class="text-2xl">
            <p>Aaaw… we couldn't find this page.
                <br/>
            Let's start from scratch and get you back on track.
            </p>
            <div class="mt-6">
                <x-button url="/">
                    Go to the homepage
                </x-button>
            </div>
        </div>

    </section>

@endsection
