@php
    $schoolName = $siteSetting?->school_name ?? config('school.name');
    $slogan = $siteSetting?->slogan ?: config('school.hero.headline');
@endphp

<section aria-labelledby="hero-title" class="relative overflow-hidden">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-[radial-gradient(120%_80%_at_80%_-10%,var(--brand-soft),transparent_60%)]"></div>
        <div data-parallax data-speed="-0.18" class="absolute -top-24 -left-24"><div class="size-72 rounded-full bg-brand-light/25 blur-3xl md:size-96"></div></div>
        <div data-parallax data-speed="0.22" class="absolute top-40 right-0"><div class="size-64 rounded-full bg-primary/15 blur-3xl md:size-80"></div></div>
    </div>
    <div class="container-page grid items-center gap-10 py-14 md:py-20 lg:grid-cols-2 lg:gap-14 lg:py-24">
        <div class="min-w-0">
            <div data-reveal>
                <span class="inline-flex items-center gap-2 rounded-full bg-card px-4 py-2 text-xs font-bold text-brand-dark shadow-soft md:text-sm">
                    <x-ui.icon name="sparkles" size="size-4" class="text-primary"/>
                    {{ $schoolName }} — Terakreditasi A
                </span>
            </div>
            <div data-reveal style="--reveal-delay:80ms">
                <h1 id="hero-title" class="mt-5 text-4xl leading-[1.1] md:text-5xl lg:text-6xl">
                    {{ $slogan }}
                </h1>
            </div>
            <div data-reveal style="--reveal-delay:160ms">
                <p class="mt-5 max-w-xl text-base leading-relaxed text-muted-foreground md:text-lg">{{ config('school.hero.description') }}</p>
            </div>
            <div data-reveal style="--reveal-delay:240ms">
                <div class="mt-8 flex flex-wrap gap-3">
                    <x-ui.button href="{{ config('school.hero.primary_cta.href') }}" variant="hero" size="xl">{{ config('school.hero.primary_cta.label') }} <x-ui.icon name="arrow-right"/></x-ui.button>
                    <x-ui.button href="{{ config('school.hero.secondary_cta.href') }}" variant="brandOutline" size="xl">{{ config('school.hero.secondary_cta.label') }}</x-ui.button>
                </div>
            </div>
        </div>
        <div data-reveal style="--reveal-delay:120ms" class="relative min-w-0">
            <div data-parallax data-speed="-0.1">
                <div class="relative">
                    <div aria-hidden="true" class="absolute -inset-3 -z-10 rounded-[2rem] bg-gradient-brand opacity-20 blur-2xl"></div>
                    <img src="{{ asset(config('school.hero.image')) }}" alt="{{ config('school.hero.image_alt') }}" width="1280" height="960" class="aspect-[4/3] w-full rounded-[1.75rem] object-cover shadow-lift">
                </div>
            </div>
            <div class="mt-4 flex justify-center lg:absolute lg:-bottom-8 lg:-left-6 lg:mt-0 lg:justify-start">
                <div class="flex max-w-xs items-center gap-3 rounded-2xl border border-border bg-card p-4 shadow-lift motion-float">
                    <span class="grid size-11 shrink-0 place-items-center rounded-xl bg-brand-soft text-primary"><x-ui.icon name="trending"/></span>
                    <div><p class="text-xl font-extrabold text-brand-dark">{{ config('school.hero.floating_stat.value') }}</p><p class="text-xs text-muted-foreground">{{ config('school.hero.floating_stat.label') }}</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
