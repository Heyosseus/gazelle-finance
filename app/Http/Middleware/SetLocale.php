<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Retrieve the locale from session
        $locale = session()->get('locale', config('app.locale'));

        // Set the locale for the current request
        App::setLocale($locale);

        return $next($request);
    }
}

