<form method="POST" action="{{ $action ?? '#' }}" class="rounded-2xl border border-border bg-card p-6 shadow-soft md:p-8" aria-labelledby="form-kontak-title">
    @csrf
    <h2 id="form-kontak-title" class="text-2xl md:text-3xl">Kirim Pesan</h2>
    <p class="mt-2 text-sm text-muted-foreground">Tim kami akan membalas pesan Anda pada hari kerja.</p>
    <div class="mt-6 grid gap-5 sm:grid-cols-2">
        <div class="grid gap-2"><label for="contact-name" class="text-sm font-semibold">Nama Lengkap</label><input id="contact-name" name="name" autocomplete="name" placeholder="Nama Anda" required class="form-input"></div>
        <div class="grid gap-2"><label for="contact-email" class="text-sm font-semibold">Email</label><input id="contact-email" name="email" type="email" autocomplete="email" placeholder="nama@email.com" required class="form-input"></div>
        <div class="grid gap-2 sm:col-span-2"><label for="contact-phone" class="text-sm font-semibold">Nomor Telepon</label><input id="contact-phone" name="phone" type="tel" autocomplete="tel" placeholder="08xx xxxx xxxx" class="form-input"></div>
        <div class="grid gap-2 sm:col-span-2"><label for="contact-message" class="text-sm font-semibold">Pesan</label><textarea id="contact-message" name="message" rows="5" placeholder="Tuliskan pertanyaan atau pesan Anda" required class="form-input"></textarea></div>
    </div>
    <button type="submit" class="mt-6 inline-flex items-center justify-center rounded-xl bg-gradient-brand px-6 py-3.5 text-base font-bold text-white shadow-brand">Kirim Pesan</button>
</form>
