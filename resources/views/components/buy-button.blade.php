<!--<a class="group inline-block" href="{{ $url }}">
    <img class="
        absolute -bottom-2 -right-2 w-full
    " src="/images/button.svg" alt="">
    <div
        {{ $attributes->merge(['class' => ' 
        h-16 px-6 inline-flex items-center
        bg-blue-500 hover:bg-blue-600
        text-base md:text-xl text-white font-sans font-black uppercase tracking-widest
        group-hover:translate-y-[2px] group-hover:translate-x-[2px] transform 
        transition-transform duration-300']) }}>
        {{ $slot ?? 'Buy&nbsp;now' }}

    </div>
</a>-->

<a class="ml-2 button-container" href="{{ $url }}">
    <span class="mas bg-white">Buy course now</span>
    <button
        type="submit"
        name="submit"
        id="submit"
        class="">
        Buy course now
    </button>
</a>
