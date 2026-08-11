<x-layouts.public title="Berita Sekolah — SMA Cendekia Nusantara" description="Kumpulan berita kegiatan, prestasi, dan pengumuman resmi dari SMA Cendekia Nusantara.">
    <x-layout.page-header eyebrow="Berita" title="Kabar dan Pengumuman Sekolah" description="Kumpulan berita kegiatan, prestasi, dan pengumuman resmi dari SMA Cendekia Nusantara." :breadcrumb="[['label'=>'Berita']]" />
    <section aria-labelledby="semua-berita" class="container-page py-14 md:py-20">
        <h2 id="semua-berita" class="text-3xl md:text-4xl">Semua Berita</h2>
        <ul class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach(config('school.news') as $index=>$item)
                <li class="h-full"><div data-reveal style="--reveal-delay:{{ $index*90 }}ms" class="h-full"><x-news.card :news="$item"/></div></li>
            @endforeach
        </ul>
    </section>
    <x-home.cta-section />
</x-layouts.public>
