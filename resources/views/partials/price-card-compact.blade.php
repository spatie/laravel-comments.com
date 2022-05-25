<div>
    <section class="my-4 flex flex-col items-center">        
        <div>
            <span class="block sm:absolute sm:bottom-2 sm:right-full sm:px-2 text-xs text-center font-semibold whitespace-nowrap markup-h4">From</span>
            <span class="markup-h1 font-black">
            @if($couldFetchPrice ?? '')
                {{ $price->formattedPrice() }}
            @else
                –
            @endif
            </span>
            @if(($couldFetchPrice ?? '') && $discount->active)
            <span class="block sm:absolute sm:bottom-2 sm:left-full sm:px-2 text-xs text-center font-semibold whitespace-nowrap markup-h4">
                instead of <span class="line-through">{{ $priceWithoutDiscount->formattedPrice() }}</span>
            </span>
            @endif
        </div>
   
    </section>
    
    @if(($couldFetchPrice ?? '') && $discount->active)
        <section class="my-4 p-2 flex items-center gap-1 text-xs leading-tight text-red-500 bg-red-500/10 rounded">
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


    <section class="mt-4 flex justify-center">
        <x-button class="from-red-400 to-red-500" :url="spatieUrl('https://spatie.be/products/laravel-comments')">See options
        </x-button>
    </section>
</div>
