<section aria-labelledby="galeri-title" class="relative overflow-hidden py-14 md:py-20">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10"><div data-parallax data-speed="0.2" class="absolute -right-20 top-10"><div class="size-72 rounded-full bg-brand-light/20 blur-3xl"></div></div></div>
    <div class="container-page">
        <div data-reveal><x-ui.section-heading id="galeri-title" eyebrow="Galeri" title="Potret Kehidupan Sekolah" description="Momen belajar, berkarya, dan berkegiatan bersama di lingkungan sekolah." /></div>
        <div class="mt-10 grid auto-rows-[190px] grid-cols-1 gap-4 sm:grid-cols-3 md:auto-rows-[220px]">
            @php($spans=['sm:col-span-2 sm:row-span-2','','','','sm:col-span-2',''])
            @foreach(config('school.gallery') as $index => $item)
                <div data-reveal style="--reveal-delay:{{ $index * 80 }}ms" class="min-w-0 {{ $spans[$index % count($spans)] }}"><x-gallery.card :item="$item" class="h-full"/></div>
            @endforeach
        </div>
        <div class="mt-10 flex justify-center"><x-ui.button href="/galeri" variant="brandOutline" size="lg">Lihat Galeri Lengkap <x-ui.icon name="arrow-right"/></x-ui.button></div>
    </div>
</section>

<div id="gallery-modal" hidden class="fixed inset-0 z-[100] grid place-items-center bg-navy/80 p-4" role="dialog" aria-modal="true" aria-labelledby="gallery-modal-title">
    <div class="relative max-h-[90vh] w-full max-w-4xl overflow-hidden rounded-2xl bg-card shadow-lift">
        <button type="button" data-gallery-close class="absolute right-3 top-3 z-10 grid size-10 place-items-center rounded-full bg-white/90 text-brand-dark" aria-label="Tutup"><x-ui.icon name="close"/></button>
        <img id="gallery-modal-image" src="" alt="" class="max-h-[70vh] w-full object-contain bg-navy">
        <div class="p-5"><h2 id="gallery-modal-title" class="text-lg font-bold"></h2><p id="gallery-modal-meta" class="mt-1 text-sm text-muted-foreground"></p></div>
    </div>
</div>
