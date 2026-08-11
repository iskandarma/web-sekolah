@php($date = \Carbon\Carbon::parse($event['date']))
<article class="group relative rounded-2xl border border-border bg-card p-5 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:border-primary/40 hover:shadow-lift md:p-6">
    <div class="grid grid-cols-[auto_minmax(0,1fr)] items-start gap-4 md:gap-6">
        <time datetime="{{ $event['date'] }}" class="flex size-16 shrink-0 flex-col items-center justify-center rounded-xl bg-gradient-brand text-white md:size-[4.5rem]">
            <span class="text-xl leading-none font-extrabold md:text-2xl">{{ $date->format('d') }}</span>
            <span class="text-[0.65rem] font-semibold tracking-widest uppercase">{{ $date->translatedFormat('M') }}</span>
        </time>
        <div class="min-w-0">
            <h3 class="text-base leading-snug md:text-lg"><a href="/agenda/{{ $event['id'] }}" class="transition-colors hover:text-primary">{{ $event['title'] }}</a></h3>
            <p class="mt-2 text-sm text-muted-foreground">{{ $event['description'] }}</p>
            <dl class="mt-3 flex flex-wrap gap-x-4 gap-y-2 text-xs font-medium text-brand-dark md:text-sm">
                <div class="inline-flex items-center gap-1.5"><x-ui.icon name="clock" size="size-4" class="text-primary"/><dd>{{ $event['time'] }}</dd></div>
                <div class="inline-flex min-w-0 items-center gap-1.5"><x-ui.icon name="map-pin" size="size-4" class="text-primary"/><dd class="truncate">{{ $event['location'] }}</dd></div>
                <dd class="text-muted-foreground">{{ $date->format('Y') }}</dd>
            </dl>
        </div>
    </div>
</article>
