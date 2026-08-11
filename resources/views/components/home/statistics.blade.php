<section aria-labelledby="statistik-title" class="bg-brand-soft/60 py-14 md:py-20">
    <div class="container-page">
        <div data-reveal>
            <x-ui.section-heading id="statistik-title" eyebrow="Sekolah dalam Angka" title="Perjalanan yang Terukur" description="Data ringkas tentang komunitas belajar kami hari ini." />
        </div>
        <ul class="mt-10 grid grid-cols-2 gap-4 md:gap-6 lg:grid-cols-4">
            @foreach(config('school.statistics') as $index => $stat)
                <li>
                    <div data-reveal style="--reveal-delay:{{ $index * 90 }}ms">
                        <div class="rounded-2xl border border-border bg-card p-5 text-center shadow-soft transition-all duration-300 hover:-translate-y-1 hover:shadow-lift md:p-6">
                            <span class="mx-auto flex size-12 items-center justify-center rounded-xl bg-brand-soft text-primary">
                                <x-ui.icon name="{{ $stat['icon'] }}" size="size-6"/>
                            </span>
                            <p class="mt-4 text-3xl font-extrabold text-brand-dark md:text-4xl">
                                <span data-counter="{{ $stat['value'] }}">{{ number_format($stat['value'],0,',','.') }}</span>{{ $stat['suffix'] }}
                            </p>
                            <p class="mt-1 text-sm font-medium text-muted-foreground md:text-base">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
