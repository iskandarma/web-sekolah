@php
$variant = $variant ?? 'hero';
$size = $size ?? 'md';
$classes = [
'hero'=>'bg-gradient-brand text-white shadow-brand hover:-translate-y-0.5 hover:shadow-lift',
'outline'=>'border border-border bg-card text-brand-dark hover:bg-brand-soft',
'brandOutline'=>'border border-primary/30 bg-card text-brand-dark hover:bg-brand-soft',
'onBrand'=>'bg-white text-brand-dark hover:bg-blue-50',
'onBrandOutline'=>'border border-white/40 text-white hover:bg-white/10',
];
$sizes = ['md'=>'px-4 py-2.5 text-sm','lg'=>'px-5 py-3 text-sm','xl'=>'px-6 py-3.5 text-base','icon'=>'size-10 p-2'];
@endphp
<a {{ $attributes->merge(['class'=>"inline-flex items-center justify-center gap-2 rounded-xl font-bold transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary " . ($classes[$variant] ?? $classes['hero']) . " " . ($sizes[$size] ?? $sizes['md'])]) }}>
    {{ $slot }}
</a>
