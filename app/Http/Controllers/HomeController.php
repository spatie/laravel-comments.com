<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Comments\Models\Comment;
use Spatie\PriceApi\SpatiePriceApi;

class HomeController
{
    public function __invoke(Request $request)
    {
        if (!auth()->check()) {
            $user = User::firstWhere('email', 'guest@example.com');

            auth()->login($user);
        }

        $post = Post::createOrFindForSession();

        if ($post->wasRecentlyCreated) {
            $this->createInitialComment($post);
        }

        $purchasableId = config('services.spatie_prices_api.purchasable_id');
        $prices = SpatiePriceApi::getPriceForPurchasable($purchasableId);

        $purchasableIdUnlimited = config('services.spatie_prices_api.purchasable_id_unlimited');
        $pricesUnlimited = SpatiePriceApi::getPriceForPurchasable($purchasableIdUnlimited);

        return view('front.home.index', [
            'couldFetchPrice' => $prices['couldFetchPrice'],
            'price' => $prices['actual'],
            'priceWithoutDiscount' => $prices['withoutDiscount'],
            'priceUnlimited' => $pricesUnlimited['actual'],
            'priceWithoutDiscountUnlimited' => $pricesUnlimited['withoutDiscount'],
            'discount' => $prices['discount'],
            'post' => $post,
        ]);
    }

    protected function createInitialComment(Post $post)
    {
        $comment = new Comment([
            'commentator_type' => User::class,
            'commentator_id' => User::firstWhere('email', 'freek@spatie.be')->id,
            'commentable_type' => Post::class,
            'commentable_id' => $post->id,
            'approved_at' => now(),
            'original_text' => '',
            'text' => <<<HTML
                <p>Hi there!</p>
                <p>Feel free to try out this component. The comments you submit will only be visible in your session. And I promise we'll also <a target='_blank' href='https://github.com/spatie/laravel-comments.com/blob/ff05d51cc84946b45d71b51ab06b2914ec8aac50/app/Console/Kernel.php#L13'>delete</a> them from our server after an hour.</p>
                <p><span class='bg-green-500 text-white font-bold px-1.5 py-1 text-xs uppercase rounded-sm'>new</span> Type <code>@</code> to mention someone!</p>
                <p>If you have any questions, <a href="mailto:support@spatie.be">shoot an mail</a>.</p>
                <p>Have fun! 👋</p>
            HTML,
        ]);

        $comment->saveQuietly();

        $freekUser = User::find(2);

        $comment->react('🥳', $freekUser);
        $comment->react('👍', $freekUser);
        $comment->react('😍', $freekUser);
    }
}
