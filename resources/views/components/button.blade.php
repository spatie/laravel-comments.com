@php
    $classList = ' 
        '; 
    $classList .= (isset($attributes['class']) && strpos($attributes['class'], "from-") > -1) ? $attributes['class'] : 'from-indigo-500 to-indigo-600';
@endphp
<a href="{{ $url }}" class="
                        inline-flex
                        hover:-translate-y-px active:translate-y-px
                        before:-z-1 before:absolute before:top-0 before:right-0 before:h-full before:w-[90%] before:rounded before:-skew-y-2 hover:before:-skew-y-3 active:before:-skew-y-0  before:origin-top-right before:bg-gradient-to-r from-indigo-900/10 to-indigo-900/30 before:transition before:duration-300"
>
    <span class="{{ $classList }} h-12 px-6 flex items-center
    bg-gradient-to-br rounded shadow-md hover:shadow-lg
    text-base text-white font-sans font-black uppercase tracking-wider
    transform transition-transform duration-200"
    style="text-shadow: 2px 2px 5px rgba(0,0,0,0.15)">
        {{ $slot ?? 'Submit' }}
    </span>
</a>
