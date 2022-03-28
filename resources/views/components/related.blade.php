<a href="{{ $url }}" class="hover:scale-[1.02] transition-transform max-w-xs bg-white border border-black">
    <div class="bg-transparent p-4">
        <img class="" width="750 " height="900" alt="{{ $alt }}" loading="lazy" src="{{ $src }}">
    </div>
    <div class="pt-6 px-4 text-xs pb-4">
        <p class="leading-relaxed">
            {{ $short }}
        </p>
        <p class="mt-2">
            <span class="font-semibold underline">{{ str_replace('https://','', $url) }}</span>
        </p>
    </div>
</a>
