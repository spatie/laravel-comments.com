<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\PriceApi\SpatiePriceApi;

class HomeController
{
    public function __invoke(Request $request)
    {
        $user = User::find(1);

        auth()->login($user);

        $post = Post::createOrFindForSession();

        if ($request->get('tidbits')) {
            flash()->success("You've been subscribed to our Readability Tidbits newsletter! You can expect the first mail to arrive soon.");

            return redirect(action(self::class));
        }

        $purchasableId = config('services.spatie_prices_api.purchasable_id');

        $prices = SpatiePriceApi::getPriceForPurchasable($purchasableId);

        return view('front.home.index', [
            'couldFetchPrice' => $prices['couldFetchPrice'],
            'price' => $prices['actual'],
            'priceWithoutDiscount' => $prices['withoutDiscount'],
            'discount' => $prices['discount'],
            'post' => $post,
        ]);
    }
}
