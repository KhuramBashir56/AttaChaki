<?php

use Illuminate\Support\Facades\Route;

Route::get('language/{locale}', [App\Http\Controllers\LocalizationController::class, 'switchLang'])->name('language.switch');


Route::view('/', 'web.welcome')->name('home');
