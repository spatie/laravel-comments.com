<div {{ $attributes->except(['small'])->merge(['class' => (isset($small) ? 'max-w-2xl md:max-w-3xl' : 'max-w-2xl md:max-w-4xl') . ' mx-auto px-8'])}}>
    {{ $slot }}
</div>
