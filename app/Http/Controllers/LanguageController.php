<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    function set_lang(Request $request, $lang){
        switch($lang){
            case 'zh_tw':
                App::setLocale('zh_tw');
                Session::put('locale', App::getLocale());
                break;
            default:
                App::setLocale(config('app.fallback_locale'));
                Session::put('locale', App::getLocale());
                break;
        }
        return Redirect::back();
    }
}
