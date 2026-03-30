<x-layouts.app :meta-title="__('site.meta.title')" :meta-description="__('site.meta.description')">
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

                    <div class="flex flex-col gap-4 md:items-end">
                        <nav class="hidden items-center gap-6 text-sm font-medium text-slate-600 md:flex">
                            <a href="#featured" class="transition hover:text-slate-950">{{ __('site.nav.featured') }}</a>
                            <a href="#process" class="transition hover:text-slate-950">{{ __('site.nav.process') }}</a>
                            <a href="#openings" class="transition hover:text-slate-950">{{ __('site.nav.openings') }}</a>
                        </nav>

                        <x-language-switcher />
                    </div>
                </div>
            </header>

            <section class="grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">
                <div class="panel-shell overflow-hidden p-8 sm:p-10 fade-up">
                    <span class="section-label">{{ __('site.hero.eyebrow') }}</span>

                    <h1 class="mt-8 max-w-3xl text-4xl font-semibold leading-tight tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                        {{ __('site.hero.title') }}
                    </h1>

                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                        {{ __('site.hero.description') }}
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#openings" class="button-primary">{{ __('site.hero.primary_action') }}</a>
                        <a href="#process" class="button-secondary">{{ __('site.hero.secondary_action') }}</a>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-3">
                        @foreach (trans('site.hero.highlights') as $highlight)
                            <span class="inline-flex rounded-full border border-slate-300/80 bg-white/75 px-4 py-2 text-sm font-medium text-slate-700">
                                {{ $highlight }}
                            </span>
                        @endforeach
                    </div>

                    <div class="mt-10 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-[1.5rem] border border-slate-200/70 bg-white/80 p-5 shadow-[0_16px_36px_rgba(15,23,42,0.08)]">
                            <p class="text-3xl font-semibold text-slate-950">{{ $stats['open_roles'] }}</p>
                            <p class="mt-2 text-sm text-slate-600">{{ __('site.hero.metrics.open_roles') }}</p>
                        </div>
                        <div class="rounded-[1.5rem] border border-slate-200/70 bg-white/80 p-5 shadow-[0_16px_36px_rgba(15,23,42,0.08)]">
                            <p class="text-3xl font-semibold text-slate-950">{{ $stats['hiring_teams'] }}</p>
                            <p class="mt-2 text-sm text-slate-600">{{ __('site.hero.metrics.hiring_teams') }}</p>
                        </div>
                        <div class="rounded-[1.5rem] border border-slate-200/70 bg-white/80 p-5 shadow-[0_16px_36px_rgba(15,23,42,0.08)]">
                            <p class="text-3xl font-semibold text-slate-950">{{ $stats['languages'] }}</p>
                            <p class="mt-2 text-sm text-slate-600">{{ __('site.hero.metrics.languages') }}</p>
                        </div>
                    </div>
                </div>

                <aside class="panel-shell p-6 fade-up fade-up-delay-1">
                    <span class="section-label">{{ __('site.hero.aside_eyebrow') }}</span>

                    <h2 class="mt-6 text-3xl font-semibold tracking-tight text-slate-950">
                        {{ __('site.hero.aside_title') }}
                    </h2>

                    <p class="mt-4 text-base leading-7 text-slate-600">
                        {{ __('site.hero.aside_description') }}
                    </p>

                    <div class="mt-6 space-y-4">
                        @foreach ($featuredVacancies as $featuredVacancy)
                            <a href="{{ route('vacancies.show', ['vacancy' => $featuredVacancy]) }}" class="block rounded-[1.5rem] border border-slate-200/70 bg-white/85 p-5 transition duration-300 hover:-translate-y-1 hover:border-slate-300">
                                <p class="meta-label">{{ $featuredVacancy->company_name }}</p>
                                <h3 class="mt-3 text-xl font-semibold text-slate-950">
                                    {{ $featuredVacancy->translate('title') }}
                                </h3>
                                <p class="mt-2 text-sm leading-6 text-slate-600">
                                    {{ $featuredVacancy->translate('excerpt') }}
                                </p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                                        {{ __('site.teams.'.$featuredVacancy->team) }}
                                    </span>
                                    <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                                        {{ $featuredVacancy->salaryLabel() }}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </aside>
            </section>

            <section id="featured" class="space-y-6">
                <div class="max-w-3xl space-y-4">
                    <span class="section-label">{{ __('site.sections.featured.eyebrow') }}</span>
                    <h2 class="text-3xl font-semibold tracking-tight text-slate-950 sm:text-4xl">
                        {{ __('site.sections.featured.title') }}
                    </h2>
                    <p class="text-lg leading-8 text-slate-600">
                        {{ __('site.sections.featured.description') }}
                    </p>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">
                    @foreach ($featuredVacancies as $vacancy)
                        <x-vacancy-card :vacancy="$vacancy" />
                    @endforeach
                </div>
            </section>

            <section id="process" class="grid gap-6 lg:grid-cols-[0.95fr_1.05fr]">
                <div class="panel-shell p-8 sm:p-10">
                    <span class="section-label">{{ __('site.sections.process.eyebrow') }}</span>
                    <h2 class="mt-6 text-3xl font-semibold tracking-tight text-slate-950 sm:text-4xl">
                        {{ __('site.sections.process.title') }}
                    </h2>
                    <p class="mt-4 text-lg leading-8 text-slate-600">
                        {{ __('site.sections.process.description') }}
                    </p>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    @foreach (trans('site.process_steps') as $step)
                        <article class="surface-card">
                            <p class="text-sm font-semibold uppercase tracking-[0.28em] text-slate-400">{{ $step['step'] }}</p>
                            <h3 class="mt-5 text-2xl font-semibold tracking-tight text-slate-950">{{ $step['title'] }}</h3>
                            <p class="mt-4 text-base leading-7 text-slate-600">{{ $step['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="grid gap-4 md:grid-cols-3">
                @foreach (trans('site.benefit_points') as $benefit)
                    <article class="surface-card">
                        <p class="section-label">{{ __('site.sections.benefits.eyebrow') }}</p>
                        <h3 class="mt-6 text-2xl font-semibold tracking-tight text-slate-950">{{ $benefit['title'] }}</h3>
                        <p class="mt-4 text-base leading-7 text-slate-600">{{ $benefit['description'] }}</p>
                    </article>
                @endforeach
            </section>

            <section id="openings" class="space-y-6">
                <div class="max-w-3xl space-y-4">
                    <span class="section-label">{{ __('site.sections.openings.eyebrow') }}</span>
                    <h2 class="text-3xl font-semibold tracking-tight text-slate-950 sm:text-4xl">
                        {{ __('site.sections.openings.title') }}
                    </h2>
                    <p class="text-lg leading-8 text-slate-600">
                        {{ __('site.sections.openings.description') }}
                    </p>
                </div>

                <div class="grid gap-6 lg:grid-cols-2">
                    @foreach ($vacancies as $vacancy)
                        <x-vacancy-card :vacancy="$vacancy" />
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</x-layouts.app>
