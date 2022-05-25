<div {{ $attributes->merge(['class' => 'markup-code'])}}>
    <x-highlighted-markdown>
    {{ $slot}}
    </x-highlighted-markdown>
</div>
