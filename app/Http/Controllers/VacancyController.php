<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\View\View;

class VacancyController extends Controller
{
    public function show(string $_locale, Vacancy $vacancy): View
    {
        abort_unless($vacancy->is_published, 404);

        $relatedVacancies = Vacancy::query()
            ->published()
            ->whereKeyNot($vacancy->getKey())
            ->take(3)
            ->get();

        return view('vacancies.show', [
            'vacancy' => $vacancy,
            'relatedVacancies' => $relatedVacancies,
        ]);
    }
}
