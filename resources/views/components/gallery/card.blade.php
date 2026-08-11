<figure class="group relative overflow-hidden rounded-2xl shadow-soft {{ $class ?? '' }}">
    <img src="{{ asset($item['image']) }}" alt="{{ $item['image_alt'] }}" loading="lazy" width="1024" height="768" class="size-full object-cover transition-transform duration-700 group-hover:scale-110">
    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-navy/85 via-navy/25 to-transparent opacity-70 transition-opacity duration-300 group-hover:opacity-95"></div>
    <figcaption class="absolute inset-x-0 bottom-0 p-4 text-left md:p-5">
        <span class="inline-flex rounded-full bg-white/20 px-2.5 py-1 text-[0.7rem] font-bold tracking-wide text-white backdrop-blur-sm">{{ $item['category'] }}</span>
        <h3 class="mt-2 line-clamp-2 text-sm font-bold text-white md:text-base">{{ $item['title'] }}</h3>
        <time dateTime="{{ $item['date'] }}" class="text-xs text-white/75">{{ \Carbon\Carbon::parse($item['date'])->translatedFormat('d F Y') }}</time>
    </figcaption>
    <button type="button" data-gallery-open data-image="{{ asset($item['image']) }}" data-title="{{ $item['title'] }}" data-category="{{ $item['category'] }}" data-date="{{ \Carbon\Carbon::parse($item['date'])->translatedFormat('d F Y') }}" aria-label="Perbesar foto: {{ $item['title'] }}" class="absolute inset-0 flex cursor-pointer items-start justify-end p-4 focus-visible:outline-none">
        <span class="flex size-10 items-center justify-center rounded-full bg-white/90 text-brand-dark opacity-0 transition-opacity duration-300 group-hover:opacity-100"><x-ui.icon name="expand" size="size-4"/></span>
    </button>
</figure>
