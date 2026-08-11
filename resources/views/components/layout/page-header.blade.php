<section class="relative overflow-hidden bg-brand-soft/70">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
        <div data-parallax data-speed="0.18" class="absolute -top-16 right-0"><div class="size-64 rounded-full bg-brand-light/25 blur-3xl"></div></div>
    </div>
    <div class="container-page relative py-12 md:py-16">
        <div data-reveal>
            @if(!empty($breadcrumb))
                <nav aria-label="Breadcrumb">
                    <ol class="flex flex-wrap items-center gap-2 text-xs text-muted-foreground md:text-sm">
                        <li><a href="/" class="hover:text-primary">Beranda</a></li>
                        @foreach($breadcrumb as $crumb)
                            <li class="flex items-center gap-2">
                                <span aria-hidden="true">›</span>
                                @if(!empty($crumb['href'])) <a href="{{ $crumb['href'] }}" class="hover:text-primary">{{ $crumb['label'] }}</a>
                                @else <span class="font-semibold text-brand-dark">{{ $crumb['label'] }}</span> @endif
                            </li>
                        @endforeach
                    </ol>
                </nav>
            @endif
            @if(!empty($eyebrow))
                <span class="mt-4 inline-flex rounded-full bg-white px-3 py-1 text-xs font-bold tracking-[0.18em] text-brand-dark uppercase shadow-soft">{{ $eyebrow }}</span>
            @endif
            <h1 class="mt-4 max-w-3xl text-3xl md:text-4xl lg:text-5xl">{{ $title }}</h1>
            @if(!empty($description)) <p class="mt-4 max-w-2xl text-base text-muted-foreground md:text-lg">{{ $description }}</p> @endif
        </div>
    </div>
</section>
