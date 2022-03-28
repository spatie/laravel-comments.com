<div class="bg-white max-w-sm px-12 pb-6 {{ $class ?? '' }}">
    <div class=" absolute left-1/2 transform -translate-x-1/2  w-full h-full">
        <div
            class="absolute w-full h-full transform -translate-x-2 -translate-y-2 bg-black border border-black">
        </div>
        <div
            class="w-2 h-full transform absolute right-0 -top-1 bg-white border border-black skew-y-[45deg]">
        </div>
        <div class="absolute w-full h-full bg-yellow border border-black"></div>
        <div
            class="w-2 h-full transform absolute -left-2 -top-1 bg-white border border-black skew-y-[45deg]">
        </div>
    </div>
    <p class="{{ $textClass }} pt-6">
        {{ $slot }}
    </p>

    <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/{{ $handle ?? '' }}" class="mt-4 mb-2 group flex items-center text-lg">
        <div class=" mr-4">
            <div class="absolute -top-1 -left-0.5 w-10 h-10 rounded-full bg-red-100"></div>
            <div class=" ">
                <div class="absolute w-full h-full border-blue-500 border top-[.12rem] left-[.12rem] group-hover:top-0 group-hover:left-0 transition-all "></div>
                <div class="absolute w-full h-full bg-yellow top-0 left-0"></div>

                <img loading="lazy" src="/images/testimonials/{{ $avatar ?? '' }}" class="translate-x-[-.12rem] translate-y-[-.12rem] group-hover:translate-y-0 group-hover:translate-x-0 transition-transform transform relative w-10 h-10 mix-blend-multiply" alt="{{ $name ?? '' }}">

            </div>
        </div>
        <div>
            <div class="font-semibold">{{ $name ?? '' }}</div>
            <div class="-mt-1 text-xs">
                {{ $title ?? '' }}
            </div>
        </div>
    </a>

</div>
