@php($schoolName = $siteSetting?->school_name ?? config('school.name'))

<x-layouts.public title="Profil Sekolah — {{ $schoolName }}" description="Visi, misi, nilai, dan sejarah singkat SMA Cendekia Nusantara beserta sambutan kepala sekolah.">
    <x-layout.page-header eyebrow="Profil" title="Mengenal {{ $schoolName }}" description="{{ config('school.description') }}" :breadcrumb="[['label'=>'Profil']]" />
    <section aria-labelledby="pilar-title" class="container-page py-14 md:py-20">
        <h2 id="pilar-title" class="text-3xl md:text-4xl">Visi, Misi, dan Nilai</h2>
        @php($pillars=[
            ['icon'=>'target','title'=>'Visi','body'=>'Menjadi sekolah rujukan yang melahirkan lulusan berkarakter, berprestasi, dan siap menghadapi tantangan global.'],
            ['icon'=>'compass','title'=>'Misi','body'=>'Menyelenggarakan pembelajaran aktif berbasis proyek, memperkuat literasi digital, dan menumbuhkan budaya disiplin positif.'],
            ['icon'=>'heart','title'=>'Nilai','body'=>'Integritas, empati, rasa ingin tahu, dan kolaborasi menjadi dasar setiap keputusan dan kegiatan sekolah.'],
        ])
        <ul class="mt-8 grid gap-6 md:grid-cols-3">
            @foreach($pillars as $index=>$pillar)
                <li><div data-reveal style="--reveal-delay:{{ $index*100 }}ms"><article class="h-full rounded-2xl border border-border bg-card p-6 shadow-soft"><span class="grid size-12 place-items-center rounded-xl bg-brand-soft text-primary"><x-ui.icon name="{{ $pillar['icon'] }}" size="size-6"/></span><h3 class="mt-4 text-lg">{{ $pillar['title'] }}</h3><p class="mt-2 text-sm text-muted-foreground md:text-base">{{ $pillar['body'] }}</p></article></div></li>
            @endforeach
        </ul>
    </section>
    <x-home.principal-message />
    <x-home.statistics />
    <x-home.cta-section />
</x-layouts.public>
