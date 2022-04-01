@extends('front.layouts.master')

@section('title', 'Laravel Comments')

@section('description', 'A package for laravel. Get a comments section up an running in no time')

@section('content')

<section class="grid grid-cols-1 sm:grid-cols-5 container mx-auto px-8 sm:px-0">
    @include('partials.hero')
</section>
<section class="grid grid-cols-1 md:grid-cols-5 container px-8 sm:mx-auto">
    <div class="sm:col-span-3 sm:col-start-2 grid pb-12 sm:pb-48 sm:grid-cols-2 grid-cols-1">
        <div class="pricecard-purple">
            @include('partials.pricecard')
        </div>

        <div class="pricecard-white transform translate-y-12 -translate-x-px">
            @include('partials.pricecard')
        </div>
    </div>
</section>
<section class="w-screen px-8 sm:px-0">
    @include('partials.demo')
</section>
<section class="container mx-auto mt-4 pt-20  sm:border-t border-black  px-8 sm:px-0">

    @include('partials.features')
</section>
<section class="container mx-auto grid grid-cols-1 md:grid-cols-5 border-t border-black p-8 md:p-0">
    @include('partials.instalation')
</section>

<section class="bg-black py-12 px-8 md:px-0">
    @include('partials.related')
</section>




@endsection