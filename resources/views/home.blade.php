@php($schoolName = $siteSetting?->school_name ?? config('school.name'))

<x-layouts.public title="{{ $schoolName }} — Sekolah Unggul & Berkarakter" description="Profil resmi {{ $schoolName }}: program akademik, prestasi siswa, berita, agenda kegiatan, galeri sekolah, dan informasi PPDB.">
    <x-home.hero-section />
    <x-home.principal-message />
    <x-home.statistics />
    <x-home.latest-news />
    <x-home.upcoming-events />
    <x-home.gallery />
    <x-home.cta-section />
</x-layouts.public>
