<div class=" relative p-6">

    <div class="">


        <h2 class="uppercase text-xl">Unlimeted <span class="block font-bold">Applications</span></h2>



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
        
        <ul class="my-5">
            <li class="flex items-center gap-2 ">
                <div class="w-3 h-3 mb-2 transform translate-y-1 text-sm bg-white"></div>
                Lorem ipsum dolor 
            </li>
            <li class="flex items-center gap-2 ">
                <div class="w-3 h-3 mb-2 transform translate-y-1 text-sm bg-white"></div>
                Lorem ipsum dolor 
            </li>
            <li class="flex items-start gap-2 ">
                <div class="w-3 h-3 mb-2 transform translate-y-1 text-sm bg-white"></div>
                Lorem ipsum dolor ipsum dolor 
            </li>
        </ul>

        <div class="">
            <x-buy-button class=" " :url="spatieUrl('https://spatie.be/products/testing-laravel')">Buy course
            </x-buy-button>
        </div>

    </div>

</div>
