<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscribeToEmailListController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::view('terms-of-use', 'front.legal.terms-of-use')->name('termsOfUse');
Route::view('privacy', 'front.legal.privacy')->name('privacy');

Route::post('/subscribe', SubscribeToEmailListController::class);
