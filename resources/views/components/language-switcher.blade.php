@props(['vacancy' => null])

@php
    $currentLocale = request()->route('locale');
    $locales = config('locales.available');
@endphp

<nav aria-label="{{ __('site.nav.languages') }}" class="inline-flex flex-wrap items-center gap-2 rounded-full border border-slate-300/80 bg-white/85 p-1 shadow-[0_12px_32px_rgba(15,23,42,0.08)] backdrop-blur">
    @foreach ($locales as $routeLocale => $locale)
        @php
            $href = $vacancy && request()->routeIs('vacancies.show')
                ? route('vacancies.show', ['locale' => $routeLocale, 'vacancy' => $vacancy])
                : route('home', ['locale' => $routeLocale]);
        @endphp

        <a
            href="{{ $href }}"
            @class([
                'inline-flex items-center gap-2 rounded-full px-3 py-2 text-sm font-semibold transition',
                'bg-[var(--color-ink)] text-white shadow-[0_10px_20px_rgba(7,17,29,0.2)]' => $currentLocale === $routeLocale,
                'text-slate-600 hover:bg-slate-100 hover:text-slate-900' => $currentLocale !== $routeLocale,
            ])
        >
            <span class="text-xs tracking-[0.24em]">{{ $locale['short'] }}</span>
            <span class="hidden sm:inline">{{ $locale['native'] }}</span>
        </a>
    @endforeach
</nav>
