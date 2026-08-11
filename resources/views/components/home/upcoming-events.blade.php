<section aria-labelledby="agenda-title" class="bg-brand-soft/60 py-14 md:py-20">
    <div class="container-page">
        <div data-reveal>
            <x-ui.section-heading id="agenda-title" eyebrow="Agenda" title="Kegiatan yang Akan Datang" description="Catat tanggalnya dan bergabung dalam kegiatan sekolah berikutnya." />
        </div>
        <ol class="relative mt-10 grid gap-4 md:gap-5 lg:grid-cols-2">
            @foreach(config('school.events') as $index => $event)
                <li><div data-reveal style="--reveal-delay:{{ $index * 90 }}ms"><x-events.card :event="$event"/></div></li>
            @endforeach
        </ol>
        <div class="mt-10 flex justify-center"><x-ui.button href="/agenda" variant="hero" size="lg">Lihat Semua Agenda <x-ui.icon name="arrow-right"/></x-ui.button></div>
    </div>
</section>
