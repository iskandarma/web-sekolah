@php($schoolName = $siteSetting?->school_name ?? config('school.name'))

<header id="site-header" class="sticky top-0 z-50 w-full bg-transparent transition-all duration-300">
    <div class="container-page grid grid-cols-[minmax(0,1fr)_auto] items-center gap-4 py-3 lg:py-4">
        <a href="/" class="flex min-w-0 items-center gap-3">
            <span class="grid size-11 shrink-0 place-items-center rounded-xl bg-gradient-brand text-white shadow-brand">
                <x-ui.icon name="graduation" size="size-6" />
            </span>
            <span class="min-w-0">
                <span class="block truncate text-sm font-extrabold text-brand-dark sm:text-base">{{ $schoolName }}</span>
                <span class="block truncate text-[0.7rem] text-muted-foreground sm:text-xs">Unggul • Berkarakter • Inovatif</span>
            </span>
        </a>

        <nav aria-label="Navigasi utama" class="hidden items-center gap-1 lg:flex">
            @foreach(config('school.navigation') as $item)
                <a href="{{ $item['href'] }}" aria-current="{{ request()->is(ltrim($item['href'],'/')) || ($item['href']==='/' && request()->is('/')) ? 'page' : 'false' }}"
                   class="rounded-full px-3.5 py-2 text-sm font-semibold transition-colors {{ request()->is(ltrim($item['href'],'/')) || ($item['href']==='/' && request()->path()==='/') ? 'bg-brand-soft text-brand-dark' : 'text-foreground hover:bg-brand-soft hover:text-brand-dark' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
            <x-ui.button href="/ppdb" variant="hero" size="lg" class="ml-2">PPDB</x-ui.button>
        </nav>

        <button type="button" id="mobile-menu-toggle" class="lg:hidden inline-flex size-10 items-center justify-center rounded-xl border border-primary/30 bg-white text-brand-dark"
                aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="mobile-nav">
            <x-ui.icon name="menu" />
        </button>
    </div>

    <div id="mobile-nav" hidden class="border-t border-border bg-background/95 backdrop-blur-xl lg:hidden">
        <nav aria-label="Navigasi mobile" class="container-page flex flex-col gap-1 py-4">
            @foreach(config('school.navigation') as $item)
                <a href="{{ $item['href'] }}" class="rounded-xl px-4 py-3 text-sm font-semibold text-foreground hover:bg-brand-soft">{{ $item['label'] }}</a>
            @endforeach
            <x-ui.button href="/ppdb" variant="hero" size="lg" class="mt-2">PPDB</x-ui.button>
        </nav>
    </div>
</header>
