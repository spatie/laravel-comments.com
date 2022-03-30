@extends('front.layouts.master')

@section('title', 'Laravel Comments')

@section('description', 'A package for laravel. Get a comments section up an running in no time')

@section('content')

<section class="grid grid-cols-1 sm:grid-cols-5 container mx-auto px-8 sm:px-0">
    <div class="col-span-5 inline-grid items-start py-4 grid-cols-1 sm:grid-cols-5  border-b border-black">
        <div class="col-start-2 md:col-start-1 flex items-center gap-4">
            <a href="https://spatie.be">
                <img class="h-6 min-w-12" src="/images/logo.svg" alt="logo spatie">
            </a>
            
            <p class="text-sm">presents</p>
        </div>
        <h1 class="col-start-2 mt-4 md:mt-0 col-span-3 text-5xl md:text-7xl font-normal uppercase leading-[0.74]">/Laravel</h1>
    </div>
    <div class="col-span-5 inline-grid items-start py-4 grid-cols-1 sm:grid-cols-5  border-b border-black">
        <h1 class="col-span-3 col-start-2 text-5xl md:text-7xl font-bold flex items-end gap-4 uppercase leading-[0.74]">
            Comments
            <a href="https://github.com/spatie/laravel-comments"><img src="/images/github.svg" alt="logo github"></a>
            
        </h1>

    </div>
    <div class="col-span-5 inline-grid items-start py-4 pb-16 sm:pb-32 grid-cols-1 sm:grid-cols-5">
            <div class="col-start-2 col-span-2">
                
                <p>
                    <div class="w-4 h-4 sm:w-3 sm:h-3 inline-block bg-yellow"></div>
                    <span class="text-2xl sm:text-base">A package for laravel. Get a comments section up an running in no time</span> 
                </p>
                
            </div>
    </div>
    
</section>
<section class="grid grid-cols-1 md:grid-cols-5 container px-8 sm:mx-auto">
    <div class="sm:col-span-3 sm:col-start-2 grid pb-24 sm:pb-48 sm:grid-cols-2 grid-cols-1">
        <div class="pricecard-purple">
            @include('partials.pricecard')
        </div>
        
        <div class="pricecard-white transform translate-y-12 -translate-x-px">
            @include('partials.pricecard')
        </div>
    </div>
   
</section>
<section class="w-screen px-8 sm:px-0">
    <div class="absolute w-full h-3/4 bg-black top-0 left-0">

    </div>
    <div class="container mx-auto">
        <h1 class="uppercase text-7xl border-b py-4 border-white text-white">De<span class="font-bold">Mo</span></h1>
    </div>
    

    <div class="container mt-4 flex flex-wrap mx-auto  bg-gray-100 shadow-xl p-4">
        <div class="flex pb-4 gap-2">
            <div class="h-3 w-3 rounded-full bg-red-400"></div>
            <div class="h-3 w-3 rounded-full bg-yellow"></div>
            <div class="h-3 w-3 rounded-full bg-green-400"></div>
        </div>
        <div class="bg-white w-full h-96">

        </div>
    </div>

