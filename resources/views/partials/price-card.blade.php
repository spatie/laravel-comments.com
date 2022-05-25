<div class="p-12">

    <h3 class="markup-h3">
        <strong class="font-black">Single</strong>
        <br/>License
    </h3>

    <ul class="mt-4 mb-6 markup-ul text-sm grid gap-1">
        <li>
            A drop-in Livewire component
        </li>
        <li>
            Nested comments
        </li>
        <li>
            Emoji reactions 👍
        </li>
        <li>
            Notifications
        </li>
        <li>
            Markdown and code highlighting
        </li>
        <li>
            Includes one year of updates
        </li>
        <li>
            Use in a <span class="font-semibold">single application</span>
        </li>
    </ul>

    <section class="my-6 flex flex-col items-start">
        @if(($couldFetchPrice ?? '') && $discount->active)
        <div class="markup-h4 leading-none line-through opacity-50">
            {{ $priceWithoutDiscount->formattedPrice() }}
        </div>
        @endif

        <div class="markup-h2">
            @if($couldFetchPrice ?? '')
                {{ $price->formattedPrice() }}
            @else
                –
            @endif
        </div>

        @if(($couldFetchPrice ?? '') && $discount->active)
            <section class="mt-1 p-2 flex flex-col items-start gap-1 text-xs leading-tight text-red-500 bg-red-500/10 rounded">
                <h4 class="">{{ $discount->name }} ending in</h4>

                <div>
                    <x-countdown :expires="$discount->expiresAt()">
                        <span>
                            <span class="font-semibold" x-text="timer.days">{{ $component->days() }}</span>
                            days
                        </span>
                        <span>
                            <span class="font-semibold" x-text="timer.hours">{{ $component->hours() }}</span>
                            hours
                        </span>
                        <span>
                            <span class="font-semibold" x-text="timer.minutes">{{ $component->minutes() }}</span>
                            minutes
                        </span>
                    </x-countdown>
                </div>
            </section>
        @endif
    </section>


    <section class="mt-8 flex justify-start">
        <x-button class="from-red-400 to-red-500" :url="spatieUrl('https://spatie.be/products/laravel-comments')">Buy package
        </x-button>
    </section>
</div>
