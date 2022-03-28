<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeToEmailListRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email']
        ];
    }
}
