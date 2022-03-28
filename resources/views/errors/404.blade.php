
@extends('front.layouts.article')

@section('title', 'Page not found')

@section('article')
<x-layout small>
    <div id="course_contents" class=" md:w-2/3 mt-16 p-12 ">

        <div class="w-full absolute h-full -left-4 -top-4 bg-star-patern bg-star bg-repeat"></div>
        <div class="w-full absolute h-full bg-yellow left-0 top-0"></div>
        <img class="absolute md:opacity-0 w-36 -left-56 top-32 transform rotate-6" src="/images/r@4x.png" alt="">
        <img class="absolute md:opacity-0 w-36 -right-56 transform -rotate-12" src="/images/w-3D@4x.png" alt="">
        <div class="text-2xl">
            <p>Aaaw… <br>We couldn't find this page.</p>
        
            <p class="mt-8">Let's start from scratch and get you back to <a class="markup-link" href="/">the homepage</a>.</p>
        </div>

    </div>

</x-layout>
@endsection
