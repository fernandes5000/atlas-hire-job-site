@php
    $teamPalette = [
        'design' => 'bg-rose-100 text-rose-700',
        'engineering' => 'bg-sky-100 text-sky-700',
        'product' => 'bg-amber-100 text-amber-700',
        'growth' => 'bg-emerald-100 text-emerald-700',
    ];
@endphp

<x-layouts.app :meta-title="$vacancy->translate('title').' | '.config('app.name')" :meta-description="$vacancy->translate('excerpt')">
    <div class="px-4 pb-16 pt-5 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-6xl space-y-10">
            <header class="panel-shell px-5 py-4 sm:px-6">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[var(--color-ink)] text-sm font-bold tracking-[0.18em] text-white">
                            AH
                        </span>
                        <div>
                            <p class="text-lg font-semibold text-slate-950">{{ config('app.name') }}</p>
                            <p class="text-sm text-slate-500">{{ __('site.hero.eyebrow') }}</p>
                        </div>
                    </a>

                    <x-language-switcher :vacancy="$vacancy" />
                </div>
            </header>

            <section class="panel-shell overflow-hidden p-8 sm:p-10">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-600 transition hover:text-slate-950">
                    <span aria-hidden="true">←</span>
                    {{ __('site.vacancy.back') }}
                </a>

                <div class="mt-8 grid gap-8 lg:grid-cols-[1.05fr_0.95fr]">
                    <div>
                        <p class="meta-label">{{ $vacancy->company_name }}</p>
                        <h1 class="mt-4 text-4xl font-semibold leading-tight tracking-tight text-slate-950 sm:text-5xl">
                            {{ $vacancy->translate('title') }}
                        </h1>
                        <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-600">
                            {{ $vacancy->translate('excerpt') }}
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <span @class([
                                'inline-flex rounded-full px-3 py-1 text-sm font-semibold',
                                $teamPalette[$vacancy->team] ?? 'bg-slate-100 text-slate-700',
                            ])>
                                {{ __('site.teams.'.$vacancy->team) }}
                            </span>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-sm font-semibold text-slate-700">
                                {{ __('site.work_models.'.$vacancy->work_model) }}
                            </span>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-sm font-semibold text-slate-700">
                                {{ __('site.employment_types.'.$vacancy->employment_type) }}
                            </span>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-sm font-semibold text-slate-700">
                                {{ __('site.experience_levels.'.$vacancy->experience_level) }}
                            </span>
                        </div>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="{{ $vacancy->application_url }}" class="button-primary">
                                {{ __('site.vacancy.apply') }}
                            </a>
                            <a href="#details" class="button-secondary">
                                {{ __('site.vacancy.about') }}
                            </a>
                        </div>
                    </div>

                    <aside class="surface-card h-fit">
                        <span class="section-label">{{ __('site.vacancy.summary') }}</span>

                        <dl class="mt-6 grid gap-5 sm:grid-cols-2">
                            <div>
                                <dt class="meta-label">{{ __('site.vacancy.company') }}</dt>
                                <dd class="meta-value">{{ $vacancy->company_name }}</dd>
                            </div>
                            <div>
                                <dt class="meta-label">{{ __('site.cards.location') }}</dt>
                                <dd class="meta-value">{{ $vacancy->translate('location') }}</dd>
                            </div>
                            <div>
                                <dt class="meta-label">{{ __('site.cards.salary') }}</dt>
                                <dd class="meta-value">{{ $vacancy->salaryLabel() }}</dd>
                            </div>
                            <div>
                                <dt class="meta-label">{{ __('site.vacancy.posted') }}</dt>
                                <dd class="meta-value">{{ $vacancy->posted_at?->isoFormat('ll') }}</dd>
                            </div>
                            <div>
                                <dt class="meta-label">{{ __('site.cards.work_model') }}</dt>
                                <dd class="meta-value">{{ __('site.work_models.'.$vacancy->work_model) }}</dd>
                            </div>
                            <div>
                                <dt class="meta-label">{{ __('site.cards.employment_type') }}</dt>
                                <dd class="meta-value">{{ __('site.employment_types.'.$vacancy->employment_type) }}</dd>
                            </div>
                        </dl>
                    </aside>
                </div>
            </section>

            <section id="details" class="grid gap-6 lg:grid-cols-2">
                <article class="surface-card lg:col-span-2">
                    <span class="section-label">{{ __('site.vacancy.about') }}</span>
                    <p class="mt-6 max-w-4xl text-lg leading-8 text-slate-700">
                        {{ $vacancy->translate('description') }}
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-3">
                        @foreach ($vacancy->translatedList('highlights') as $highlight)
                            <div class="rounded-[1.5rem] border border-slate-200/70 bg-slate-50/80 p-5 text-sm font-medium text-slate-700">
                                {{ $highlight }}
                            </div>
                        @endforeach
                    </div>
                </article>

                <article class="surface-card">
                    <span class="section-label">{{ __('site.vacancy.responsibilities') }}</span>
                    <ul class="content-list mt-6">
                        @foreach ($vacancy->translatedList('responsibilities') as $responsibility)
                            <li>{{ $responsibility }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="surface-card">
                    <span class="section-label">{{ __('site.vacancy.requirements') }}</span>
                    <ul class="content-list mt-6">
                        @foreach ($vacancy->translatedList('requirements') as $requirement)
                            <li>{{ $requirement }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="surface-card lg:col-span-2">
                    <span class="section-label">{{ __('site.vacancy.benefits') }}</span>
                    <ul class="content-list mt-6 grid gap-x-8 gap-y-3 md:grid-cols-2">
                        @foreach ($vacancy->translatedList('benefits') as $benefit)
                            <li>{{ $benefit }}</li>
                        @endforeach
                    </ul>
                </article>
            </section>

            <section class="space-y-6">
                <div class="max-w-3xl space-y-4">
                    <span class="section-label">{{ __('site.sections.related.eyebrow') }}</span>
                    <h2 class="text-3xl font-semibold tracking-tight text-slate-950 sm:text-4xl">
                        {{ __('site.sections.related.title') }}
                    </h2>
                    <p class="text-lg leading-8 text-slate-600">
                        {{ __('site.sections.related.description') }}
                    </p>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">
                    @foreach ($relatedVacancies as $relatedVacancy)
                        <x-vacancy-card :vacancy="$relatedVacancy" />
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</x-layouts.app>
