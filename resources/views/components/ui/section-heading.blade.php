<div class="max-w-2xl {{ ($align ?? 'center') === 'center' ? 'mx-auto text-center' : 'text-left' }} {{ $attributes->get('class', '') }}">
    @if(!empty($eyebrow))
        <span class="inline-flex items-center rounded-full bg-brand-soft px-3 py-1 text-xs font-bold tracking-[0.18em] uppercase text-brand-dark">
            {{ $eyebrow }}
        </span>
    @endif
    <{{ $as ?? 'h2' }} @if(!empty($id)) id="{{ $id }}" @endif class="mt-4 text-3xl md:text-4xl {{ ($tone ?? 'default') === 'onBrand' ? 'text-white' : '' }}">
        {{ $title }}
    </{{ $as ?? 'h2' }}>
    @if(!empty($description))
        <p class="mt-4 text-base md:text-lg {{ ($tone ?? 'default') === 'onBrand' ? 'text-white/85' : 'text-muted-foreground' }}">
            {{ $description }}
        </p>
    @endif
</div>
