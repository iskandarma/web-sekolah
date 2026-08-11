<x-layouts.public :title="$news['title'].' — Berita Sekolah'" :description="$news['excerpt']">
    <x-layout.page-header :eyebrow="$news['category']" :title="$news['title']" :breadcrumb="[['label'=>'Berita','href'=>'/berita'],['label'=>$news['title']]]" />
    <article class="container-page py-12 md:py-16">
        <p class="inline-flex items-center gap-2 text-sm text-muted-foreground"><x-ui.icon name="calendar" size="size-4"/><time datetime="{{ $news['published_at'] }}">{{ \Carbon\Carbon::parse($news['published_at'])->translatedFormat('d F Y') }}</time></p>
        <img src="{{ asset($news['image']) }}" alt="{{ $news['image_alt'] }}" width="1024" height="700" class="mt-6 aspect-[16/9] w-full rounded-2xl object-cover shadow-lift">
        <div class="mx-auto mt-8 max-w-3xl space-y-5 text-base leading-relaxed md:text-lg">
            <p class="font-semibold text-brand-dark">{{ $news['excerpt'] }}</p>
            <p>Kegiatan ini merupakan bagian dari program pembinaan berkelanjutan yang dirancang untuk menumbuhkan rasa ingin tahu, ketekunan, dan kerja sama antar siswa. Pendampingan dilakukan oleh guru mata pelajaran bersama pembina ekstrakurikuler.</p>
            <p>Sekolah mengapresiasi dukungan orang tua serta seluruh warga sekolah, dan akan terus memperluas kesempatan bagi setiap siswa untuk mengembangkan minat dan bakatnya.</p>
        </div>
    </article>
</x-layouts.public>
