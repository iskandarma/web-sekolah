<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? config('school.description') }}">
    <title>{{ $title ?? config('school.name') }}</title>
    <meta property="og:title" content="{{ $title ?? config('school.name') }}">
    <meta property="og:description" content="{{ $description ?? config('school.description') }}">
    <meta property="og:type" content="website">
    @stack('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background text-foreground antialiased">
    <a href="#konten-utama" class="skip-link">Lewati ke konten utama</a>
    <x-layout.navbar />
    <main id="konten-utama" class="min-h-[60vh]">
        {{ $slot }}
    </main>
    <x-layout.footer />
    @stack('scripts')
</body>
</html>
