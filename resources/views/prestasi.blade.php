<x-layouts.public title="Prestasi Siswa — SMA Cendekia Nusantara" description="Daftar prestasi akademik dan non-akademik siswa SMA Cendekia Nusantara di tingkat kota, provinsi, dan nasional.">
    <x-layout.page-header eyebrow="Prestasi" title="Capaian yang Kami Rayakan Bersama" description="Daftar prestasi akademik dan non-akademik siswa SMA Cendekia Nusantara di tingkat kota, provinsi, dan nasional." :breadcrumb="[['label'=>'Prestasi']]" />
    <section aria-labelledby="daftar-prestasi" class="container-page py-14 md:py-20">
        <h2 id="daftar-prestasi" class="text-3xl md:text-4xl">Daftar Prestasi Terbaru</h2>
        <ul class="mt-8 grid gap-4 md:grid-cols-2">
            @foreach(config('school.achievements') as $index=>$item)
                <li><div data-reveal style="--reveal-delay:{{ $index*70 }}ms"><article class="flex h-full gap-4 rounded-2xl border border-border bg-card p-5 shadow-soft"><span class="grid size-12 shrink-0 place-items-center rounded-xl bg-gradient-brand text-white"><x-ui.icon name="trophy" size="size-6"/></span><div class="min-w-0"><h3 class="text-base leading-snug md:text-lg">{{ $item['title'] }}</h3><p class="mt-1 text-sm text-muted-foreground">{{ $item['student'] }} • {{ $item['level'] }} • {{ $item['year'] }}</p></div></article></div></li>
            @endforeach
        </ul>
    </section>
    <x-home.cta-section />
</x-layouts.public>
