<h2 class="markup-h3">
    Clean code tips for free
</h2>

<p class="markup-subtitle mt-4 mx-auto">
    Get an idea and subscribe to our free newsletter <br>
    with small yet handy code readability tips.
</p>

<form
    action="{{ action(\App\Http\Controllers\SubscribeToEmailListController::class) }}"
    method="post"
    accept-charset="utf-8"
    class="my-8 text-center flex items-center gap-2 max-w-md mx-auto"
>
    @csrf

    <input
        type="email"
        id="email"
        name="email"
        aria-label="Email"
        placeholder="Your Email Address"
        required
        class="w-full block h-12 px-4 {{ isset($onDark) ? 'bg-white text-red-900 bg-opacity-90 focus:bg-opacity-100' : 'bg-gray-200 placeholder-gray-400 focus:bg-opacity-80' }} rounded ring-0 focus:outline-none"
    >
    <div class="button-container">
        <span class="mas">Subscribe</span>
        <button
            type="submit"
            name="submit"
            id="submit"
            class=" min-w-[12rem]">
            Subscribe
        </button>
    </div>
</form>

@error('email')
<p class="mt-4 text-sm">
    <i class="mr-1 fas fa-exclamation-circle text-red-500 text-xs"></i>
    {{ $message }}
</p>
@else
    @if(session()->has('subscribed'))
        <p class="mt-4 text-sm">
            <i class="mr-1 fas fa-check-circle text-green-500 text-xs"></i>
            Thank you for subscribing!
        </p>
    @else
        <p class="mt-4 text-xs leading-[1.65]">
            You get a weekly email containing a clean code tip and
            <br>occasional course updates for the next five weeks.
        </p>
    @endif
@endif

<div x-data="{ open: true }" x-show="open">
    @if(flash()->message)
        <div
            class="fixed z-50 fix-z top-0 left-0 h-16 w-full flex items-center justify-center py-8 px-4 bg-green-500 border-b border-black border-opacity-50 shadow-xl {{ flash()->class }} md:text-xl text-white text-center">
            <span>{{ flash()->message }}</span>

            <a href="#" @click="open = false" class="p-4 opacity-50 hover:opacity-75">&times;</a>
        </div>
    @endif
</div>
