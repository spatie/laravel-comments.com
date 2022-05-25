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
            $user = User::find(1);

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
        $comment = Comment::create([
            'commentator_type' => User::class,
            'commentator_id' => 2,
            'commentable_type' => Post::class,
            'commentable_id' => $post->id,
            'approved_at' => now(),
            'original_text' => "Hi there!

Feel free to try out this component. The comments you submit will only be visible in your session. And I promise we'll also delete them from our server after an hour.

If you have a question, feel free to [send me a mail](mailto:support@spatie.be).

Have fun! 👋",
        'text' => "<p>Hi there!</p>
<p>Feel free to try out this component. The comments you submit will only be visible in your session. And I promise we'll also delete them from our server after an hour.</p>
<p>If you have a question, feel free to <a href=\"mailto:support@spatie.be\">send me a mail</a>.</p>
<p>Have fun! 👋</p>
"
        ]);

        $freekUser = User::find(2);

        $comment->react('🥳', $freekUser);
        $comment->react('👍', $freekUser);
        $comment->react('😍', $freekUser);
    }
}
