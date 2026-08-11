<x-layouts.public title="Program Akademik — SMA Cendekia Nusantara" description="Peminatan MIPA, IPS, Robotika & AI, serta bahasa dan budaya, lengkap dengan pendampingan belajar dan persiapan kuliah.">
    <x-layout.page-header eyebrow="Akademik" title="Program Belajar yang Relevan dan Menantang" description="Peminatan MIPA, IPS, Robotika & AI, serta bahasa dan budaya, lengkap dengan pendampingan belajar dan persiapan kuliah." :breadcrumb="[['label'=>'Akademik']]" />
    @php($majors=[
        ['icon'=>'flask','name'=>'MIPA','description'=>'Penguatan matematika, fisika, kimia, dan biologi dengan praktikum laboratorium rutin.'],
        ['icon'=>'globe','name'=>'IPS','description'=>'Ekonomi, sosiologi, geografi, dan sejarah dengan pendekatan studi kasus dan riset lapangan.'],
        ['icon'=>'cpu','name'=>'Robotika & AI','description'=>'Peminatan lintas minat: pemrograman, elektronika dasar, dan proyek kecerdasan artifisial.'],
        ['icon'=>'book','name'=>'Bahasa & Budaya','description'=>'Bahasa Inggris lanjutan, bahasa asing pilihan, jurnalistik, dan literasi budaya nusantara.'],
    ])
    <section aria-labelledby="peminatan-title" class="container-page py-14 md:py-20">
        <h2 id="peminatan-title" class="text-3xl md:text-4xl">Peminatan</h2>
        <ul class="mt-8 grid gap-6 sm:grid-cols-2">
            @foreach($majors as $index=>$major)
                <li><div data-reveal style="--reveal-delay:{{ $index*90 }}ms"><article class="h-full rounded-2xl border border-border bg-card p-6 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:shadow-lift"><span class="grid size-12 place-items-center rounded-xl bg-brand-soft text-primary"><x-ui.icon name="{{ $major['icon'] }}" size="size-6"/></span><h3 class="mt-4 text-lg">{{ $major['name'] }}</h3><p class="mt-2 text-sm text-muted-foreground md:text-base">{{ $major['description'] }}</p></article></div></li>
            @endforeach
        </ul>
    </section>
    <x-home.cta-section />
</x-layouts.public>
