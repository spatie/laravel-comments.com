<a class="group flex gap-4" href="{{ $url }}">
    <img class="flex-none block w-12 h-12 rounded overflow-hidden bg-white object-cover shadow-md group-hover:shadow-sm group-hover:top-px transition" src="{{ $cover ?? ''}}"/>

    <div>
        <h3 class="markup-h3 text-sm font-black">{{ $title ?? '' }}</h3>
        
        <div class="mt-1.5 text-xs">
            {{ $slot }}
        </div>

        <div class="mt-1.5 text-xs block text-indigo-500 leading-tight">{{ parse_url($url, PHP_URL_HOST) }}</div>
    </div>
</a>