</section>
<section class="container mx-auto mt-4 pt-20  sm:border-t border-black  px-8 sm:px-0">
    <h1 class="uppercase text-7xl mb-8 py-4">Why<span class="font-bold"> This Package</span></h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5">
        <div class="col-span-1 border  border-black  border-b-0 md:border-b md:border-r-0 p-4 hover:bg-gray-100 transition">
            <h2 class="font-bold text-xl">Highly Costumizable</h2>
            <p class="">
                <div class="w-3 h-3 inline-block bg-yellow"></div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el
            </p>
        </div>
        <div class="col-span-1 hidden md:block border border-t-0  border-black p-4">
            
        </div>
        <div class="col-span-1 md:col-start-3 border  border-black border-b-0 md:border-b md:border-l-0 p-4 hover:bg-gray-100 transition">
            <h2 class="font-bold text-xl">Highly Costumizable</h2>
            <p class="">
                <div class="w-3 h-3 inline-block bg-red-400"></div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el
            </p>
        </div>
        <div class="col-span-1 md:col-start-2 lg:col-start-4 border border-black md:border-t-0 md:border-b-0 lg:border-l-0 lg:border-r-0 lg:border-t lg:border-b p-4 hover:bg-gray-100 transition">
            <h2 class="font-bold text-xl">Highly Costumizable</h2>
            <p class="">
                <div class="w-3 h-3 inline-block bg-green-400"></div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el
            </p>
        </div>
        <div class="col-span-1 border-l border-b hidden lg:block  border-black p-4">
            
        </div>
        <div class="col-span-1 lg:col-start-2 border  border-black border-b-0  md:border-l-0 border-t-0 lg:border-l p-4 hover:bg-gray-100 transition">
            <h2 class="font-bold text-xl">Highly Costumizable</h2>
            <p class="">
                <div class="w-3 h-3 inline-block bg-purple"></div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el
            </p>
        </div>
        <div class="col-span-1 lg:col-start-5 border  border-black md:border-r-0 lg:border-t-0 border-b-0  lg:border-r p-4 hover:bg-gray-100 transition">
            <h2 class="font-bold text-xl">Highly Costumizable</h2>
            <p class="">
                <div class="w-3 h-3 inline-block bg-yellow"></div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el
            </p>
        </div>
        <div class="col-span-1 lg:col-start-2 border-r border-t hidden lg:block  border-black p-4">
            
        </div>

        <div class="col-span-1 lg:col-start-3 border  border-black border-b-0 lg:border-l-0 p-4 hover:bg-gray-100 transition">
            <h2 class="font-bold text-xl">Highly Costumizable</h2>
            <p class="">
                <div class="w-3 h-3 inline-block bg-red-400"></div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el
            </p>
        </div>
        <div class="col-span-1 lg:col-start-5  border-t hidden md:block  border-black p-4">
            
        </div>
    </div>
</section>
<section class="container mx-auto grid grid-cols-1 md:grid-cols-5 border-t border-black p-8 md:p-0">
    <h1 class="col-span-2 uppercase text-5xl  py-4 border-b md:border-b-0 md:border-r border-black">easy<span class="font-bold"> Instalation</span></h1>
    <div class="col-span-3 md:p-4 md:pr-0">
        <p class="my-4 md:mt-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el</p>
        <div class="w-full relative">
            <x-code>
```bash
npm install -what
```
            </x-code>
        </div>
        <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el</p>
        <div class="w-full relative">
            <x-code>
```js
instalationfunction = function(){
    console.log(‘test’)
}
```
            </x-code>
        </div>
        <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae ut el</p>
        <div class="w-full relative">
            <x-code>
```bash
npm install -what
```
</x-code>
        </div>
       
    </div>
