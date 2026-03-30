<?php

namespace App\Support;

use Illuminate\Http\Request;

class Locale
{
    public static function available(): array
    {
        return config('locales.available', []);
    }

    public static function routeLocales(): array
    {
        return array_keys(self::available());
    }

    public static function has(string $routeLocale): bool
    {
        return array_key_exists($routeLocale, self::available());
    }

    public static function defaultRouteLocale(): string
    {
        return config('locales.default', 'en-US');
    }

    public static function appLocale(string $routeLocale): string
    {
        return self::available()[$routeLocale]['app'] ?? config('app.fallback_locale');
    }

    public static function preferredRouteLocale(Request $request): string
    {
        $sessionLocale = $request->hasSession() ? $request->session()->get('locale') : null;

        if (is_string($sessionLocale) && self::has($sessionLocale)) {
            return $sessionLocale;
        }

        $preferred = $request->getPreferredLanguage(self::routeLocales());

        if (is_string($preferred)) {
            $normalized = str_replace('_', '-', $preferred);

            foreach (self::routeLocales() as $routeLocale) {
                if (strcasecmp($routeLocale, $normalized) === 0) {
                    return $routeLocale;
                }
            }
        }

        return self::defaultRouteLocale();
    }
}
