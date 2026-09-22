@php($schoolName = $siteSetting?->school_name ?? config('school.name'))

<footer class="bg-navy text-white/80">
    <div class="container-page grid gap-10 py-14 md:grid-cols-2 lg:grid-cols-4 lg:py-16">
        <div>
            <div class="flex items-center gap-3">
                <span class="grid size-11 place-items-center rounded-xl bg-gradient-brand text-white">
                    <x-ui.icon name="graduation" size="size-6" />
                </span>
                <span class="text-base font-extrabold text-white">{{ $schoolName }}</span>
            </div>
            <h2 class="mt-6 text-sm font-bold tracking-widest text-white uppercase">Tentang Sekolah</h2>
            <p class="mt-3 text-sm leading-relaxed">{{ config('school.description') }}</p>
        </div>
        <nav aria-label="Navigasi footer">
            <h2 class="text-sm font-bold tracking-widest text-white uppercase">Navigasi</h2>
            <ul class="mt-4 grid grid-cols-2 gap-2 text-sm sm:grid-cols-1">
                @foreach(config('school.footer_navigation') as $item)
                    <li><a href="{{ $item['href'] }}" class="hover:text-brand-light">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <div>
            <h2 class="text-sm font-bold tracking-widest text-white uppercase">Kontak</h2>
            <ul class="mt-4 space-y-3 text-sm">
                <li class="flex gap-3"><x-ui.icon name="map-pin" size="size-4" class="mt-0.5 text-brand-light"/><span>{{ config('school.address') }}</span></li>
                <li class="flex gap-3"><x-ui.icon name="phone" size="size-4" class="mt-0.5 text-brand-light"/><a href="tel:{{ preg_replace('/[^\d+]/','',config('school.phone')) }}" class="hover:text-brand-light">{{ config('school.phone') }}</a></li>
                <li class="flex min-w-0 gap-3"><x-ui.icon name="mail" size="size-4" class="mt-0.5 text-brand-light"/><a href="mailto:{{ config('school.email') }}" class="break-all hover:text-brand-light">{{ config('school.email') }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-bold tracking-widest text-white uppercase">Media Sosial</h2>
            <ul class="mt-4 flex flex-wrap gap-3">
                @foreach(config('school.social_links') as $social)
                    <li><a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}" class="grid size-11 place-items-center rounded-xl bg-white/10 text-white hover:bg-primary"><x-ui.icon name="{{ $social['icon'] }}" size="size-5"/></a></li>
                @endforeach
            </ul>
            <p class="mt-5 text-sm">Jam layanan: Senin – Jumat, 07.00 – 15.00 WIB</p>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="container-page flex flex-col gap-2 py-5 text-xs sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} {{ $schoolName }}. Seluruh hak cipta dilindungi.</p>
            <p>Dikelola oleh Tim Humas Sekolah</p>
        </div>
    </div>
</footer>
