<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $metaTitle ?? __('site.meta.title') }}</title>
        <meta name="description" content="{{ $metaDescription ?? __('site.meta.description') }}">
        <meta name="theme-color" content="#07111d">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(167,216,245,0.38),_transparent_32%),_radial-gradient(circle_at_right,_rgba(255,129,89,0.18),_transparent_28%),_var(--color-cream)] text-slate-950 antialiased">
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute left-[8%] top-14 h-64 w-64 rounded-full bg-[color:rgba(167,216,245,0.45)] blur-3xl animate-[drift_16s_ease-in-out_infinite]"></div>
            <div class="absolute right-[5%] top-56 h-72 w-72 rounded-full bg-[color:rgba(255,129,89,0.18)] blur-3xl animate-[drift_18s_ease-in-out_infinite]"></div>
            <div class="absolute bottom-10 left-1/3 h-56 w-56 rounded-full bg-[color:rgba(17,35,58,0.08)] blur-3xl animate-[drift_20s_ease-in-out_infinite]"></div>
        </div>

        <div class="relative">
            {{ $slot }}
        </div>

        <footer class="px-4 pb-8 pt-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-6xl rounded-[2rem] border border-white/70 bg-white/60 px-6 py-5 shadow-[0_18px_50px_rgba(15,23,42,0.08)] backdrop-blur">
                <div class="flex flex-col gap-3 text-sm text-slate-600 md:flex-row md:items-center md:justify-between">
                    <p>{{ __('site.footer.tagline') }}</p>
                    <p>{{ __('site.footer.rights', ['year' => now()->year]) }}</p>
                </div>
            </div>
        </footer>
    </body>
</html>
