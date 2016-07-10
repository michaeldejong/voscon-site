<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Config;
use Locale;

class Locales
{

    public function handle($request, Closure $next, $guard = null) {
        $url_lang = Locale::acceptFromHttp($request->header('Accept-Language'));
        $query_lang = $request->lang;
        $session_lang = $request->session()->get('lang');

        if (!empty($query_lang) AND in_array($query_lang, Config::get('app.languages'))) {
            App::setLocale($query_lang);

            if (!empty($url_lang) AND $url_lang == $query_lang) {
                $request->session()->forget('lang');
            }
            else {
                $request->session()->put('lang', $query_lang);
            }
        }
        else if (!empty($session_lang) AND in_array($session_lang, Config::get('app.languages'))) {
            App::setLocale($session_lang);
        }
        else if (!empty($url_lang) AND in_array($url_lang, Config::get('app.languages'))) {
            App::setLocale($url_lang);
        }
        else {
            App::setLocale(Config::get('app.locale'));
        }

        return $next($request);
    }

}