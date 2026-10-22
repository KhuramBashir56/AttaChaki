<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function switchLang($locale)
    {
        if (in_array($locale, ['en', 'ur'])) {
            Session::put('locale', $locale);
        }

        return redirect()->back();
    }
}
