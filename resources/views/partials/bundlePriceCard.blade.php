<div class="text-center relative">
    <div>
        
        <div class=" absolute left-1/2 transform -translate-x-1/2  w-3/5 h-full">
            <div class="absolute w-full h-full transform -translate-x-2 -translate-y-2 bg-black border border-black"></div>
            <div class="w-2 h-full transform absolute right-0 -top-1 bg-white border border-black skew-y-[45deg]"></div>
            <div class="absolute w-full h-full bg-gray-200 border border-black"></div>
            <div class="w-2 h-full transform absolute -left-2 -top-1 bg-white border border-black skew-y-[45deg]"></div>
        </div>

        <p class="text-center w-3/5 left-1/2 transform -translate-x-1/2 p-4">
            <span class="inline  ">
                Or Get Testing Laravel &amp; <a target="_blank" class="underline"
                    href="https://laravel-beyond-crud.com">Laravel Beyond CRUD</a> with a <br><span class="font-bold text-lg text-blue-500"> 20% discount!</span> 
            </span>
        </p>

        <div class="markup-h2">
            @if($couldFetchBundlePrice ?? '')
            {{ $bundlePrice->formattedPrice() }}
            @else
            279 USD
            @endif
        </div>

        
        <div class=" transform translate-y-1/2">
            <x-buy-button  :url="spatieUrl('https://spatie.be/bundles/solid-applications-bundle')">Buy bundle
            </x-buy-button>
        </div>

    </div>
</div>