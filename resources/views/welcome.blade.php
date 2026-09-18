<x-layout>
    <section class="page-shell py-14 md:py-20" aria-labelledby="hero-title">
        <div class="grid items-end gap-10 lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-8">
                <p class="mb-6 flex items-center gap-3 text-[11px] font-semibold tracking-[0.18em] uppercase"><span class="h-px w-8 bg-brand" aria-hidden="true"></span> Untuk pikiran yang ingin tahu</p>
                <h1 id="hero-title" class="max-w-3xl font-editorial text-display-mobile md:text-display">Setiap cerita membuka<br class="hidden sm:block"> sebuah <span class="italic text-brand">perspektif.</span></h1>
                <p class="mt-6 max-w-xl font-editorial text-xl leading-8 text-muted">Temukan gagasan baru, ikuti rasa ingin tahu, dan luangkan waktu untuk hal-hal yang layak dibaca.</p>
                <x-button :href="url('/').'#jelajahi'" class="mt-8">Jelajahi cerita <span aria-hidden="true">↓</span></x-button>
            </div>
            <aside class="border-l border-hairline pl-6 lg:col-span-4 lg:mb-2 lg:pl-8" aria-label="Filosofi Narativas">
                <span aria-hidden="true" class="font-editorial text-6xl leading-none text-brand">“</span>
                <p class="max-w-xs font-editorial text-2xl leading-8">Ada dunia yang lebih luas di balik setiap halaman.</p>
                <p class="mt-5 text-[11px] font-medium tracking-[0.15em] text-muted uppercase">Baca pelan. Temukan makna.</p>
            </aside>
        </div>
    </section>

    <div class="page-shell">
        <div class="grid border-t border-hairline lg:grid-cols-12 lg:gap-8">
            <section id="jelajahi" aria-labelledby="stories-title" class="py-8 lg:col-span-8 lg:pr-8">
                <div class="flex items-center justify-between gap-4 border-b border-hairline pb-5">
                    <h2 id="stories-title" class="font-editorial text-2xl font-medium">Ruang baca</h2>
                    <span class="text-xs text-muted">Cerita terbaru</span>
                </div>
                <div class="flex min-h-80 flex-col items-center justify-center py-14 text-center md:min-h-96">
                    <div class="mb-6 flex size-14 items-center justify-center rounded-full bg-subtle text-brand" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5.5C9 3.5 5 3.5 2 5v15c3-1.5 7-1.5 10 .5 3-2 7-2 10-.5V5c-3-1.5-7-1.5-10 .5Z"/><path d="M12 5.5v15M5 8h4M5 11h4M15 8h4M15 11h4"/></svg>
                    </div>
                    <h3 class="font-editorial text-3xl">Cerita pertama segera hadir.</h3>
                    <p class="mt-3 max-w-sm text-sm leading-6 text-muted">Ruang ini sedang bersiap menyambut tulisan pertama. Kembali lagi untuk menemukan bacaan baru.</p>
                </div>
                <div class="flex items-center gap-4 text-[11px] tracking-widest text-muted uppercase"><span class="h-px flex-1 bg-hairline"></span> Sebuah awal yang baik <span class="h-px flex-1 bg-hairline"></span></div>
            </section>
            <aside id="tentang" class="border-t border-hairline py-8 lg:col-span-4 lg:border-t-0 lg:border-l lg:pl-8" aria-labelledby="about-title">
                <p class="mb-5 text-[11px] font-semibold tracking-[0.15em] text-brand uppercase">Di balik Narativas</p>
                <h2 id="about-title" class="font-editorial text-3xl leading-9">Tempat singgah<br>untuk rasa ingin tahu.</h2>
                <p class="mt-4 text-sm leading-7 text-muted">Kami percaya cerita yang baik memberi ruang untuk berpikir. Narativas hadir sebagai tempat untuk membaca, merenung, dan melihat dunia dari sudut yang berbeda.</p>
                <div class="my-8 h-px bg-hairline"></div>
                <h3 class="mb-4 text-label font-semibold">Yang kami rayakan</h3>
                <ul class="flex flex-wrap gap-2" aria-label="Nilai Narativas">
                    <li class="topic-pill">Rasa ingin tahu</li>
                    <li class="topic-pill">Perspektif baru</li>
                    <li class="topic-pill">Cerita bermakna</li>
                </ul>
                <p class="mt-8 font-editorial text-lg italic leading-7 text-muted">Sedikit jeda dari riuhnya hari.<br>Satu cerita, satu waktu.</p>
            </aside>
        </div>
    </div>
</x-layout>
