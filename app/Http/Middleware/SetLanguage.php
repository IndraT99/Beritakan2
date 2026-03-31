<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLanguage
{
    /**
     * use Illuminate\Support\Facades\Session;
     *
     * @param  Request  $request
     * @param  Closure  $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $langIdLanguage = empty(Session::get('frontLanguageChange'));
        if ($langIdLanguage) {
                $settings = getSettingValue();
                $langId = $settings['front_language'] ?? 1;
                $language = Language::find($langId);
                App::setLocale($language ? $language->iso_code : 'en');
        } else {
            $langId = Session::get('frontLanguageChange');
            $language = Language::find($langId);
            App::setLocale($language ? $language->iso_code : 'en');
        }

        return $next($request);
    }
}
