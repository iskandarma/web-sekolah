@php($name = $name ?? 'circle')
@php($size = $size ?? 'size-5')
<svg {{ $attributes->except('class')->merge(['class' => trim($size . ' shrink-0 ' . $attributes->get('class', ''))]) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
@if($name === 'graduation')
    <path d="M22 10 12 5 2 10l10 5 10-5Z"/><path d="M6 12v5c3 2 9 2 12 0v-5"/><path d="M22 10v6"/>
@elseif($name === 'arrow-right')
    <path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>
@elseif($name === 'sparkles')
    <path d="m12 3-1.5 5.5L5 10l5.5 1.5L12 17l1.5-5.5L19 10l-5.5-1.5L12 3Z"/><path d="m19 16-.7 2.3L16 19l2.3.7L19 22l.7-2.3L22 19l-2.3-.7L19 16Z"/>
@elseif($name === 'trending')
    <path d="m3 17 6-6 4 4 7-8"/><path d="M14 7h6v6"/>
@elseif($name === 'quote')
    <path d="M9 11H5a2 2 0 0 0-2 2v4h6v-6Zm12 0h-4a2 2 0 0 0-2 2v4h6v-6Z"/>
@elseif($name === 'calendar')
    <rect x="3" y="4" width="18" height="17" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
@elseif($name === 'clock')
    <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>
@elseif($name === 'map-pin')
    <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/>
@elseif($name === 'mail')
    <rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>
@elseif($name === 'phone')
    <path d="M6 3h3l2 5-2 2c1 3 2 4 5 5l2-2 5 2v3c0 1-1 2-2 2C10 20 4 14 3 5c0-1 1-2 3-2Z"/>
@elseif($name === 'menu')
    <path d="M4 6h16M4 12h16M4 18h16"/>
@elseif($name === 'close')
    <path d="m6 6 12 12M18 6 6 18"/>
@elseif($name === 'check')
    <circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/>
@elseif($name === 'trophy')
    <path d="M8 4h8v4a4 4 0 0 1-8 0V4Z"/><path d="M8 6H4v2a4 4 0 0 0 4 4M16 6h4v2a4 4 0 0 1-4 4M12 12v5M8 21h8M9 17h6"/>
@elseif($name === 'users')
    <circle cx="9" cy="8" r="3"/><path d="M3 20c0-4 2-6 6-6s6 2 6 6"/><path d="M16 5a3 3 0 0 1 0 6M18 14c2 .6 3 2.2 3 5"/>
@elseif($name === 'book')
    <path d="M4 5a2 2 0 0 1 2-2h12v17H6a2 2 0 0 1-2-2V5Z"/><path d="M8 7h6M8 11h6"/>
@elseif($name === 'flask')
    <path d="M9 3h6M10 3v6l-5 9a2 2 0 0 0 2 3h10a2 2 0 0 0 2-3l-5-9V3"/><path d="M8 15h8"/>
@elseif($name === 'cpu')
    <rect x="7" y="7" width="10" height="10" rx="1"/><path d="M9 1v4M15 1v4M9 19v4M15 19v4M19 9h4M19 14h4M1 9h4M1 14h4"/><rect x="10" y="10" width="4" height="4"/>
@elseif($name === 'globe')
    <circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/>
@elseif($name === 'target')
    <circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/>
@elseif($name === 'compass')
    <circle cx="12" cy="12" r="9"/><path d="m15 9-2 5-5 2 2-5 5-2Z"/>
@elseif($name === 'heart')
    <path d="M20 8c0 5-8 11-8 11S4 13 4 8a4 4 0 0 1 7-2 4 4 0 0 1 7 2Z"/>
@elseif($name === 'expand')
    <path d="M8 3H3v5M16 3h5v5M8 21H3v-5M21 16v5h-5"/>
@elseif($name === 'facebook')
    <path d="M14 8h3V4h-3c-3 0-5 2-5 5v3H6v4h3v4h4v-4h3l1-4h-4V9c0-.7.3-1 1-1Z"/>
@elseif($name === 'instagram')
    <rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".5"/>
@elseif($name === 'youtube')
    <path d="m10 15 5-3-5-3v6Z"/><path d="M21 12c0 5-1 6-3 6H6c-2 0-3-1-3-6s1-6 3-6h12c2 0 3 1 3 6Z"/>
@elseif($name === 'twitter')
    <path d="M4 4l6 7-6 9h3l4.5-6.5L17 20h3l-6.5-8L20 4h-3l-4 5.5L7 4H4Z"/>
@else
    <circle cx="12" cy="12" r="9"/>
@endif
</svg>
