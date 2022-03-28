<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeToEmailListRequest;
use Exception;
use Illuminate\Support\Facades\Http;

class SubscribeToEmailListController
{
    public function __invoke(SubscribeToEmailListRequest $request)
    {
        if (! app()->environment('production')) {
            flash()->error('Subscribing is only possible in production');
        }

        $response = Http::post("https://spatie.be/mailcoach/subscribe/" .config('services.mailcoach.subscription_uuid'), [
            'email' => $request->email,
            'tags' => 'readable-php',
        ]);

        if (! $response->successful()) {
            throw new Exception('Could not subscribe');
        }

        flash()->success("You've been subscribed to our Readable PHP newsletter! You can expect the first mail to arrive soon.");

        return back();
    }
}
