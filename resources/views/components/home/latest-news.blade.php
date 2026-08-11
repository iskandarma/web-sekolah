<section aria-labelledby="berita-title" class="py-14 md:py-20">
    <div class="container-page">
        <div data-reveal class="grid gap-6 md:grid-cols-[minmax(0,1fr)_auto] md:items-end">
            <x-ui.section-heading id="berita-title" align="left" eyebrow="Berita" title="Kabar Terbaru dari Sekolah" description="Ikuti perkembangan kegiatan akademik, prestasi, dan program sekolah." class="max-w-2xl"/>
            <x-ui.button href="/berita" variant="brandOutline" size="lg" class="justify-self-start">Semua Berita <x-ui.icon name="arrow-right"/></x-ui.button>
        </div>
        <ul class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach(config('school.news') as $index => $item)
                <li class="h-full"><div data-reveal style="--reveal-delay:{{ $index * 100 }}ms" class="h-full"><x-news.card :news="$item"/></div></li>
            @endforeach
        </ul>
    </div>
</section>
