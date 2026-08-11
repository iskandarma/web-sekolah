<x-layouts.public title="PPDB 2026/2027 — SMA Cendekia Nusantara" description="Alur, jadwal, dan persyaratan Penerimaan Peserta Didik Baru SMA Cendekia Nusantara tahun ajaran 2026/2027.">
    <x-layout.page-header eyebrow="PPDB 2026/2027" title="Penerimaan Peserta Didik Baru" description="Alur, jadwal, dan persyaratan Penerimaan Peserta Didik Baru SMA Cendekia Nusantara tahun ajaran 2026/2027." :breadcrumb="[['label'=>'PPDB']]" />
    @php($steps=[
        ['id'=>1,'title'=>'Pendaftaran Online','detail'=>'Isi formulir dan unggah dokumen dasar.'],
        ['id'=>2,'title'=>'Seleksi Akademik','detail'=>'Tes potensi akademik dan wawancara singkat.'],
        ['id'=>3,'title'=>'Pengumuman','detail'=>'Hasil seleksi diumumkan melalui website dan email.'],
        ['id'=>4,'title'=>'Daftar Ulang','detail'=>'Melengkapi dokumen dan administrasi sekolah.'],
    ])
    @php($requirements=['Fotokopi ijazah / surat keterangan lulus SMP/MTs','Fotokopi rapor semester 1–5','Fotokopi kartu keluarga dan akta kelahiran','Foto berwarna terbaru ukuran 3x4 (2 lembar)'])
    <section aria-labelledby="alur-ppdb" class="container-page py-14 md:py-20">
        <h2 id="alur-ppdb" class="text-3xl md:text-4xl">Alur Pendaftaran</h2>
        <ol class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($steps as $index=>$step)
                <li><div data-reveal style="--reveal-delay:{{ $index*90 }}ms"><article class="h-full rounded-2xl border border-border bg-card p-5 shadow-soft"><span class="grid size-10 place-items-center rounded-xl bg-gradient-brand text-sm font-extrabold text-white">{{ $step['id'] }}</span><h3 class="mt-4 text-base md:text-lg">{{ $step['title'] }}</h3><p class="mt-2 text-sm text-muted-foreground">{{ $step['detail'] }}</p></article></div></li>
            @endforeach
        </ol>
    </section>
    <section class="container-page grid gap-8 pb-16 md:pb-20 lg:grid-cols-[minmax(0,0.8fr)_minmax(0,1fr)]">
        <div data-reveal>
            <h2 class="text-2xl md:text-3xl">Persyaratan</h2>
            <ul class="mt-6 space-y-3">@foreach($requirements as $item)<li class="flex gap-3 text-sm md:text-base"><x-ui.icon name="check" size="size-5" class="mt-0.5 text-primary"/><span>{{ $item }}</span></li>@endforeach</ul>
        </div>
        <div data-reveal style="--reveal-delay:120ms">
            <form method="POST" action="#" class="rounded-2xl border border-border bg-card p-6 shadow-soft md:p-8" aria-labelledby="form-ppdb-title">
                @csrf
                <h2 id="form-ppdb-title" class="text-2xl md:text-3xl">Formulir Pendaftaran</h2>
                <div class="mt-6 grid gap-5 sm:grid-cols-2">
                    <div class="grid gap-2"><label for="ppdb-name" class="text-sm font-semibold">Nama Calon Siswa</label><input id="ppdb-name" name="name" autocomplete="name" required class="form-input"></div>
                    <div class="grid gap-2"><label for="ppdb-email" class="text-sm font-semibold">Email</label><input id="ppdb-email" name="email" type="email" autocomplete="email" required class="form-input"></div>
                    <div class="grid gap-2"><label for="ppdb-phone" class="text-sm font-semibold">Nomor Telepon</label><input id="ppdb-phone" name="phone" type="tel" autocomplete="tel" required class="form-input"></div>
                    <div class="grid gap-2"><label for="ppdb-school" class="text-sm font-semibold">Asal Sekolah</label><input id="ppdb-school" name="origin_school" required class="form-input"></div>
                    <div class="grid gap-2 sm:col-span-2"><label for="ppdb-message" class="text-sm font-semibold">Catatan Tambahan</label><textarea id="ppdb-message" name="message" rows="4" class="form-input"></textarea></div>
                </div>
                <button type="submit" class="mt-6 inline-flex items-center justify-center rounded-xl bg-gradient-brand px-6 py-3.5 text-base font-bold text-white shadow-brand">Kirim Pendaftaran</button>
            </form>
        </div>
    </section>
</x-layouts.public>
