<section aria-labelledby="sambutan-title" class="relative overflow-hidden py-14 md:py-20">
    <div class="container-page grid items-center gap-10 lg:grid-cols-[minmax(0,0.85fr)_minmax(0,1fr)] lg:gap-14">
        <div data-reveal class="relative min-w-0">
            <div data-parallax data-speed="0.08">
                <div class="relative mx-auto max-w-sm lg:max-w-none">
                    <div aria-hidden="true" class="absolute -bottom-5 -left-5 -z-10 size-40 rounded-3xl bg-brand-soft"></div>
                    <img src="{{ asset(config('school.principal.photo')) }}" alt="{{ config('school.principal.photo_alt') }}" loading="lazy" width="900" height="1100" class="aspect-[4/5] w-full rounded-[1.5rem] object-cover shadow-lift">
                </div>
            </div>
        </div>
        <div class="min-w-0">
            <div data-reveal style="--reveal-delay:80ms">
                <span class="inline-flex items-center rounded-full bg-brand-soft px-3 py-1 text-xs font-bold tracking-[0.18em] text-brand-dark uppercase">Sambutan</span>
                <h2 id="sambutan-title" class="mt-4 text-3xl md:text-4xl">Pesan Kepala Sekolah</h2>
            </div>
            <div data-reveal style="--reveal-delay:160ms">
                <blockquote class="relative mt-6 rounded-2xl border border-border bg-card p-6 shadow-soft md:p-8">
                    <x-ui.icon name="quote" size="size-9" class="text-primary/25"/>
                    <p class="mt-3 text-base leading-relaxed text-foreground md:text-lg">{{ config('school.principal.message') }}</p>
                    <footer class="mt-6 border-t border-border pt-4">
                        <p class="text-base font-bold text-brand-dark">{{ config('school.principal.name') }}</p>
                        <p class="text-sm text-muted-foreground">{{ config('school.principal.position') }}</p>
                    </footer>
                </blockquote>
            </div>
            <div data-reveal style="--reveal-delay:240ms">
                <x-ui.button href="/profil" variant="brandOutline" size="lg" class="mt-6">Selengkapnya</x-ui.button>
            </div>
        </div>
    </div>
</section>