</section>
{{--
<section class="grid grid-cols-5 container mx-auto border-b border-black">
    <h1 class="col-span-2 uppercase text-5xl  py-4 border-r border-black">Other<span class="font-bold"> Products</span></h1>
    <div class="col-span-3">
        <ul class="p-4">
            <li class="flex gap-4 pb-4 border-b border-black">
                <img class="w-16 h-[fit-content]" src="/images/testing-laravel.jpeg" alt="cover from testing laravel course">
                <div  class="w-full">
                    <p>Testing Laravel</p>
                    <a href="/" class="uppercase text-xs font-bold">testing-laravel.com</a>
                </div>
                <p class="w-full">
                    A new video course to learn how to write quality tests in Pest and PHPUnit
                </p>
            </li>
            <li class="flex gap-4 py-4 border-b border-black">
                <img class="w-16 h-[fit-content]" src="/images/event-sourcing.jpeg" alt="cover from event sourcing course">
                <div  class="w-full">
                    <p>Event Sourcing</p>
                    <a href="/" class="uppercase text-xs font-bold">event-sourcing-course.com</a>
                </div>
                <p class="w-full">
                    Learn how to implement Event Sourcing in large Laravel applications in this extended course by Brent.
                </p>
            </li>
            <li class="flex gap-4 py-4 border-b border-black">
                <img class="w-16 h-[fit-content]" src="/images/testing-laravel.jpeg" alt="cover from testing laravel course">
                <div  class="w-full">
                    <p>Testing Laravel</p>
                    <a href="/" class="uppercase text-xs font-bold">testing-laravel.com</a>
                </div>
                <p class="w-full">
                    A new video course to learn how to write quality tests in Pest and PHPUnit
                </p>
            </li>
            <li class="flex gap-4 pt-4 ">
                <img class="w-16 h-[fit-content]" src="/images/testing-laravel.jpeg" alt="cover from testing laravel course">
                <div  class="w-full">
                    <p>Testing Laravel</p>
                    <a href="/" class="uppercase text-xs font-bold">testing-laravel.com</a>
                </div>
                <p class="w-full">
                    A new video course to learn how to write quality tests in Pest and PHPUnit
                </p>
            </li>
        </ul>
    </div>
</section>

--}}
<section class="bg-black py-12 px-8 md:px-0">
    <div class="container mx-auto text-white">
        <h1 class="text-left uppercase  text-5xl   py-4 ">Other<span class="font-bold"> Products</span></h1>
        <div class="max-w-md">
            <p class=" ">
                <div class="w-3 h-3 inline-block bg-green-400"></div>
                This package is from the team that already brought you these products and courses
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-20 mt-12">
            <div class="relative transform rotate-3 hover:rotate-0 transition group px-24 md:px-0">
                <img src="/images/testing-laravel.jpeg" alt="">
                <div class="absolute w-full h-full top-0 left-0 p-2 bg-white opacity-0 transition group-hover:opacity-100 ">
                    <a class="w-full h-full cursor-pointer flex items-center justify-center text-black" href="/">
                        <p class="uppercase mt-4 font-bold text-xs">
                            visit site
                        </p>
                        <div class="w-3 h-3 inline-block border-t border-r border-black"></div>
                    </a>
                </div>
            </div>
            <div class="relative transform -rotate-3 hover:rotate-0 transition group px-24 md:px-0 ">
                <img  src="/images/ray.jpeg" alt="">
                <div class="absolute w-full h-full top-0 left-0 p-2 bg-white opacity-0 transition group-hover:opacity-100">
                    <a class="w-full h-full cursor-pointer flex items-center justify-center text-black" href="/">
                        <p class="uppercase mt-4 font-bold text-xs">
                            visit site
                        </p>
                        <div class="w-3 h-3 inline-block border-t border-r border-black"></div>
                    </a>
                </div>
            </div>
            <div class="relative transform rotate-3 hover:rotate-0 transition group px-24 md:px-0 ">
                <img  src="/images/packagetraining.jpeg" alt="">
                <div class="absolute w-full h-full top-0 left-0 p-2 bg-white opacity-0 transition group-hover:opacity-100">
                    <a class="w-full h-full cursor-pointer flex items-center justify-center text-black" href="/">
                        <p class="uppercase mt-4 font-bold text-xs">
                            visit site
                        </p>
                        <div class="w-3 h-3 inline-block border-t border-r border-black"></div>
                    </a>
                </div>
            </div>
            <div class="relative transform -rotate-3 hover:rotate-0 transition group px-24 md:px-0 ">
                <img  src="/images/media-library.jpeg" alt="">
                <div class="absolute w-full h-full top-0 left-0 p-2 bg-white opacity-0 transition group-hover:opacity-100">
                    <a class="w-full h-full cursor-pointer flex items-center justify-center text-black" href="/">
                        <p class="uppercase mt-4 font-bold text-xs">
                            visit site
                        </p>
                        <div class="w-3 h-3 inline-block border-t border-r border-black"></div>
                    </a>
                </div>
            </div>
            <div class="relative transform rotate-3 hover:rotate-0 transition group px-24 md:px-0 ">
                <img  src="/images/event-sourcing.jpeg" alt="">
                <div class="absolute w-full h-full top-0 left-0 p-2 bg-white opacity-0 transition group-hover:opacity-100">
                    <a class="w-full h-full cursor-pointer flex items-center justify-center text-black" href="/">
                        <p class="uppercase mt-4 font-bold text-xs">
                            visit site
                        </p>
                        <div class="w-3 h-3 inline-block border-t border-r border-black"></div>
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>

</section>
<section class="h-screen"></section>



@endsection