<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $vacancies = Vacancy::query()->published()->get();

        return view('home', [
            'vacancies' => $vacancies,
            'featuredVacancies' => $vacancies->where('is_featured', true)->take(3)->values(),
            'stats' => [
                'open_roles' => $vacancies->count(),
                'hiring_teams' => $vacancies->pluck('team')->unique()->count(),
                'languages' => count(config('locales.available')),
            ],
        ]);
    }
}
