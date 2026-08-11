<x-layouts.public title="Kontak Sekolah — SMA Cendekia Nusantara" description="Alamat, telepon, email, dan jam layanan SMA Cendekia Nusantara beserta formulir pesan online.">
    <x-layout.page-header eyebrow="Kontak" title="Hubungi Kami" description="Alamat, telepon, email, dan jam layanan SMA Cendekia Nusantara beserta formulir pesan online." :breadcrumb="[['label'=>'Kontak']]" />
    <section class="container-page grid gap-8 py-14 md:py-20 lg:grid-cols-[minmax(0,0.8fr)_minmax(0,1fr)]">
        <div data-reveal>
            <h2 class="text-2xl md:text-3xl">Informasi Sekolah</h2>
            @php($details=[
                ['icon'=>'map-pin','label'=>'Alamat','value'=>config('school.address')],
                ['icon'=>'phone','label'=>'Telepon','value'=>config('school.phone')],
                ['icon'=>'mail','label'=>'Email','value'=>config('school.email')],
                ['icon'=>'clock','label'=>'Jam Layanan','value'=>'Senin – Jumat, 07.00 – 15.00 WIB'],
            ])
            <ul class="mt-6 space-y-4">
                @foreach($details as $detail)
                    <li class="flex gap-4 rounded-2xl border border-border bg-card p-5 shadow-soft"><span class="grid size-11 shrink-0 place-items-center rounded-xl bg-brand-soft text-primary"><x-ui.icon name="{{ $detail['icon'] }}"/></span><div><p class="text-xs font-bold tracking-widest text-muted-foreground uppercase">{{ $detail['label'] }}</p><p class="mt-1 font-semibold break-words text-brand-dark">{{ $detail['value'] }}</p></div></li>
                @endforeach
            </ul>
        </div>
        <div data-reveal style="--reveal-delay:120ms"><x-forms.contact-form /></div>
    </section>
</x-layouts.public>
