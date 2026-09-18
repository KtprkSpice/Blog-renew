@extends('layouts.app')

@section('content')
    <main class="w-full bg-background mt-10">
        <div class="flex flex-col w-full">
            <!-- Reading Progress Bar (Fixed Top Accent) -->
            <div class="fixed top-28 left-0 h-[3px] bg-primary z-40 transition-all duration-150 w-0" id="narrativa-progress">
            </div>
            <!-- Audio Mini-Player Dock (Toggleable) -->
            <div class="hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-40 w-[92%] max-w-xl bg-inverse-surface text-inverse-on-surface px- space-md py-3 rounded-full shadow-2xl backdrop-blur-md flex items-center justify-between gap-4"
                id="audio-dock">
                <div class="flex items-center gap-3 min-w-0">
                    <button
                        class="w-9 h-9 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center shrink-0 hover:scale-105 transition-transform"
                        id="dock-play-btn">
                        <span class="material-symbols-outlined text-lg">pause</span>
                    </button>
                    <div class="min-w-0">
                        <p class="font-label-md text-label-md truncate text-inverse-on-surface">Narasi Suara: Membangun
                            Kebiasaan 500 Kata</p>
                        <p class="font-label-sm text-label-sm text-surface-variant/70">Dibacakan oleh Narator AI
                            Narrativa • 02:45 / 07:12</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <button class="p-1 text-surface-variant hover:text-surface-container-lowest" onclick="toggleAudio()">
                        <span class="material-symbols-outlined text-sm">close</span>
                    </button>
                </div>
            </div>
            <!-- Main Editorial Reading Canvas -->
            <article class="w-full max-w-3xl mx-auto px-gutter-mobile md:px-gutter pt-8 pb-16 flex flex-col">
                <!-- Topic Badges & Reading Meta -->
                <div class="flex flex-wrap items-center gap-2 mb-6">
                    <a class="inline-flex items-center px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-high transition-colors"
                        href="#">
                        Desain &amp; Kebiasaan
                    </a>
                    <a class="inline-flex items-center px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-container-high transition-colors"
                        href="#">
                        Produktivitas
                    </a>
                    <span class="inline-flex items-center gap-1 text-secondary font-label-sm text-label-sm ml-auto">
                        <span class="material-symbols-outlined text-sm text-primary">verified</span>
                        Pilihan Redaksi
                    </span>
                </div>
                <!-- Article Header Typography -->
                <h1
                    class="font-headline-lg text-display-lg-mobile md:text-headline-lg text-on-surface tracking-tight leading-[1.15] mb-4">
                    Membangun Kebiasaan Menulis 500 Kata Sehari: Seni Berdamai dengan Draf Pertama
                </h1>
                <p class="font-body-lg text-body-lg text-secondary mb-8 leading-relaxed font-headline-md italic">
                    Bagaimana menyingkirkan hambatan mental perfectionism awal, menemukan ritme reflektif, dan merawat
                    ide tanpa distraksi algoritma.
                </p>
                <!-- Author Profile Strip -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 py-4 mb-6">
                    <div class="flex items-center gap-3.5">
                        <img alt="Clarissa Hartono"
                            class="w-12 h-12 rounded-full object-cover shadow-sm ring-1 ring-surface-container-high"
                            src="https://lh3.googleusercontent.com/aida/AEtjO1XwZViU1KKl2l3KWMbzb1vLA6UCmCh-GwcaUiNKRSexlSno0wsVXJWqA5ru7JywyMxSg4TpXV2oBGnbekvGff2_MhEfemW_4azUm-vgcV-vi4IOiQlo_2Ebf8pl8MXmXE1iboI_rqB_T9R8wM10-BGRqQaqTN7np0cfFFdBp9KZ8nG37Oj-cQVxIre0Tvr46eTRJorsdnvfjDQqAkccfJT9wuYpoAYbl5ga2lINW7CserCl0GPb2K8Zon4">
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-label-lg text-label-lg text-on-surface">Clarissa Hartono</span>
                                <button
                                    class="px-3 py-0.5 rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high font-label-sm text-label-sm transition-colors"
                                    id="follow-btn-top" onclick="toggleFollow(this)">
                                    + Ikuti
                                </button>
                            </div>
                            <p class="font-body-sm text-label-md text-secondary">Esais Budaya &amp; Direktur Kreatif di
                                Jakarta</p>
                            <div class="flex items-center gap-2 text-secondary font-label-sm text-label-sm mt-0.5">
                                <span class="">28 Februari 2025</span>
                                <span class="">•</span>
                                <span class="">6 mnt baca</span>
                                <span class="">•</span>
                                <button class="inline-flex items-center gap-1 text-primary hover:underline"
                                    onclick="toggleAudio()">
                                    <span class="material-symbols-outlined text-sm">volume_up</span>
                                    <span class="">Dengarkan (7 mnt)</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Right Side Font Resizer Micro-utility -->
                    <div
                        class="flex items-center gap-1 self-start sm:self-center bg-surface-container-low px-2 py-1 rounded-full">
                        <button
                            class="w-7 h-7 flex items-center justify-center rounded-full text-secondary hover:text-on-surface hover:bg-surface-container transition-colors"
                            onclick="adjustFontSize(-1)" title="Perkecil Teks">
                            <span class="material-symbols-outlined text-sm">text_decrease</span>
                        </button>
                        <span class="text-xs font-label-sm text-secondary px-1 select-none">Teks</span>
                        <button
                            class="w-7 h-7 flex items-center justify-center rounded-full text-secondary hover:text-on-surface hover:bg-surface-container transition-colors"
                            onclick="adjustFontSize(1)" title="Perbesar Teks">
                            <span class="material-symbols-outlined text-sm">text_increase</span>
                        </button>
                    </div>
                </div>
                <!-- Engagement Bar (Top) -->
                <div
                    class="w-full py-3 bg-surface-container-lowest rounded-full px-5 flex items-center justify-between shadow-sm mb-10">
                    <div class="flex items-center gap-5">
                        <button
                            class="clap-btn group flex items-center gap-2 text-secondary hover:text-primary transition-colors"
                            onclick="handleClap()">
                            <span
                                class="material-symbols-outlined text-xl clap-icon group-hover:scale-110 transition-transform">sign_language</span>
                            <span class="font-label-md text-label-md text-on-surface clap-count">2.4k</span>
                        </button>
                        <a class="flex items-center gap-2 text-secondary hover:text-on-surface transition-colors"
                            href="#komentar">
                            <span class="material-symbols-outlined text-xl">mode_comment</span>
                            <span class="font-label-md text-label-md">48</span>
                        </a>
                    </div>
                    <div class="flex items-center gap-2 text-secondary">
                        <button class="p-2 hover:text-primary transition-colors rounded-full hover:bg-surface-container"
                            onclick="toggleBookmark(this)" title="Simpan ke Daftar Bacaan">
                            <span class="material-symbols-outlined text-xl bookmark-icon">bookmark_border</span>
                        </button>
                        <button class="p-2 hover:text-on-surface transition-colors rounded-full hover:bg-surface-container"
                            onclick="copyArticleLink(this)" title="Salin Tautan">
                            <span class="material-symbols-outlined text-xl share-icon">share</span>
                        </button>
                        <button class="p-2 hover:text-on-surface transition-colors rounded-full hover:bg-surface-container"
                            title="Opsi Lanjutan">
                            <span class="material-symbols-outlined text-xl">more_horiz</span>
                        </button>
                    </div>
                </div>
                <!-- Hero Cover Photograph -->
                <figure class="w-full mb-12 -mx-gutter-mobile md:mx-0">
                    <div class="w-full overflow-hidden rounded-none md:rounded-2xl shadow-sm bg-surface-container">
                        <img class="w-full h-auto max-h-[500px] object-cover hover:scale-[1.01] transition-transform duration-700"
                            data-alt="Editorial desk bathed in morning sunlight, minimalist mechanical keyboard, open handwritten notebook with black gel pen, ceramic coffee mug with soft rising steam, small potted plant on natural oak tabletop with window background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPwfsiBso_lfYFNIV5eVZGdEkQUXrKZVVZcSze0MbrC0F-oPyvo8RvUNHjrgdZfvYThUSXYC2EMO8rfWKfzxKv33XvX2Ix3zundtPgPgGDtljffHiTQoFmWxGR3ifMJbfpErvITdVsxHskL-Q7Gs3pli-e-S0hJhgnQVedBVsBnVxmCOWlmLO2RQBbH1iFwwQEPHfxOiUR1DJtymE0y5f2DGdeHHXAQfGZZEhKdrETdEk6xR8WsM46">
                    </div>
                    <figcaption
                        class="mt-3 px-gutter-mobile md:px-2 text-center md:text-left font-body-sm text-label-sm text-secondary italic">
                        Meja kerja pagi hari di sudut studio: ruang hening tempat gagasan pertama dituangkan tanpa
                        penghakiman. Foto: Koleksi Redaksi Narrativa.
                    </figcaption>
                </figure>
                <!-- Rich Editorial Essay Body -->
                <div class="w-full text-on-surface font-body-md text-body-md space-y-7 leading-[1.85]" id="story-content">
                    <!-- Drop Cap Paragraph -->
                    <p
                        class="first-letter:text-6xl first-letter:font-headline-lg first-letter:font-normal first-letter:float-left first-letter:mr-3 first-letter:text-primary first-letter:leading-none">
                        Setiap pagi, jutaan orang bangun dengan sebuah dorongan mendalam untuk mencatat apa yang
                        berkecamuk di dalam kepalanya. Entah itu kilasan percakapan di kedai kopi, renungan tentang
                        perubahan karier, atau kebingungan melihat derasnya gelombang kecerdasan buatan. Namun, ketika
                        layar putih laptop atau lembaran buku catatan terbuka, sebuah tembok tebal tak kasat mata
                        seketika menjulang tinggi: ketakutan bahwa apa yang hendak kita tuliskan akan terdengar dangkal,
                        berantakan, atau bahkan menggelikan.
                    </p>
                    <p class="">
                        Kita telah dididik oleh budaya konsumsi digital serba instan untuk hanya menyaksikan produk
                        akhir yang sudah terpoles sempurna. Kita mengagumi esai tajam di publikasi ternama atau utas
                        reflektif yang viral, tanpa pernah menyadari ada tumpukan paragraf buruk, salah ketik, dan
                        keraguan diri yang menyertai kelahirannya. Hambatan ini sering kali bukan soal kehabisan
                        kata-kata, melainkan keengganan kita untuk tampak rentan di hadapan diri sendiri.
                    </p>
                    <!-- Section H2 1 -->
                    <div class="pt-6">
                        <h2 class="font-headline-md text-headline-md text-on-surface mb-4 tracking-tight">
                            1. Mengapa Kata Pertama Selalu Terasa Paling Berat
                        </h2>
                        <p class="">
                            Hambatan halaman kosong (<em>blank page syndrome</em>) sejatinya adalah konflik antara dua
                            fungsi kognitif yang bekerja bersamaan di saat yang keliru: dorongan generatif (daya cipta)
                            dan dorongan evaluatif (sensor internal). Ketika Anda menuntut draf pertama langsung
                            memiliki musikalitas bahasa yang memesona, otak Anda mengalami kelumpuhan analitis.
                        </p>
                        <p class="mt-4">
                            Standar 500 kata bukanlah angka magis yang jatuh dari langit. Ia dipilih karena berada pada
                            titik ekuilibrium yang presisi: cukup singkat untuk diselesaikan dalam rentang 20 hingga 30
                            menit sebelum rutinitas kerja harian dimulai, namun cukup panjang untuk menampung satu alur
                            argumen atau sebuah fragmen cerita yang utuh.
                        </p>
                    </div>
                    <!-- Pull Quote Block -->
                    <div
                        class="my-10 pl-6 border-l-[3px] border-primary py-2 bg-gradient-to-r from-surface-container-low/60 to-transparent rounded-r-xl">
                        <blockquote class="font-headline-md text-headline-md italic text-on-surface leading-snug">
                            “Tuliskan draf pertamamu dengan hati yang bebas dan pintu tertutup; suntinglah draf keduamu
                            dengan akal yang tajam dan jendela terbuka.”
                        </blockquote>
                        <p class="font-label-md text-label-md text-secondary mt-3 not-italic">
                            — Catatan Redaksi Narrativa, Serial Ritme Kreatif
                        </p>
                    </div>
                    <!-- Section H2 2 -->
                    <div class="pt-4">
                        <h2 class="font-headline-md text-headline-md text-on-surface mb-4 tracking-tight">
                            2. Memisahkan Topi Penulis dan Topi Penyunting
                        </h2>
                        <p class="">
                            Kesalahan paling lazim dari penulis pemula adalah menekan tombol <kbd
                                class="px-2 py-0.5 bg-surface-container rounded font-mono text-xs">Backspace</kbd>
                            secara impulsif setiap kali tiga baris kalimat terbentuk. Menulis dan menyunting adalah dua
                            aktivitas otak yang membutuhkan frekuensi gelombang berbeda. Menulis adalah tindakan
                            eksploratif, sedangkan menyunting adalah tindakan pembedahan kritis.
                        </p>
                        <p class="mt-4">
                            Untuk melatih kebiasaan 500 kata, saya menerapkan aturan “Kamera Satu Arah”. Selama proses
                            penulisan draf pagi, kursor tidak diizinkan melompat mundur untuk memperbaiki tata bahasa
                            atau sinonim kata. Biarkan kalimat itu terasa janggal. Yang terpenting adalah mengalirkan
                            uap ide keluar dari kepala sebelum ia mengembun dan menghilang.
                        </p>
                    </div>
                    <!-- Editorial Visual Callout Box -->
                    <div class="my-8 p-6 bg-surface-container-low rounded-2xl flex flex-col md:flex-row gap-5 items-start">
                        <div
                            class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-xl">lightbulb</span>
                        </div>
                        <div class="flex-1 space-y-2">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Protokol Draf Cepat:
                                Eksperimen 25 Menit</h3>
                            <p class="font-body-sm text-body-sm text-secondary leading-relaxed">
                                Nyalakan pengatur waktu tanpa notifikasi. Tetapkan satu premis tunggal—misalnya:
                                <em>“Mengapa kita merasa lelah setelah rapat virtual berjam-jam?”</em> Mulailah mengetik
                                tanpa memeriksa kamus. Saat waktu habis, tutup laptop tanpa membaca ulang hingga
                                matahari terbenam. Beri jarak antara diri Anda dan teks.
                            </p>
                        </div>
                    </div>
                    <!-- Section H2 3 -->
                    <div class="pt-4">
                        <h2 class="font-headline-md text-headline-md text-on-surface mb-4 tracking-tight">
                            3. Ritual, Bukan Sekadar Menanti Kilatan Inspirasi
                        </h2>
                        <p class="">
                            Inspirasi adalah pengunjung yang manja; ia jarang hadir jika tidak melihat Anda sudah duduk
                            siap di meja kerja. Menjadikan menulis sebagai kebiasaan berarti mengubahnya dari beban
                            emosional menjadi tindakan mekanis yang menenangkan, selayaknya menyeduh secangkir kopi
                            hitam di pagi hari.
                        </p>
                        <!-- Elegant List with Custom Bullets -->
                        <div class="space-y-4 my-6">
                            <div class="flex items-start gap-3">
                                <span
                                    class="w-6 h-6 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0 mt-1">A</span>
                                <div>
                                    <strong class="font-label-lg text-label-lg text-on-surface">Ciptakan Pemicu
                                        Lingkungan (Context Anchor):</strong>
                                    <p class="text-secondary text-body-sm mt-0.5">Gunakan sudut ruangan yang konsisten,
                                        cangkir keramik favorit, atau instrumen musik ambient tanpa lirik. Otak belajar
                                        mengasosiasikan stimulus sensorik ini dengan mode fokus.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span
                                    class="w-6 h-6 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0 mt-1">B</span>
                                <div>
                                    <strong class="font-label-lg text-label-lg text-on-surface">Dokumentasikan Rekam
                                        Jejak Tanpa Rasa Bersalah:</strong>
                                    <p class="text-secondary text-body-sm mt-0.5">Jika satu hari Anda hanya mampu
                                        merangkai 200 kata karena tenggat pekerjaan lain, jangan putuskan rantai
                                        kebiasaan. Mengakui batas energi harian adalah bagian dari kedewasaan berkarya.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span
                                    class="w-6 h-6 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0 mt-1">C</span>
                                <div>
                                    <strong class="font-label-lg text-label-lg text-on-surface">Rayakan Draf Kasar
                                        sebagai Kemenangan Nyata:</strong>
                                    <p class="text-secondary text-body-sm mt-0.5">Draf yang buruk dapat disunting dan
                                        diselamatkan menjadi karya gemilang. Namun halaman yang kosong selamanya akan
                                        tetap menjadi mimpi yang belum pernah diuji kenyataan.</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-6">
                            Pada akhirnya, menulis 500 kata sehari bukan tentang memproduksi mahakarya setiap matahari
                            terbit. Ini adalah latihan kejujuran batin. Ini adalah cara kita menyatakan bahwa pemikiran
                            kita berharga untuk didengarkan—minimal oleh diri kita sendiri—di tengah kebisingan dunia
                            yang sering kali menuntut kita terus bereaksi tanpa pernah sempat merenung.
                        </p>
                    </div>
                </div>
                <!-- Topic Tags -->
                <div class="flex flex-wrap items-center gap-2 pt-10 pb-6">
                    <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface-variant font-label-md text-label-md transition-colors"
                        href="#">#Menulis</a>
                    <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface-variant font-label-md text-label-md transition-colors"
                        href="#">#Produktivitas</a>
                    <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface-variant font-label-md text-label-md transition-colors"
                        href="#">#Kreativitas</a>
                    <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface-variant font-label-md text-label-md transition-colors"
                        href="#">#EsaiPribadi</a>
                    <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface-variant font-label-md text-label-md transition-colors"
                        href="#">#Mindfulness</a>
                </div>
                <!-- Big Appreciation & Action Bar (Bottom of Story) -->
                <div
                    class="w-full py-5 px-6 rounded-2xl bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-4 my-6 shadow-sm">
                    <div class="flex items-center gap-6">
                        <button
                            class="clap-btn group flex items-center gap-3 px-4 py-2 rounded-full bg-surface-container-lowest hover:bg-surface-container transition-all shadow-xs"
                            onclick="handleClap()">
                            <span
                                class="material-symbols-outlined text-2xl clap-icon text-primary group-hover:scale-125 transition-transform">sign_language</span>
                            <div class="text-left">
                                <span
                                    class="font-label-lg text-label-lg text-on-surface block leading-tight clap-count">2.4k</span>
                                <span class="font-label-sm text-label-sm text-secondary">Tepukan</span>
                            </div>
                        </button>
                        <a class="flex items-center gap-2 text-secondary hover:text-on-surface transition-colors"
                            href="#komentar">
                            <span class="material-symbols-outlined text-2xl">mode_comment</span>
                            <span class="font-label-md text-label-md">48 Komentar</span>
                        </a>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors shadow-xs"
                            onclick="toggleBookmark(this)">
                            <span class="material-symbols-outlined text-lg bookmark-icon">bookmark_border</span>
                            <span class="">Simpan</span>
                        </button>
                        <button
                            class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors shadow-xs"
                            onclick="copyArticleLink(this)">
                            <span class="material-symbols-outlined text-lg share-icon">share</span>
                            <span class="">Bagikan</span>
                        </button>
                    </div>
                </div>
                <!-- Complete Author Bio Card -->
                <section class="w-full p-6 sm:p-8 rounded-2xl bg-surface-container-lowest shadow-sm my-8">
                    <div class="flex flex-col sm:flex-row gap-6 items-start">
                        <img alt="Clarissa Hartono" class="w-20 h-20 rounded-full object-cover shadow-sm shrink-0"
                            src="https://lh3.googleusercontent.com/aida/AEtjO1XwZViU1KKl2l3KWMbzb1vLA6UCmCh-GwcaUiNKRSexlSno0wsVXJWqA5ru7JywyMxSg4TpXV2oBGnbekvGff2_MhEfemW_4azUm-vgcV-vi4IOiQlo_2Ebf8pl8MXmXE1iboI_rqB_T9R8wM10-BGRqQaqTN7np0cfFFdBp9KZ8nG37Oj-cQVxIre0Tvr46eTRJorsdnvfjDQqAkccfJT9wuYpoAYbl5ga2lINW7CserCl0GPb2K8Zon4">
                        <div class="flex-1 min-w-0">
                            <div class="flex flex-wrap items-center justify-between gap-3 mb-2">
                                <div>
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Clarissa Hartono</h4>
                                    <p class="font-label-md text-label-md text-secondary">Ditulis oleh kurator esai
                                        Narrativa &amp; Pendiri Sudio Reka</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button
                                        class="px-4 py-1.5 rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md hover:bg-primary transition-colors"
                                        onclick="toggleFollow(this)">
                                        Ikuti Penulis
                                    </button>
                                    <button
                                        class="p-1.5 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface-variant transition-colors"
                                        title="Dukung dengan Tip">
                                        <span class="material-symbols-outlined text-xl">favorite</span>
                                    </button>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-secondary leading-relaxed mb-4">
                                Menulis tentang estetika hidup sehari-hari, disiplin kreatif, dan interaksi antara
                                manusia dengan teknologi modern. Berpengalaman 8 tahun memimpin ruang redaksi dan
                                mendampingi ratusan penulis pemula menerbitkan karya pertama mereka.
                            </p>
                            <div class="flex items-center gap-4 text-secondary font-label-sm text-label-sm">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">groups</span>
                                    14.2k Pengikut
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">auto_stories</span>
                                    62 Cerita Terbit
                                </span>
                                <a class="text-primary hover:underline ml-auto" href="#">Kunjungi Profil Lengkap
                                    →</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Community Responses / Comments Section -->
                <section class="w-full pt-8 pb-12" id="komentar">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Respon Pembaca (48)</h3>
                        <div class="flex items-center gap-2 text-secondary font-label-sm text-label-sm">
                            <span class="">Urutkan:</span>
                            <button class="font-semibold text-on-surface underline">Paling Relevan</button>
                            <span class="">•</span>
                            <button class="hover:text-on-surface">Terbaru</button>
                        </div>
                    </div>
                    <!-- Comment Submission Box -->
                    <div class="w-full p-4 sm:p-5 rounded-2xl bg-surface-container-lowest shadow-sm mb-8">
                        <div class="flex gap-3 mb-3">
                            <div
                                class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-fixed flex items-center justify-center font-label-sm font-bold shrink-0">
                                A
                            </div>
                            <textarea
                                class="w-full bg-surface-container-low rounded-xl p-3 font-body-sm text-body-sm text-on-surface placeholder:text-secondary focus:outline-none focus:bg-surface-container-lowest transition-colors resize-none"
                                id="comment-input" placeholder="Tulis tanggapan atau perspektif Anda tentang tulisan ini..." rows="3"></textarea>
                        </div>
                        <div class="flex items-center justify-between pt-2">
                            <div class="flex items-center gap-1 text-secondary">
                                <button class="p-1.5 hover:text-on-surface rounded-full hover:bg-surface-container-low"
                                    title="Format Tebal"><span
                                        class="material-symbols-outlined text-base">format_bold</span></button>
                                <button class="p-1.5 hover:text-on-surface rounded-full hover:bg-surface-container-low"
                                    title="Format Miring"><span
                                        class="material-symbols-outlined text-base">format_italic</span></button>
                                <button class="p-1.5 hover:text-on-surface rounded-full hover:bg-surface-container-low"
                                    title="Kutipan"><span
                                        class="material-symbols-outlined text-base">format_quote</span></button>
                            </div>
                            <button
                                class="px-5 py-1.5 rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md hover:bg-primary transition-colors shadow-xs"
                                onclick="postComment()">
                                Kirim Respon
                            </button>
                        </div>
                    </div>
                    <!-- Comments List -->
                    <div class="space-y-6" id="comments-container">
                        <!-- Comment 1 -->
                        <div
                            class="p-5 rounded-2xl bg-surface-container-low/60 flex flex-col gap-3 transition-colors hover:bg-surface-container-low">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-9 h-9 rounded-full bg-surface-container-high flex items-center justify-center font-label-md text-on-surface-variant font-semibold">
                                        RP
                                    </div>
                                    <div>
                                        <h5 class="font-label-lg text-label-lg text-on-surface">Raden Pranata</h5>
                                        <p class="font-label-sm text-label-sm text-secondary">Peneliti Kebijakan Publik
                                            • 2 jam yang lalu</p>
                                    </div>
                                </div>
                                <button class="text-secondary hover:text-on-surface"><span
                                        class="material-symbols-outlined text-base">more_horiz</span></button>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface leading-relaxed">
                                Analogi “Kamera Satu Arah” benar-benar membuka mata saya. Selama ini saya menghabiskan
                                40 menit hanya di dua paragraf pembuka karena bolak-balik menimbang apakah padanan
                                katanya sudah cukup terdengar intelek. Esai yang sangat menenangkan di tengah kecemasan
                                produktivitas.
                            </p>
                            <div class="flex items-center gap-4 pt-1 text-secondary font-label-sm text-label-sm">
                                <button class="flex items-center gap-1 hover:text-primary transition-colors"
                                    onclick="likeComment(this)">
                                    <span class="material-symbols-outlined text-base">thumb_up</span>
                                    <span class="">18 Suka</span>
                                </button>
                                <button class="hover:text-on-surface transition-colors">Balas</button>
                            </div>
                        </div>
                        <!-- Comment 2 -->
                        <div
                            class="p-5 rounded-2xl bg-surface-container-low/60 flex flex-col gap-3 transition-colors hover:bg-surface-container-low">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-9 h-9 rounded-full bg-secondary-container flex items-center justify-center font-label-md text-on-secondary-container font-semibold">
                                        SN
                                    </div>
                                    <div>
                                        <h5 class="font-label-lg text-label-lg text-on-surface">Siti Nurhaliza</h5>
                                        <p class="font-label-sm text-label-sm text-secondary">Arsitek &amp; Penikmat
                                            Sastra • 5 jam yang lalu</p>
                                    </div>
                                </div>
                                <button class="text-secondary hover:text-on-surface"><span
                                        class="material-symbols-outlined text-base">more_horiz</span></button>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface leading-relaxed">
                                Kutipan tentang draf pertama dengan pintu tertutup dan draf kedua dengan jendela terbuka
                                itu selalu relevan. Kadang kita lupa bahwa tulisan pertama adalah surat untuk diri
                                sendiri, baru kemudian menjadi persembahan bagi pembaca. Terima kasih Mbak Clarissa!
                            </p>
                            <div class="flex items-center gap-4 pt-1 text-secondary font-label-sm text-label-sm">
                                <button class="flex items-center gap-1 hover:text-primary transition-colors"
                                    onclick="likeComment(this)">
                                    <span class="material-symbols-outlined text-base">thumb_up</span>
                                    <span class="">32 Suka</span>
                                </button>
                                <button class="hover:text-on-surface transition-colors">Balas (2)</button>
                            </div>
                        </div>
                    </div>
                    <!-- Load More Responses Button -->
                    <div class="text-center mt-6">
                        <button
                            class="px-6 py-2 rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high font-label-md text-label-md transition-colors">
                            Muat 46 Tanggapan Lainnya
                        </button>
                    </div>
                </section>
            </article>
            <!-- More From Narrativa Section (Recycled Grid) -->
            <section class="w-full bg-surface-container-low py-16">
                <div class="max-w-7xl mx-auto px-gutter-mobile md:px-gutter">
                    <div class="flex items-end justify-between mb-8">
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-primary uppercase tracking-wider font-semibold block mb-1">Rekomendasi
                                Terkurasi</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Bacaan Selanjutnya dari
                                Narrativa</h3>
                        </div>
                        <a class="hidden sm:inline-flex items-center gap-1 font-label-md text-label-md text-primary hover:underline"
                            href="#">
                            Jelajahi Semua Topik →
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Rec Card 1 -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition-all duration-300 flex flex-col">
                            <div class="h-44 w-full bg-surface-container relative overflow-hidden">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                    data-alt="Calm architectural photography of an open-air modern library in Kyoto with clean wood shelves, warm afternoon light beam, and person reading quietly"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjc4qSO-MMXXmidVnkfwHuR26n-wD4ycg-is7yBYfxOvs5fGlqo1AvZpHSoK59kaeBwXLENWtbdFjHP19Dyi2X6EYHnKWBuhqpbWjuIDvklgMnhVd_OiQRdyjcskQfrMsewZ4FTOUutXmY0bDsnBzA1iusBieFhVzZwf7ln5ROjlJfTah_cWgBYiN7C1NdfIp-qfq1jA1WZD-3MPTaWHRIvJ9iOTiiZQyR2xNRyzHKlFFUJyYXyVf3">
                                <span
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-surface/90 backdrop-blur-sm font-label-sm text-label-sm text-on-surface">
                                    Literasi &amp; Ruang
                                </span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="font-label-sm text-label-sm text-secondary">Dimas Anggara • 5
                                            mnt</span>
                                    </div>
                                    <h4
                                        class="font-headline-sm text-headline-sm text-on-surface leading-snug mb-2 hover:text-primary transition-colors">
                                        <a href="#" class="">Arsitektur Keheningan: Mengapa Ruang Fisik
                                            Membentuk Mutu Pemikiran Kita</a>
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-secondary line-clamp-2">
                                        Menyelami kaitan erat antara volume langit-langit ruangan dan kejernihan
                                        hipotesis intelektual.
                                    </p>
                                </div>
                                <div class="pt-4 flex items-center justify-between text-secondary">
                                    <span class="font-label-sm text-label-sm">1.8k Claps</span>
                                    <span
                                        class="material-symbols-outlined text-lg hover:text-on-surface">bookmark_border</span>
                                </div>
                            </div>
                        </div>
                        <!-- Rec Card 2 -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition-all duration-300 flex flex-col">
                            <div class="h-44 w-full bg-surface-container relative overflow-hidden">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                    data-alt="Editorial close up of a vintage analog fountain pen resting on cream textured cotton paper with handwritten ink strokes and a bronze paperweight"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiqgHc2ouH9snkdP1FDKjEkd3QbcFAcQjaaZqKA7vJbM6SR-buMB_mHumzR6JHds-hsKc6mHCvEPa3m1kPfu18C5V6ZQDFgsALoeZ6MSRA5gYdB1NagKP-EdNvQh8AZNFATQzvBCnIY5oKAK7452usjMI0tLZClkqWFdYrFYDGfuM53rxf-lglXOuLrHO2XM5OghEPLgFzWxkma4OpMEFEcSwDVr0XOf_dHBpftGBNgr_N5MDWRCaC">
                                <span
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-surface/90 backdrop-blur-sm font-label-sm text-label-sm text-on-surface">
                                    Seni Menulis
                                </span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="font-label-sm text-label-sm text-secondary">Hana Saraswati • 8
                                            mnt</span>
                                    </div>
                                    <h4
                                        class="font-headline-sm text-headline-sm text-on-surface leading-snug mb-2 hover:text-primary transition-colors">
                                        <a href="#" class="">Catatan Margin: Mengapa Membaca dengan Pena
                                            Aktif Mengubah Pemahaman</a>
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-secondary line-clamp-2">
                                        Marginalia bukan sekadar mencoret buku, melainkan percakapan dua arah melintasi
                                        waktu dengan sang pengarang.
                                    </p>
                                </div>
                                <div class="pt-4 flex items-center justify-between text-secondary">
                                    <span class="font-label-sm text-label-sm">3.1k Claps</span>
                                    <span
                                        class="material-symbols-outlined text-lg hover:text-on-surface">bookmark_border</span>
                                </div>
                            </div>
                        </div>
                        <!-- Rec Card 3 -->
                        <div
                            class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition-all duration-300 flex flex-col">
                            <div class="h-44 w-full bg-surface-container relative overflow-hidden">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                    data-alt="Artistic high contrast composition of human hand holding ceramic tea cup while contemplating an abstract geometric oil painting in a sunlit gallery"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDR7RmMo3DnJ8mnDNMfHZz9VSy_AdTkRFUe9AiZISVf_BJysm6vM3nLWuwWyRrQyDrP4nSPkL0nlo8XceSkj357NCyogWEY0XrYL6CnFafHcFxt9VAYlRTTuFocAhHR3_HMdWBMoLgMT-ee8qbxsgx_u5uScU85f5HOI7SDGcphyP3YPTJh_-tKfjjDI22x7IxT3oHeD4yjoEb40V-jdACSDR17RIGi78ibd_a5AR4IilGGEu4GsaV_">
                                <span
                                    class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-surface/90 backdrop-blur-sm font-label-sm text-label-sm text-on-surface">
                                    Filsafat Hidup
                                </span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="font-label-sm text-label-sm text-secondary">Bagus Wibisono • 4
                                            mnt</span>
                                    </div>
                                    <h4
                                        class="font-headline-sm text-headline-sm text-on-surface leading-snug mb-2 hover:text-primary transition-colors">
                                        <a href="#" class="">Menolak Tuntutan Efisiensi Berlebih dalam
                                            Proses Berkarya</a>
                                    </h4>
                                    <p class="font-body-sm text-body-sm text-secondary line-clamp-2">
                                        Ketika setiap detik diukur dengan matriks keluaran, seni kehilangan momen
                                        ketidaksengajaan yang paling indah.
                                    </p>
                                </div>
                                <div class="pt-4 flex items-center justify-between text-secondary">
                                    <span class="font-label-sm text-label-sm">950 Claps</span>
                                    <span
                                        class="material-symbols-outlined text-lg hover:text-on-surface">bookmark_border</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive Scripts -->
            <script>
                // Reading Progress Bar Indicator
                window.addEventListener('scroll', () => {
                    const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
                    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    const scrolled = (winScroll / height) * 100;
                    const progressBar = document.getElementById('narrativa-progress');
                    if (progressBar) {
                        progressBar.style.width = scrolled + '%';
                    }
                });

                // Dynamic Font Size Resizer for Accessibility
                let currentFontSizeStep = 0;

                function adjustFontSize(delta) {
                    currentFontSizeStep = Math.max(-1, Math.min(2, currentFontSizeStep + delta));
                    const content = document.getElementById('story-content');
                    if (!content) return;

                    content.classList.remove('text-[1rem]', 'text-[1.125rem]', 'text-[1.25rem]', 'text-[1.375rem]');
                    if (currentFontSizeStep === -1) {
                        content.style.fontSize = '1rem';
                        content.style.lineHeight = '1.75rem';
                    } else if (currentFontSizeStep === 0) {
                        content.style.fontSize = '1.125rem';
                        content.style.lineHeight = '1.875rem';
                    } else if (currentFontSizeStep === 1) {
                        content.style.fontSize = '1.25rem';
                        content.style.lineHeight = '2.1rem';
                    } else if (currentFontSizeStep === 2) {
                        content.style.fontSize = '1.375rem';
                        content.style.lineHeight = '2.3rem';
                    }
                }

                // Interactive Clap Counter
                let clapTotal = 2418;
                let userClapped = false;

                function handleClap() {
                    clapTotal++;
                    userClapped = true;
                    document.querySelectorAll('.clap-count').forEach(el => {
                        el.textContent = (clapTotal / 1000).toFixed(1) + 'k';
                    });
                    document.querySelectorAll('.clap-icon').forEach(icon => {
                        icon.classList.add('text-primary');
                        icon.style.fontVariationSettings = "'FILL' 1";
                        icon.classList.add('scale-125');
                        setTimeout(() => icon.classList.remove('scale-125'), 200);
                    });
                }

                // Toggle Bookmark Status
                function toggleBookmark(btn) {
                    const icon = btn.querySelector('.bookmark-icon');
                    if (icon) {
                        const isSaved = icon.textContent === 'bookmark';
                        icon.textContent = isSaved ? 'bookmark_border' : 'bookmark';
                        if (!isSaved) {
                            icon.classList.add('text-primary');
                        } else {
                            icon.classList.remove('text-primary');
                        }
                    }
                }

                // Toggle Author Follow State
                function toggleFollow(btn) {
                    const isFollowing = btn.textContent.includes('Mengikuti');
                    if (isFollowing) {
                        btn.textContent = '+ Ikuti';
                        btn.classList.remove('bg-surface-container-highest', 'text-on-surface');
                        btn.classList.add('bg-primary-container', 'text-on-primary-container');
                    } else {
                        btn.textContent = 'Mengikuti';
                        btn.classList.remove('bg-primary-container', 'text-on-primary-container');
                        btn.classList.add('bg-surface-container-highest', 'text-on-surface');
                    }
                }

                // Copy Link Notification Toast
                function copyArticleLink(btn) {
                    navigator.clipboard.writeText(window.location.href);
                    const icon = btn.querySelector('.share-icon');
                    if (icon) {
                        icon.textContent = 'check';
                        setTimeout(() => {
                            icon.textContent = 'share';
                        }, 2000);
                    }
                }

                // Audio Narration Floating Dock Toggle
                function toggleAudio() {
                    const dock = document.getElementById('audio-dock');
                    if (dock) {
                        dock.classList.toggle('hidden');
                    }
                }

                // Add New Comment Dynamically
                function postComment() {
                    const input = document.getElementById('comment-input');
                    const text = input ? input.value.trim() : '';
                    if (!text) return;

                    const container = document.getElementById('comments-container');
                    const newComment = document.createElement('div');
                    newComment.className =
                        "p-5 rounded-2xl bg-surface-container-low/60 flex flex-col gap-3 transition-colors hover:bg-surface-container-low animate-fade-in";
                    newComment.innerHTML = `
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-label-md font-semibold">
              A
            </div>
            <div>
              <h5 class="font-label-lg text-label-lg text-on-surface">Anda</h5>
              <p class="font-label-sm text-label-sm text-secondary">Baru saja</p>
            </div>
          </div>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface leading-relaxed">${text.replace(/</g, "&lt;").replace(/>/g, "&gt;")}</p>
        <div class="flex items-center gap-4 pt-1 text-secondary font-label-sm text-label-sm">
          <button onclick="likeComment(this)" class="flex items-center gap-1 hover:text-primary transition-colors">
            <span class="material-symbols-outlined text-base">thumb_up</span>
            <span>1 Suka</span>
          </button>
          <button class="hover:text-on-surface transition-colors">Balas</button>
        </div>
      `;
                    container.prepend(newComment);
                    input.value = '';
                }

                // Like Comment Action
                function likeComment(btn) {
                    const span = btn.querySelector('span:last-child');
                    if (span) {
                        let current = parseInt(span.textContent) || 0;
                        span.textContent = (current + 1) + ' Suka';
                        btn.classList.add('text-primary');
                    }
                }
            </script>
        </div>
    </main>

    </body>
@endsection
