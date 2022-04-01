<div class="col-span-5 inline-grid items-start py-4 grid-cols-1 sm:grid-cols-5  border-b border-black">
    <div class="col-start-2 md:col-start-1 flex items-center gap-4">
        <a href="https://spatie.be">
            <img class="h-6 min-w-12" src="/images/logo.svg" alt="logo spatie">
        </a>

        <p class="text-sm">presents</p>
    </div>
    <h1 class="col-start-2 mt-4 md:mt-0 col-span-3 text-5xl md:text-7xl font-normal uppercase leading-[0.74]">
        /Laravel</h1>
</div>
<div class="col-span-5 inline-grid items-start py-4 grid-cols-1 sm:grid-cols-5  border-b border-black">
    <h1 class="col-span-3 col-start-2 text-5xl md:text-7xl font-bold flex items-end gap-4 uppercase leading-[0.74]">
        Comments
        <a href="https://github.com/spatie/laravel-comments"><img src="/images/github.svg" alt="logo github"></a>

    </h1>

</div>
<div class="col-span-5 inline-grid items-start py-4 pb-16 sm:pb-32 grid-cols-1 sm:grid-cols-5">
    <div class="col-start-2 col-span-3">
        {{--
        <p>
        <div class="w-4 h-4 sm:w-3 sm:h-3 inline-block bg-yellow"></div>
        <span class="text-2xl sm:text-base">A package for laravel. Get a comments section up an running in no
            time</span>
        </p>
        --}}

        @include('partials.comments')

    </div>
</div>

