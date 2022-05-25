
@extends('front.layouts.article')

@section('title', 'Page not found')

@section('article')
    <section id="404" class="mt-24 max-w-md sm:max-w-2xl mx-auto">

        <div class="text-2xl">
            <p>Aaaw… we couldn't find this page.
                <br/>
            Let's get you back to the homepage so you can leave a bad review there 😅.
            </p>
            <div class="mt-6">
                <x-button url="/">
                    Go to the homepage
                </x-button>
            </div>
        </div>

    </section>

@endsection
