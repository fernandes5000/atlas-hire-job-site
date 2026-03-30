<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacancyController;
use App\Http\Middleware\SetLocale;
use App\Support\Locale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return redirect()->route('home', ['locale' => Locale::preferredRouteLocale($request)]);
})->name('root');

Route::prefix('{locale}')
    ->whereIn('locale', Locale::routeLocales())
    ->middleware(SetLocale::class)
    ->group(function (): void {
        Route::get('/', HomeController::class)->name('home');
        Route::get('/vacancies/{vacancy:slug}', [VacancyController::class, 'show'])->name('vacancies.show');
    });
