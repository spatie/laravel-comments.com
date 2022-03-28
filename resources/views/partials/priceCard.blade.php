<div class="text-center relative">

    <div class="">

        <div class=" absolute left-1/2 transform -translate-x-1/2  w-3/5 h-full">
            <div class="absolute w-full h-full transform -translate-x-2 -translate-y-2 bg-black border border-black"></div>
            <div class="w-2 h-full transform absolute right-0 -top-1 bg-white border border-black skew-y-[45deg]"></div>
            <div class="absolute w-full h-full bg-white border border-black"></div>
            <div class="w-2 h-full transform absolute -left-2 -top-1 bg-white border border-black skew-y-[45deg]"></div>
        </div>


        <p class="w-3/5  p-4 left-1/2 transform -translate-x-1/2">Get the entire course and start writing clean code for just:</p>

        @if($couldFetchPrice ?? '')
        @if($discount->active)
        <h4 class="mb-1 font-semibold text-red-500 uppercase tracking-widest">{{ $discount->name }} ending in</h4>
        <div class="mb-6 z-10 transform rotate-0 font-normal px-1 py-1" style="--transform-rotate: -1.5deg !important">
            <x-countdown :expires="$discount->expiresAt()">
                <span class="bg-red-900 bg-opacity-10 px-1"><span x-text="timer.days">{{ $component->days() }}</span>
                    days</span>
                <span class="bg-red-900 bg-opacity-10 px-1"><span x-text="timer.hours">{{ $component->hours() }}</span>
                    hours</span>
                <span class="bg-red-900 bg-opacity-10 px-1"><span x-text="timer.minutes">{{ $component->minutes()
                        }}</span> minutes</span>
            </x-countdown>
        </div>
        @endif
        @endif


        @if(($couldFetchPrice ?? '') && $discount->active)
        <div class="markup-body-xl">
            <span class="px-4">
                {{ $priceWithoutDiscount->formattedPrice() }}
                <img loading="lazy" class="absolute inset-0 w-full h-full mix-blend-multiply"
                    src="/images/strike-through.svg">
            </span>
        </div>
        @endif

        <div class="markup-h2 pt-4 ">
            @if($couldFetchPrice ?? '')
            {{ $price->formattedPrice() }}
            @else
            –
            @endif
        </div>

        <div class=" transform translate-y-1/2">
            <x-buy-button class="" :url="spatieUrl('https://spatie.be/products/testing-laravel')">Buy course
            </x-buy-button>
        </div>

<div>
    {{-- TO LAYOUT --}}
        VAT will be calculated during checkout by Paddle.
        We support Purchasing Power Parity.
</div>

    </div>

</div>
