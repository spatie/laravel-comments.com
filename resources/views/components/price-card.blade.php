<div {{ $attributes->merge(['class' => 'p-12 rounded shadow-2xl'])}}>

    <h3 class="markup-h3">
        {{ $title ?? '' }}
    </h3>

    {{ $slot }}

    <section class="my-6 flex flex-col items-center">
        @if(($couldFetchPrice ?? '') && $discount->active)
        <div class="px-4 leading-none line-through opacity-50">
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
    </section>

    @if(($couldFetchPrice ?? '') && $discount->active)
        <section class="flex flex-col items-center gap-1 markup-h4 text-red-500">
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

    <section class="mt-6 flex justify-center">
        {{ $button ?? '' }}
    </section>
</div>
