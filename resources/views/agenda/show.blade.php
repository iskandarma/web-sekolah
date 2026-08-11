<x-layouts.public :title="$event['title'].' — Agenda Sekolah'" :description="$event['description']">
    <x-layout.page-header eyebrow="Agenda" :title="$event['title']" :breadcrumb="[['label'=>'Agenda','href'=>'/agenda'],['label'=>$event['title']]]" />
    @php($date=\Carbon\Carbon::parse($event['date']))
    <article class="container-page py-12 md:py-16">
        <dl class="grid gap-4 sm:grid-cols-3">
            <div class="rounded-2xl border border-border bg-card p-5 shadow-soft"><dt class="text-xs font-bold tracking-widest text-muted-foreground uppercase">Tanggal</dt><dd class="mt-2 font-semibold text-brand-dark"><time datetime="{{ $event['date'] }}">{{ $date->translatedFormat('d F Y') }}</time></dd></div>
            <div class="rounded-2xl border border-border bg-card p-5 shadow-soft"><dt class="text-xs font-bold tracking-widest text-muted-foreground uppercase">Waktu</dt><dd class="mt-2 inline-flex items-center gap-2 font-semibold text-brand-dark"><x-ui.icon name="clock" size="size-4" class="text-primary"/>{{ $event['time'] }}</dd></div>
            <div class="rounded-2xl border border-border bg-card p-5 shadow-soft"><dt class="text-xs font-bold tracking-widest text-muted-foreground uppercase">Lokasi</dt><dd class="mt-2 inline-flex items-center gap-2 font-semibold text-brand-dark"><x-ui.icon name="map-pin" size="size-4" class="text-primary"/>{{ $event['location'] }}</dd></div>
        </dl>
        <p class="mt-8 max-w-3xl text-base leading-relaxed md:text-lg">{{ $event['description'] }}</p>
    </article>
</x-layouts.public>
