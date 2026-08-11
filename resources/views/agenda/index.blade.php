<x-layouts.public title="Agenda Kegiatan — SMA Cendekia Nusantara" description="Jadwal kegiatan sekolah: open house, pentas seni, workshop, dan kompetisi internal.">
    <x-layout.page-header eyebrow="Agenda" title="Jadwal Kegiatan Sekolah" description="Jadwal kegiatan sekolah: open house, pentas seni, workshop, dan kompetisi internal." :breadcrumb="[['label'=>'Agenda']]" />
    <section aria-labelledby="semua-agenda" class="container-page py-14 md:py-20">
        <h2 id="semua-agenda" class="text-3xl md:text-4xl">Kegiatan Mendatang</h2>
        <ol class="mt-8 grid gap-4 lg:grid-cols-2">
            @foreach(config('school.events') as $index=>$event)
                <li><div data-reveal style="--reveal-delay:{{ $index*80 }}ms"><x-events.card :event="$event"/></div></li>
            @endforeach
        </ol>
    </section>
    <x-home.cta-section />
</x-layouts.public>
