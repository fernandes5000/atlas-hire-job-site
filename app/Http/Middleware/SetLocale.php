<?php

namespace App\Http\Middleware;

use App\Support\Locale;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeLocale = (string) $request->route('locale');

        abort_unless(Locale::has($routeLocale), 404);

        App::setLocale(Locale::appLocale($routeLocale));
        URL::defaults(['locale' => $routeLocale]);

        if ($request->hasSession()) {
            $request->session()->put('locale', $routeLocale);
        }

        return $next($request);
    }
}
