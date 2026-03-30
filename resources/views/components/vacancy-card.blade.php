@props(['vacancy'])

@php
    $teamPalette = [
        'design' => 'bg-rose-100 text-rose-700',
        'engineering' => 'bg-sky-100 text-sky-700',
        'product' => 'bg-amber-100 text-amber-700',
        'growth' => 'bg-emerald-100 text-emerald-700',
    ];
@endphp

<article class="surface-card group flex h-full flex-col justify-between gap-8 transition duration-300 hover:-translate-y-1 hover:shadow-[0_24px_50px_rgba(15,23,42,0.12)]">
    <div class="space-y-5">
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="meta-label">{{ $vacancy->company_name }}</p>
                <h3 class="mt-3 text-2xl font-semibold tracking-tight text-slate-950">
                    {{ $vacancy->translate('title') }}
                </h3>
            </div>

            @if ($vacancy->is_featured)
                <span class="rounded-full bg-slate-950 px-3 py-1 text-xs font-semibold uppercase tracking-[0.22em] text-white">
                    {{ __('site.cards.featured_badge') }}
                </span>
            @endif
        </div>

        <p class="text-base leading-7 text-slate-600">
            {{ $vacancy->translate('excerpt') }}
        </p>

        <div class="flex flex-wrap gap-2">
            <span @class([
                'inline-flex rounded-full px-3 py-1 text-xs font-semibold',
                $teamPalette[$vacancy->team] ?? 'bg-slate-100 text-slate-700',
            ])>
                {{ __('site.teams.'.$vacancy->team) }}
            </span>
            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                {{ __('site.work_models.'.$vacancy->work_model) }}
            </span>
            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                {{ __('site.employment_types.'.$vacancy->employment_type) }}
            </span>
        </div>

        <dl class="grid gap-4 sm:grid-cols-2">
            <div>
                <dt class="meta-label">{{ __('site.cards.location') }}</dt>
                <dd class="meta-value">{{ $vacancy->translate('location') }}</dd>
            </div>
            <div>
                <dt class="meta-label">{{ __('site.cards.salary') }}</dt>
                <dd class="meta-value">{{ $vacancy->salaryLabel() }}</dd>
            </div>
            <div>
                <dt class="meta-label">{{ __('site.cards.experience') }}</dt>
                <dd class="meta-value">{{ __('site.experience_levels.'.$vacancy->experience_level) }}</dd>
            </div>
            <div>
                <dt class="meta-label">{{ __('site.cards.team') }}</dt>
                <dd class="meta-value">{{ __('site.teams.'.$vacancy->team) }}</dd>
            </div>
        </dl>
    </div>

    <div class="flex items-center justify-between gap-4 border-t border-slate-200/70 pt-5">
        <p class="text-sm text-slate-500">
            {{ __('site.cards.posted_on', ['date' => $vacancy->posted_at?->isoFormat('ll')]) }}
        </p>

        <a href="{{ route('vacancies.show', ['vacancy' => $vacancy]) }}" class="button-secondary">
            {{ __('site.cards.view_role') }}
        </a>
    </div>
</article>
