<article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-border bg-card shadow-soft transition-all duration-300 hover:-translate-y-1 hover:shadow-lift">
    <a href="/berita/{{ $news['slug'] }}" class="block overflow-hidden">
        <img src="{{ asset($news['image']) }}" alt="{{ $news['image_alt'] }}" loading="lazy" width="1024" height="700" class="aspect-[16/10] w-full object-cover transition-transform duration-500 group-hover:scale-105">
    </a>
    <div class="flex min-w-0 flex-1 flex-col p-5 md:p-6">
        <div class="flex flex-wrap items-center gap-x-3 gap-y-2">
            <span class="rounded-full bg-brand-soft px-3 py-1 text-xs font-bold text-brand-dark">{{ $news['category'] }}</span>
            <span class="inline-flex items-center gap-1.5 text-xs text-muted-foreground"><x-ui.icon name="calendar" size="size-3.5"/><time datetime="{{ $news['published_at'] }}">{{ \Carbon\Carbon::parse($news['published_at'])->translatedFormat('d F Y') }}</time></span>
        </div>
        <h3 class="mt-3 text-lg leading-snug"><a href="/berita/{{ $news['slug'] }}" class="transition-colors hover:text-primary">{{ $news['title'] }}</a></h3>
        <p class="mt-2 line-clamp-3 text-sm text-muted-foreground md:text-base">{{ $news['excerpt'] }}</p>
        <a href="/berita/{{ $news['slug'] }}" class="mt-4 inline-flex items-center gap-1.5 self-start text-sm font-semibold text-primary hover:text-brand-dark">Baca Selengkapnya <x-ui.icon name="arrow-right" size="size-4"/></a>
    </div>
</article>
