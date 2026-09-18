@extends('layouts.app')
@section('content')
    <main class="w-full pt-28 bg-background">
        <div class="flex flex-col w-full">
            <!-- Subtle Editorial Top Intro Banner -->
            <section
                class="w-full bg-surface-container-low px-gutter-mobile md:px-gutter py-space-xl md:py-space-xxl relative overflow-hidden">
                <div
                    class="max-w-7xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-space-xl relative z-10">
                    <div class="max-w-2xl flex flex-col gap-space-md">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm w-fit">
                            <span class="w-2 h-2 rounded-full bg-primary-container animate-pulse"></span>
                            <span>Edisi Kurasi Redaksi Maret 2025</span>
                        </div>
                        <h1 class="font-display-lg text-headline-lg md:text-display-lg text-on-surface tracking-tight">
                            Di mana ide-ide terbaik menemukan suaranya.
                        </h1>
                        <p class="font-body-md text-body-md text-secondary max-w-xl">
                            Platform terbuka bagi siapa saja untuk membaca, menulis, dan memperluas wawasan dari para
                            pemikir, kreator, dan praktisi independen lintas bidang.
                        </p>
                        <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                            <a class="inline-flex items-center gap-2 rounded-full bg-primary-container hover:bg-primary text-on-primary-container px-6 py-3 font-label-md text-label-md transition-all shadow-sm hover:shadow"
                                href="#feed-utama">
                                <span>Mulai Membaca</span>
                                <span class="material-symbols-outlined text-base">arrow_downward</span>
                            </a>
                            <a class="inline-flex items-center gap-2 rounded-full bg-surface hover:bg-surface-container-high text-on-surface px-6 py-3 font-label-md text-label-md transition-colors shadow-sm"
                                data-path="tulis-cerita" href="#">
                                <span class="material-symbols-outlined text-base text-primary-container">edit_square</span>
                                <span>Mulai Menulis Artikel</span>
                            </a>
                        </div>
                    </div>
                    <!-- Atmospheric Editorial Vignette Card -->
                    <div class="hidden lg:flex flex-col p-6 rounded-2xl bg-surface shadow-md max-w-sm w-full">
                        <div class="flex items-center justify-between pb-3">
                            <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest">Catatan
                                Kurator</span>
                            <span class="inline-flex items-center text-primary font-label-sm text-label-sm gap-1">
                                <span class="material-symbols-outlined text-sm">verified</span> Terverifikasi
                            </span>
                        </div>
                        <p class="font-body-md text-body-md italic text-on-surface pb-4">
                            “Tulisan yang jernih bukan hanya cerminan logika yang rapi, melainkan jembatan empati yang
                            menghubungkan pembaca dengan realitas baru.”
                        </p>
                        <div class="flex items-center gap-3 pt-2">
                            <img class="w-10 h-10 rounded-full object-cover"
                                data-alt="Close up warm editorial portrait of an Indonesian female editor smiling warmly, soft daylight in a minimalist library studio with muted earthy beige backdrop."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFcVzij7P8pQfJ7pqTmVDVMZQN1gNebWLjxVI_N3mOizPpavH_GpAESwHtmLnRYRCEMulexWJbDaRV5kuAJ7hfKkqbF9KhQgRzCiQra44GRmxN4UBuRCUCi_Cgg6IlnqJCy-C5gmjkspGjCDPy4nN5vptBD6jjN_On4fm8gvvJMzscsu47hZ2YSE4qEt86Bwgo36cLJ9aKLdTPmcC1Z2UcRsr2yDYTBchgxgoHsZowfXz6TPO4DalX" />
                            <div>
                                <p class="font-label-md text-label-md text-on-surface font-semibold">Tantri Wardhani
                                </p>
                                <p class="font-label-sm text-label-sm text-secondary">Kepala Kurasi Redaksi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Sedang Tren di Narrativa -->
            <section class="w-full max-w-7xl mx-auto px-gutter-mobile md:px-gutter py-space-xl">
                <div class="flex items-center justify-between gap-4 pb-space-lg">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
                            <span class="material-symbols-outlined text-xl">trending_up</span>
                        </div>
                        <h2 class="font-headline-sm text-headline-sm text-on-surface tracking-tight">
                            Sedang Tren di Narrativa
                        </h2>
                    </div>
                    <span class="hidden sm:inline-flex text-secondary font-label-sm text-label-sm">Diperbarui setiap
                        jam berdasarkan interaksi pembaca</span>
                </div>
                <!-- 6 Trending Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
                    <!-- Item 01 -->
                    <article
                        class="flex gap-4 p-space-md rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all group">
                        <span
                            class="font-display-lg text-display-lg text-surface-dim select-none leading-none pt-1">01</span>
                        <div class="flex flex-col justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-6 rounded-full object-cover"
                                    data-alt="Portrait avatar of a young tech analyst with glasses in contemporary studio lighting on neutral grey background."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBduUe4r1kYmX3bdkPbV5U7s7lLrdoBmKaCuSyvfwpCfKOsRg73Rwg4rx2Mmj9oZfymK-3T7KKxiyy_8u5D2d1bTVL-nzcBAj0dj6LLb90NEc02m0ck1yfCVuzCnOwPLM1DNNJpa4JI7Ytk6kla7o5AnAnbefA-01__Fm1nNN7yKDLBmt877FQmDubMmwztCP4Ckg9oazT4m6ufAUvW4LeD37m4zet7DgjwGebqrHyE0beKAzo6mioT" />
                                <span class="font-label-md text-label-md font-medium text-on-surface">Rian
                                    Mahendra</span>
                                <span class="text-secondary text-xs">•</span>
                                <span class="font-label-sm text-label-sm text-primary-container font-semibold">AI
                                    Insights</span>
                            </div>
                            <a class="font-headline-sm text-base md:text-lg font-semibold text-on-surface group-hover:text-primary transition-colors line-clamp-2"
                                href="#">
                                Masa Depan AI: Bagaimana Kita Bekerja di Tahun 2026 Tanpa Kehilangan Esensi Kemanusiaan
                            </a>
                            <div class="flex items-center gap-3 text-secondary font-label-sm text-label-sm pt-1">
                                <span>28 Feb</span>
                                <span>•</span>
                                <span>5 mnt baca</span>
                                <span class="inline-flex items-center text-primary ml-auto" title="Pilihan Editor">
                                    <span class="material-symbols-outlined text-sm">stars</span>
                                </span>
                            </div>
                        </div>
                    </article>
                    <!-- Item 02 -->
                    <article
                        class="flex gap-4 p-space-md rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all group">
                        <span
                            class="font-display-lg text-display-lg text-surface-dim select-none leading-none pt-1">02</span>
                        <div class="flex flex-col justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-6 rounded-full object-cover"
                                    data-alt="Professional candid portrait headshot of an Asian woman entrepreneur wearing a crisp off-white blazer in a sunny minimalist cafe office."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEAlm8AlrkTn9y5_ffOgRbo2-9-VIndkZip_FBWWFnNpoqY_hsRHxCYC1Pp3Ynw6FC3FydCh56I8EdPp_NOpVha5-CRpRAzJx48-bmfRIYWIjrzee60XTQry6Ff1dmAf-qgwSmdPMFW9pp6EkHePBxKYmJCFrfN_bWXUYu61Iqzc_CJ-k5ZQ6ku91VGrVSm4UfzqSv6pR8Xg7tdGXmyiYZV2aUtIuMvoEzaBJC-eS0cYAYlJe6D9UQ" />
                                <span class="font-label-md text-label-md font-medium text-on-surface">Clarissa
                                    Tan</span>
                                <span class="text-secondary text-xs">•</span>
                                <span class="font-label-sm text-label-sm text-secondary">Ventures ID</span>
                            </div>
                            <a class="font-headline-sm text-base md:text-lg font-semibold text-on-surface group-hover:text-primary transition-colors line-clamp-2"
                                href="#">
                                Pelajaran Sulit Membangun Startup Tahap Awal di Asia Tenggara Pasca Era Easy-Money
                            </a>
                            <div class="flex items-center gap-3 text-secondary font-label-sm text-label-sm pt-1">
                                <span>1 Mar</span>
                                <span>•</span>
                                <span>8 mnt baca</span>
                                <span class="inline-flex items-center text-primary ml-auto" title="Pilihan Editor">
                                    <span class="material-symbols-outlined text-sm">stars</span>
                                </span>
                            </div>
                        </div>
                    </article>
                    <!-- Item 03 -->
                    <article
                        class="flex gap-4 p-space-md rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all group">
                        <span
                            class="font-display-lg text-display-lg text-surface-dim select-none leading-none pt-1">03</span>
                        <div class="flex flex-col justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-6 rounded-full object-cover"
                                    data-alt="Moody artistic portrait of a creative writer sitting beside open notebooks and a cup of black coffee in an understated morning light."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_oFhrv9vSwGianX0Gq_BLYxdcGrAaxa7jVNR-dW621U2KAOZeSnkWhdaS3ySWy4Bxf8OmkU-8dBF6MM7UaFLtDTyJ1C7HW9mW9MGgGpTop28ScxaTGTdQ9y7pIMMuk-XYGPVC9UWVtBLSxAB5GCWfH1Q9-HEPcAurBvj_wOmXmqnV7s_8Cau_qLWDm4uR5PWh8_rauW2keFhSwlz8aL9DGQOhIVU-owFpbUU6wp_mTfD757EtykyG" />
                                <span class="font-label-md text-label-md font-medium text-on-surface">Devon
                                    Pratama</span>
                            </div>
                            <a class="font-headline-sm text-base md:text-lg font-semibold text-on-surface group-hover:text-primary transition-colors line-clamp-2"
                                href="#">
                                Seni Menulis Esai Pribadi yang Menyentuh Pembaca: Melampaui Ego Menuju Resonansi
                            </a>
                            <div class="flex items-center gap-3 text-secondary font-label-sm text-label-sm pt-1">
                                <span>27 Feb</span>
                                <span>•</span>
                                <span>6 mnt baca</span>
                            </div>
                        </div>
                    </article>
                    <!-- Item 04 -->
                    <article
                        class="flex gap-4 p-space-md rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all group">
                        <span
                            class="font-display-lg text-display-lg text-surface-dim select-none leading-none pt-1">04</span>
                        <div class="flex flex-col justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-6 rounded-full object-cover"
                                    data-alt="Portrait of a female UI UX architect with short hair smiling calmly, clean modern architectural interior behind."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAx2bsfhTYL_n-8yU6py5RWvumyKZ_wZN3oKEomH8_ufXMIl-g_ToCrfMMyowfSlEVfw8SOc85OLgSmJzblNhntPZeYkVpTw99MOLlIfLRxq69wLDAwFfnUfn2pzg3kCC1XRcqchzbNVFACzS-RZQJUFMt7X4Onvg_3f97H9GOVC049Gsj79im_wUJlKtIR7I1xhyCSZfJ1qJDbMcgvkX1fc5URFj40HIBgkJeUUpEZ05YAcyTtyYWg" />
                                <span class="font-label-md text-label-md font-medium text-on-surface">Almira
                                    Laksmi</span>
                                <span class="text-secondary text-xs">•</span>
                                <span class="font-label-sm text-label-sm text-secondary">Design Ledger</span>
                            </div>
                            <a class="font-headline-sm text-base md:text-lg font-semibold text-on-surface group-hover:text-primary transition-colors line-clamp-2"
                                href="#">
                                Mengapa Kita Kehilangan Keajaiban Web Awal: Renungan Desain di Era Monopolisasi Pola
                            </a>
                            <div class="flex items-center gap-3 text-secondary font-label-sm text-label-sm pt-1">
                                <span>26 Feb</span>
                                <span>•</span>
                                <span>4 mnt baca</span>
                            </div>
                        </div>
                    </article>
                    <!-- Item 05 -->
                    <article
                        class="flex gap-4 p-space-md rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all group">
                        <span
                            class="font-display-lg text-display-lg text-surface-dim select-none leading-none pt-1">05</span>
                        <div class="flex flex-col justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-6 rounded-full object-cover"
                                    data-alt="Headshot of a senior Indonesian financial analyst in formal relaxed linen shirt with quiet confidence."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbD-NG8Bk5hSyzH2p9AEs91MFXe-tvtf3rQZkN8iDjiesTtjRYuK5mVhtPboW5KHFVBJzpR-jj3Q1_g9cbj7db1CpWDBFjp4SH6ER_TLI76LZtqO_EwnYWNKmMSxvhwfI0LQfb9ld5PMF5_T5bPSafpwmcbtR3ZmkrgpcZRPCbADVCmv5TIU3F3fEX2wdjng0dCVS3-DDAw5G1w3lAk6HyErRPm3ByWW3bqerViAHm4_yCWseTymYp" />
                                <span class="font-label-md text-label-md font-medium text-on-surface">Baskara
                                    Utama</span>
                            </div>
                            <a class="font-headline-sm text-base md:text-lg font-semibold text-on-surface group-hover:text-primary transition-colors line-clamp-2"
                                href="#">
                                Psikologi Uang: Kebiasaan Sunyi yang Mengamankan Kemandirian Finansial di Usia 30-an
                            </a>
                            <div class="flex items-center gap-3 text-secondary font-label-sm text-label-sm pt-1">
                                <span>25 Feb</span>
                                <span>•</span>
                                <span>7 mnt baca</span>
                                <span class="inline-flex items-center text-primary ml-auto" title="Pilihan Editor">
                                    <span class="material-symbols-outlined text-sm">stars</span>
                                </span>
                            </div>
                        </div>
                    </article>
                    <!-- Item 06 -->
                    <article
                        class="flex gap-4 p-space-md rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all group">
                        <span
                            class="font-display-lg text-display-lg text-surface-dim select-none leading-none pt-1">06</span>
                        <div class="flex flex-col justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-6 rounded-full object-cover"
                                    data-alt="Portrait photo of a young male data researcher looking pensively with warm atmospheric golden hour tones."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCK1TRARXRUne5fGZXYnlbNR2-syW8RPQwwGH0GjcO2QhTiS6D-sSiWYY_krvX27vYScJYitTfghs0EveFMLJwUe7R_ZC2Xh58RpyC5ymzIUr857hAsRqRmoxlSOQoMvtmpryh7Ig2Euyr7BrBY-NML7-Nc17sioBhNmy_Cb_7JRFMQNubR27qa9a3Futaiyb2fmjAHZTIOOokorY3cYWLexIxCs0WlLBgZP3cDU1CVThMbIXDwfu9w" />
                                <span class="font-label-md text-label-md font-medium text-on-surface">Naufal
                                    Ghafiki</span>
                            </div>
                            <a class="font-headline-sm text-base md:text-lg font-semibold text-on-surface group-hover:text-primary transition-colors line-clamp-2"
                                href="#">
                                Membedah Arsitektur Model Penalaran Terbaru: Lompatan Logika atau Sekadar Halusinasi
                                Cerdas?
                            </a>
                            <div class="flex items-center gap-3 text-secondary font-label-sm text-label-sm pt-1">
                                <span>24 Feb</span>
                                <span>•</span>
                                <span>9 mnt baca</span>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <!-- Main Feed & Exploration Canvas (8 Cols Feed + 4 Cols Sticky Discovery Sidebar) -->
            <div class="w-full max-w-7xl mx-auto px-gutter-mobile md:px-gutter py-space-xl" id="feed-utama">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                    <!-- Left Main Feed (8 Cols) -->
                    <div class="lg:col-span-8 flex flex-col gap-space-lg">
                        <!-- Feed Filter Navigation Tabs -->
                        <div class="flex items-center justify-between pb-2">
                            <div class="flex items-center gap-space-sm overflow-x-auto no-scrollbar"
                                id="feed-tab-container">
                                <button
                                    class="feed-tab-btn active px-4 py-1.5 rounded-full font-label-md text-label-md bg-on-surface text-surface-container-lowest transition-colors"
                                    data-tab="semua" type="button">
                                    Terbaru
                                </button>
                                <button
                                    class="feed-tab-btn px-4 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                                    data-tab="rekomendasi" type="button">
                                    Rekomendasi
                                </button>
                                <button
                                    class="feed-tab-btn px-4 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                                    data-tab="teknologi" type="button">
                                    Teknologi
                                </button>
                                <button
                                    class="feed-tab-btn px-4 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                                    data-tab="kreativitas" type="button">
                                    Kreativitas
                                </button>
                            </div>
                            <div class="hidden sm:flex items-center text-secondary font-label-sm text-label-sm gap-1">
                                <span class="material-symbols-outlined text-sm">tune</span>
                                <span>Kustomisasi Umpan</span>
                            </div>
                        </div>
                        <!-- Article List -->
                        <div class="flex flex-col gap-space-lg" id="feed-article-list">
                            <!-- Article Item 1 -->
                            <article
                                class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md justify-between">
                                <div class="flex flex-col justify-between gap-space-sm flex-1 min-w-0">
                                    <div class="flex items-center gap-2.5">
                                        <img class="w-6 h-6 rounded-full object-cover"
                                            data-alt="Minimalist modern headshot of Farhan Yudistira, Indonesian digital product designer with sleek glasses and dark t-shirt."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuANbgX7SopbTa7RblULqs01XJoG2vJAtdRut5ieOoOkYP7Bw7juozKBaC4b6LDWbEv1qrU3Nr1gOEpjVRCRwvH3I350Po_Ku0t3DFWQrJhrEvMX59BoUdHgjLBNCAyEsgrplS_AKYTMO82VHUPSwdgbqUwjmTNAe_E2oDiFs1FPPkkUOx_Wo_ZIneOdj3U8oZUdk_M0P0tZ2hcJPBVJxPkyzwioZ3GmDPoYf9LNr_0rYYUuVqzYrvLW" />
                                        <span class="font-label-md text-label-md font-semibold text-on-surface">Farhan
                                            Yudistira</span>
                                        <span class="text-secondary text-xs">•</span>
                                        <span class="font-label-sm text-label-sm text-secondary">Desain UI • 2 Maret
                                            2025</span>
                                    </div>
                                    <a class="group" href="#">
                                        <h3
                                            class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-2">
                                            Revolusi Antarmuka AI: Dari Command Line Menuju Desain Intuitif
                                        </h3>
                                        <p class="font-body-sm text-body-sm text-secondary line-clamp-2 mt-1.5">
                                            Bagaimana model antarmuka kanvas tak terhingga dan konteks dinamis
                                            menggantikan paradigma lama kotak obrolan konvensional yang kaku.
                                        </p>
                                    </a>
                                    <div class="flex items-center justify-between pt-space-xs">
                                        <div class="flex items-center gap-space-sm flex-wrap">
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Desain
                                                UI</span>
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Kecerdasan
                                                Buatan</span>
                                            <span class="font-label-sm text-label-sm text-secondary">6 mnt baca</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-secondary">
                                            <button aria-label="Beri Tepuk Tangan"
                                                class="clap-btn inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">pan_tool</span>
                                                <span class="clap-count font-label-sm text-label-sm">1.2k</span>
                                            </button>
                                            <button aria-label="Komentar"
                                                class="inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">chat_bubble</span>
                                                <span class="font-label-sm text-label-sm">48</span>
                                            </button>
                                            <button aria-label="Simpan Artikel"
                                                class="bookmark-btn hover:text-primary transition-colors" type="button">
                                                <span
                                                    class="material-symbols-outlined text-lg bookmark-icon">bookmark_border</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sm:w-48 sm:h-36 w-full h-48 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                        data-alt="Minimalist 3D rendered translucent user interface glass widgets glowing softly with organic gradients of forest green and stone grey on clean light desk."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQQp18FREmHbC_2l8P9JaIWnvZvfzw4acXEEYAkFGNuDeyjSttkNFdeBHs06TzxW_s1rwjdHC-4eC12gjeJBwPruNt3x1NFLjEBCavhk0qZlyJ5QfkJrKc-z47h_PMvu3WX-0G-qJtEcXrNoppf-4LPHBCUWU8lm7sPF-b0carNMtbF9JAsnriv87n32-L4IzxaksS4gwDDVHy2aY6wNa8_3ZD0FbL39Kpixo732D96MAo5sZdX2TU" />
                                </div>
                            </article>
                            <!-- Article Item 2 -->
                            <article
                                class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md justify-between">
                                <div class="flex flex-col justify-between gap-space-sm flex-1 min-w-0">
                                    <div class="flex items-center gap-2.5">
                                        <img class="w-6 h-6 rounded-full object-cover"
                                            data-alt="Warm editorial portrait photo of Maya Sastro, female financial writer with hair pinned up in naturally lit study room."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKE9t1cF3OFutgP_Xb2ffLRe3UiSLZBHtJQ5dfHiv85tphcMP4KyAeElgn2ddKZVHUIsuqDWtU3VUVv9JYBX5Uz8JCbvoo5iILs1huSkN_Csecb-oh1v5eBqeEtTImh2R26CbnhXWLlFWElVtg8VV5NgE1dr215o6_gKHNqJ_3xMb-UEeuprBgF0YimSoOYTFaUGeC9U2adkNFDN78zb0kO27kt4diBq0IY6h7yGM2MJ8IovzFI4pz" />
                                        <span class="font-label-md text-label-md font-semibold text-on-surface">Maya
                                            Sastro</span>
                                        <span class="text-secondary text-xs">•</span>
                                        <span class="font-label-sm text-label-sm text-secondary">Keuangan • 1 Maret
                                            2025</span>
                                    </div>
                                    <a class="group" href="#">
                                        <h3
                                            class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-2">
                                            Catatan Finansial: Cara Mengelola Arus Kas di Tengah Ketidakpastian Pasar
                                        </h3>
                                        <p class="font-body-sm text-body-sm text-secondary line-clamp-2 mt-1.5">
                                            Langkah taktis membagi dana darurat, menjaga alokasi instrumen likuid, dan
                                            menghindari kepanikan saat volatilitas ekonomi global meningkat tajam.
                                        </p>
                                    </a>
                                    <div class="flex items-center justify-between pt-space-xs">
                                        <div class="flex items-center gap-space-sm flex-wrap">
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Keuangan
                                                Pribadi</span>
                                            <span class="font-label-sm text-label-sm text-secondary">4 mnt baca</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-secondary">
                                            <button aria-label="Beri Tepuk Tangan"
                                                class="clap-btn inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">pan_tool</span>
                                                <span class="clap-count font-label-sm text-label-sm">840</span>
                                            </button>
                                            <button aria-label="Komentar"
                                                class="inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">chat_bubble</span>
                                                <span class="font-label-sm text-label-sm">29</span>
                                            </button>
                                            <button aria-label="Simpan Artikel"
                                                class="bookmark-btn hover:text-primary transition-colors" type="button">
                                                <span
                                                    class="material-symbols-outlined text-lg bookmark-icon">bookmark_border</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sm:w-48 sm:h-36 w-full h-48 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                        data-alt="Still life flatlay of a clean leather bound journal, brass fountain pen, ceramic coffee mug, and minimalist financial ledger table charts on a wood desk."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5Cmesd_sUW6V9He8389idww9ePfScA0jkLiTTKv9abLItXtfinBEkPSZnC9M5vWLmg1xsv_ULIUQBEV1CwZBL-tsxpNVsLly7oBu0VnTqhz1PjBW8aiK8ZY1M4l7Sea_ChvvX9tTAy6AiHgmgz788vE6sFh3i9AkVyDSJTchQrON1enEhSuC7VnaFrjESR6xXHm13zS7XGhdk-MD9FZIh-jEhu7SzX--tN8-gxB5qwAz4pR2ShKPk" />
                                </div>
                            </article>
                            <!-- Article Item 3 -->
                            <article
                                class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md justify-between">
                                <div class="flex flex-col justify-between gap-space-sm flex-1 min-w-0">
                                    <div class="flex items-center gap-2.5">
                                        <img class="w-6 h-6 rounded-full object-cover"
                                            data-alt="Portrait of Amanda Lee, a focused essayist wearing green sweater sitting in a bookstore corner with warm amber light."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCo6_Keu4Ra1TohSfA0nZGvQi32lw3C_Ut1-Lxj15Gxp0BTA5a7Garpv2QQ97-BL2t7ONyeD9o2Hr_jNkWfqCIKqTxS2pylPsi3NMGbHaC3vKMP0MJZHlVNAv7D_gSq7Ytgmvoi_UxkqxWA-zBHpLRIcNH5iBtU2q7QCz5WOrosdlu24MbxXSh0QlrHmQC12ymqSrBTWSZpMl-en5v6m9OYtjU_hMvdO9ch6Vp0zDAE_LX6wplQ4tEV" />
                                        <span class="font-label-md text-label-md font-semibold text-on-surface">Amanda
                                            Lee</span>
                                        <span class="text-secondary text-xs">•</span>
                                        <span class="font-label-sm text-label-sm text-secondary">Produktivitas • 28 Feb
                                            2025</span>
                                    </div>
                                    <a class="group" href="#">
                                        <h3
                                            class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-2">
                                            Membangun Kebiasaan Menulis 500 Kata Sehari: Metode Praktis Penulis
                                            Produktif
                                        </h3>
                                        <p class="font-body-sm text-body-sm text-secondary line-clamp-2 mt-1.5">
                                            Menghilangkan hambatan mental perfectionism awal, menetapkan batasan waktu
                                            tanpa distraksi gawai, dan menyusun bank ide yang tak pernah kering.
                                        </p>
                                    </a>
                                    <div class="flex items-center justify-between pt-space-xs">
                                        <div class="flex items-center gap-space-sm flex-wrap">
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Kebiasaan</span>
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Menulis</span>
                                            <span class="font-label-sm text-label-sm text-secondary">7 mnt baca</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-secondary">
                                            <button aria-label="Beri Tepuk Tangan"
                                                class="clap-btn inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">pan_tool</span>
                                                <span class="clap-count font-label-sm text-label-sm">2.4k</span>
                                            </button>
                                            <button aria-label="Komentar"
                                                class="inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">chat_bubble</span>
                                                <span class="font-label-sm text-label-sm">92</span>
                                            </button>
                                            <button aria-label="Simpan Artikel"
                                                class="bookmark-btn hover:text-primary transition-colors" type="button">
                                                <span
                                                    class="material-symbols-outlined text-lg bookmark-icon">bookmark_border</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sm:w-48 sm:h-36 w-full h-48 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                        data-alt="High angle view of a sleek mechanical keyboard with ivory keycaps beside a ceramic mug and a handwritten notebook with clean calligraphy."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuALkAlmKFuXv3LAg9hVokzZIpjZ6xZObu8M3V6ZyaYNFvKst5qFWbroU6synMi1ALob42GJtDkOC9QVeIfQInASz7dn5gG6FFp6JPJLGGXvjB01nREmr0dR9qiw4-NHTISM6q8ZJDPfRLthhpou1mUL2wmfAUBXBLE7Ak7aZt2VrbeV28cJ8O5Y66HiOls0KMGoXDIswM4cYbd6hHxpk__AxXNkzFCIivGXwTxuqa3l_ar_PYwZI0mn" />
                                </div>
                            </article>
                            <!-- Article Item 4 -->
                            <article
                                class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md justify-between">
                                <div class="flex flex-col justify-between gap-space-sm flex-1 min-w-0">
                                    <div class="flex items-center gap-2.5">
                                        <img class="w-6 h-6 rounded-full object-cover"
                                            data-alt="Close headshot of Teguh Wicaksono, senior software engineering lead in a dark tech hoodie in clean monochrome light."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsphgCGw7fOzjvTY9WURa183aSFhzoJjpfkK2o3Y6c_5hREZnbitNTidft2dNiIsQhqWfcmSowALeU-gsW8O4hNVD7Ujex7PcEx3NWk_YHE7vSK5ymb--F9HOTYkXszmD8cfflGhaUw5srkaGkMkhIbjtizKioKkcCv8ZmKEDzylp3UT5qbE4VueE1T-fq5ERAXvCttwBJlIAGuImrkN5x9BZBhb858y3KlRAIj2XR1YMBxPF0XtYZ" />
                                        <span class="font-label-md text-label-md font-semibold text-on-surface">Teguh
                                            Wicaksono</span>
                                        <span class="text-secondary text-xs">•</span>
                                        <span class="font-label-sm text-label-sm text-secondary">Rekayasa • 26 Feb
                                            2025</span>
                                    </div>
                                    <a class="group" href="#">
                                        <h3
                                            class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-2">
                                            Arsitektur Perangkat Lunak Modern: Mengapa Monolith Modular Kembali Diminati
                                        </h3>
                                        <p class="font-body-sm text-body-sm text-secondary line-clamp-2 mt-1.5">
                                            Kelelahan orkestrasi microservices, biaya operasional cloud yang membengkak,
                                            dan efisiensi monolit modular terstruktur untuk tim tangkas.
                                        </p>
                                    </a>
                                    <div class="flex items-center justify-between pt-space-xs">
                                        <div class="flex items-center gap-space-sm flex-wrap">
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Engineering</span>
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Software</span>
                                            <span class="font-label-sm text-label-sm text-secondary">8 mnt baca</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-secondary">
                                            <button aria-label="Beri Tepuk Tangan"
                                                class="clap-btn inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">pan_tool</span>
                                                <span class="clap-count font-label-sm text-label-sm">960</span>
                                            </button>
                                            <button aria-label="Komentar"
                                                class="inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">chat_bubble</span>
                                                <span class="font-label-sm text-label-sm">34</span>
                                            </button>
                                            <button aria-label="Simpan Artikel"
                                                class="bookmark-btn hover:text-primary transition-colors" type="button">
                                                <span
                                                    class="material-symbols-outlined text-lg bookmark-icon">bookmark_border</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sm:w-48 sm:h-36 w-full h-48 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                        data-alt="Abstract architectural photograph of clean brutalist concrete geometric building facade with intricate rhythmic shadow lines under overcast sky."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYscnqL0WWf2Tl-Jsl_UiQsLrSd1OnZZBTZ_3XlgpBvJBh6dL_8rHFWZ8aTzQrH0fE_qt3M7nz5DrTYW9UYPn11PxjPJTZWP-l0SL3V8BtH8zzQdLTEIM1uz2d_9hZZwLWhtBpMGonJgpvHDww1V1gQHUAwJYsUkq646Lly6r1k3_ks1eWMHRBa71y1TQWOfHvGMdpWTyK0yetKeYUwHu22M9qyzJor4xfR7zmsbdrh4u3ZIJvyYYj" />
                                </div>
                            </article>
                            <!-- Article Item 5 -->
                            <article
                                class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md justify-between">
                                <div class="flex flex-col justify-between gap-space-sm flex-1 min-w-0">
                                    <div class="flex items-center gap-2.5">
                                        <img class="w-6 h-6 rounded-full object-cover"
                                            data-alt="Portrait of Sarah Amalia, cultural researcher with silver spectacles and warm thoughtful smile indoors."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL_xuLBsoDP9clJKHwZT4-0fb8D-mMxqiiYsF6l3RMFTbvFPjF4SYld3lep9h8I_SKXZcPMT6ADX4wk6diO9hkxGPbAv-wVj_UDUevfTnITEf7tCE3qLc7RaqVKx3bv52PhQpGWxGBU0yqU6dPZsL7qfNZy25ZkxXO_YX1TIyOI4ZBRq0bfSePAi3xQsLaWMb7qlP9HPjvj7xTdvryQzrrguyr_zL7wZusWzth4cn6RW5xzsndL7WH" />
                                        <span class="font-label-md text-label-md font-semibold text-on-surface">Sarah
                                            Amalia</span>
                                        <span class="text-secondary text-xs">•</span>
                                        <span class="font-label-sm text-label-sm text-secondary">Budaya • 25 Feb
                                            2025</span>
                                    </div>
                                    <a class="group" href="#">
                                        <h3
                                            class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-2">
                                            Evolusi Bahasa dan Identitas Digital di Kalangan Generasi Muda
                                        </h3>
                                        <p class="font-body-sm text-body-sm text-secondary line-clamp-2 mt-1.5">
                                            Bagaimana percampuran slanga global, humor ironis, dan media visual
                                            membentuk lanskap komunikasi baru yang lebih cair namun rentan
                                            miskomunikasi.
                                        </p>
                                    </a>
                                    <div class="flex items-center justify-between pt-space-xs">
                                        <div class="flex items-center gap-space-sm flex-wrap">
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Budaya</span>
                                            <span
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">Masyarakat</span>
                                            <span class="font-label-sm text-label-sm text-secondary">5 mnt baca</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-secondary">
                                            <button aria-label="Beri Tepuk Tangan"
                                                class="clap-btn inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">pan_tool</span>
                                                <span class="clap-count font-label-sm text-label-sm">1.5k</span>
                                            </button>
                                            <button aria-label="Komentar"
                                                class="inline-flex items-center gap-1 hover:text-primary transition-colors text-sm"
                                                type="button">
                                                <span class="material-symbols-outlined text-base">chat_bubble</span>
                                                <span class="font-label-sm text-label-sm">61</span>
                                            </button>
                                            <button aria-label="Simpan Artikel"
                                                class="bookmark-btn hover:text-primary transition-colors" type="button">
                                                <span
                                                    class="material-symbols-outlined text-lg bookmark-icon">bookmark_border</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="sm:w-48 sm:h-36 w-full h-48 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                        data-alt="Artistic double-exposure photograph combining silhouette of young people in urban landscape with abstract typographic glyphs and muted warm sunlight."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDF4p08YxgfaIKjCSRIdIGRiksnB2ByRqR6k3XTvCGdpukhpoGboeeLtA5YLJu5HWQXd45x_iIjisxCKsIqqKhGRcKJYRnVYG1pPtY1gOYC2Qx1ahV3DNnPB16tiIE10qsJpOVyxPFGT8Z9kaRWpShQl-1rnrX3vE0ddhAgc-W_fWAvVS2ZnhXbrE3bWpAS-GaVKkbVmp8DEl5O2A-9bTFo8ykhFAPiK6AbqKvnEVaANV5RVaP4NZME" />
                                </div>
                            </article>
                        </div>
                        <!-- Load More Articles Trigger Button -->
                        <div class="pt-space-md flex justify-center">
                            <button
                                class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-all shadow-sm"
                                id="load-more-btn" type="button">
                                <span>Muat Lebih Banyak Artikel</span>
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </button>
                        </div>
                    </div>
                    <!-- Right Sticky Sidebar Modules (4 Cols) -->
                    <aside class="lg:col-span-4 flex flex-col gap-space-lg lg:sticky lg:top-36">
                        <!-- Widget 1: Topik Populer (Tag Cloud) -->
                        <div
                            class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <h3 class="font-headline-sm text-base font-semibold text-on-surface">Topik Populer</h3>
                                <a class="font-label-sm text-label-sm text-primary hover:underline"
                                    href="#">Jelajahi Semua</a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Kecerdasan Buatan
                                </a>
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Startup
                                </a>
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Desain UI/UX
                                </a>
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Produktivitas
                                </a>
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Finansial
                                </a>
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Teknologi Web
                                </a>
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Sains &amp; Ruang
                                </a>
                                <a class="px-3.5 py-1.5 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm transition-colors"
                                    href="#">
                                    Filsafat Praktis
                                </a>
                            </div>
                        </div>
                        <!-- Widget 2: Penulis yang Layak Diikuti (Who to Follow) -->
                        <div
                            class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <h3 class="font-headline-sm text-base font-semibold text-on-surface">Penulis Terkemuka
                                </h3>
                                <span class="material-symbols-outlined text-secondary text-base">group_add</span>
                            </div>
                            <div class="flex flex-col gap-space-md">
                                <!-- Author 1 -->
                                <div class="flex items-start justify-between gap-3">
                                    <div class="flex items-start gap-3 min-w-0">
                                        <img class="w-10 h-10 rounded-full object-cover flex-shrink-0"
                                            data-alt="Portrait avatar of Dr. Hendra Santoso, academic writer and cognitive psychologist smiling gently in tweed coat."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBvqukClWvQt63Drhwe_CwiVxcuxQ8EtWfQwlU_k6hYj7qopF2bgDn5rAwsPEOTEiVatQOU9jyQ0eCnwFZGi77un0yZ0fiiFxR8mlHcKL8zw6TJKgPuBnGozC2xXG2Qs-yrYt7nSKlwQMtJrpxszAGLh2ro9cSdHp_65OFUHKEjHKeYEQGhur08CLpW3UZI1xRgmu1fZe_MfiLu7sVrSdMBKD4hKciIlmKI742BuxXUL7Iz3DixSaU" />
                                        <div class="min-w-0">
                                            <a class="font-label-md text-label-md font-semibold text-on-surface hover:text-primary truncate block"
                                                href="#">Dr. Hendra Santoso</a>
                                            <p class="font-label-sm text-label-sm text-secondary truncate">Peneliti
                                                Perilaku &amp; Kognisi Manusia</p>
                                        </div>
                                    </div>
                                    <button
                                        class="follow-btn px-4 py-1 rounded-full bg-surface hover:bg-surface-container-high text-on-surface text-xs font-semibold shadow-sm transition-colors flex-shrink-0"
                                        data-following="false" type="button">
                                        Ikuti
                                    </button>
                                </div>
                                <!-- Author 2 -->
                                <div class="flex items-start justify-between gap-3">
                                    <div class="flex items-start gap-3 min-w-0">
                                        <img class="w-10 h-10 rounded-full object-cover flex-shrink-0"
                                            data-alt="Photo of Karina Putri, head of product design with stylish bob haircut and creative minimalist aura."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBS8FGJuuoLsRmXuFthOQcG0Q6LoCT3LmrkX6ZJ03gsxbrrrKII3j5xIM-EemWuvZ7LJwjjqolnsVPVzHmxn0RNM-9vWckdjTYTidC0XPyWoygKNmMw_dKO5RDt5trkOP7JiRjdIlokJW1dJ-mvHPYhE1z_HD7n2xfQ0roKe1ozhUAeVlWeJsBETviWagVFfuFuteszusVbXYyQnWJddqYHN0RKUTosSU4ZBNSMTrph2D56E3kNBpVm" />
                                        <div class="min-w-0">
                                            <a class="font-label-md text-label-md font-semibold text-on-surface hover:text-primary truncate block"
                                                href="#">Karina Putri</a>
                                            <p class="font-label-sm text-label-sm text-secondary truncate">Lead Product
                                                Architect • Essayist</p>
                                        </div>
                                    </div>
                                    <button
                                        class="follow-btn px-4 py-1 rounded-full bg-surface hover:bg-surface-container-high text-on-surface text-xs font-semibold shadow-sm transition-colors flex-shrink-0"
                                        data-following="false" type="button">
                                        Ikuti
                                    </button>
                                </div>
                                <!-- Author 3 -->
                                <div class="flex items-start justify-between gap-3">
                                    <div class="flex items-start gap-3 min-w-0">
                                        <img class="w-10 h-10 rounded-full object-cover flex-shrink-0"
                                            data-alt="Portrait of Reza Firmansyah, Indonesian tech journalist in clean room holding a vintage microphone."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOsLHHSpmf_n1FgtsdyJbC9Bv6Pyh6Zbn_mcs9q4lfsNCK57Ja0zCjXR2VEWpEFH992odR0i5f470_sA0ppxVCx9ZNRUgfOGWDcr_sAlqlyNCJlkfHk1nqt9GbP4qxPe6JPUMaZO5vffQH1PFGeWXSrqCmXQaPDu9fT3M5pX-kvP3jhAwg20UB7EDsyR3jinJXxERylumilZ2QW_cK5_b2a_kYJYltlqcrSmAPGJA1BuGTxsXa48Pr" />
                                        <div class="min-w-0">
                                            <a class="font-label-md text-label-md font-semibold text-on-surface hover:text-primary truncate block"
                                                href="#">Reza Firmansyah</a>
                                            <p class="font-label-sm text-label-sm text-secondary truncate">Jurnalis
                                                Investigasi Digital &amp; AI</p>
                                        </div>
                                    </div>
                                    <button
                                        class="follow-btn px-4 py-1 rounded-full bg-surface hover:bg-surface-container-high text-on-surface text-xs font-semibold shadow-sm transition-colors flex-shrink-0"
                                        data-following="false" type="button">
                                        Ikuti
                                    </button>
                                </div>
                            </div>
                            <a class="font-label-sm text-label-sm text-primary font-semibold hover:underline pt-1 block"
                                href="#">
                                Lihat Semua Rekomendasi Penulis →
                            </a>
                        </div>
                        <!-- Widget 3: Pilihan Redaksi (Staff Picks) -->
                        <div
                            class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center gap-2 text-primary">
                                <span class="material-symbols-outlined text-lg">auto_awesome</span>
                                <h3 class="font-headline-sm text-base font-semibold text-on-surface">Pilihan Redaksi
                                </h3>
                            </div>
                            <div class="flex flex-col gap-space-md">
                                <article class="flex flex-col gap-1.5">
                                    <div class="flex items-center gap-2">
                                        <img class="w-4 h-4 rounded-full object-cover"
                                            data-alt="Author thumbnail headshot of a seasoned literary essayist in vintage studio light."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgTEFd_vfsSH9mPkJ5hQTzJU6Lnugay5Ob9xzsb6HTex0fY-YIRNL4GZd_SKftzaM411TUXjg5L22o2gq-jz9qoViqeS_sxDW3bv3PwmHilntG-kgEtWTvmbrb4UJcsnHg1ZKhXVpL0UYWZmbh5MaoSXVF4Z5n7d9vBCRbqafwXU3o2yfuT7QB9S_4FAFHw_NJSm5PN4JMbphUQYMuG-1pA7QpCX2ochgLX9P1gQx0UIAp84qSgEAX" />
                                        <span class="font-label-sm text-label-sm text-secondary">Bagus Dananjaya</span>
                                    </div>
                                    <a class="font-headline-sm text-sm font-semibold text-on-surface hover:text-primary transition-colors line-clamp-2"
                                        href="#">
                                        Membaca Ulang Pramoedya: Refleksi Kebebasan Berpikir di Abad Informasi
                                    </a>
                                    <span class="font-label-sm text-label-sm text-secondary">4 mnt baca</span>
                                </article>
                                <article class="flex flex-col gap-1.5 pt-2">
                                    <div class="flex items-center gap-2">
                                        <img class="w-4 h-4 rounded-full object-cover"
                                            data-alt="Author avatar of a clean tech enthusiast with glasses."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMGgv5Gq_-RGILyDYdbu9Ce_oxDiEqvmrzVO8oon5TOFaginmXJ0jpKFxny-L9Hh2BhmmP7gJeyTHVVepqBDX1Ci0mwEnZSsIY4vCgONgRvfkNZrk01SVvnvJMwwpUgwC-N7a61v9a-4E_bUIUVx33L1ekEOZI8MnkVFk1jlELfX_D5_QdtM_XLm1Mx6pCrwWN-dyCzBXD36ocHpYY_KhH_qcLLE-62DwedUYe2HI77QeAIKyboUGs" />
                                        <span class="font-label-sm text-label-sm text-secondary">Dina Mariana</span>
                                    </div>
                                    <a class="font-headline-sm text-sm font-semibold text-on-surface hover:text-primary transition-colors line-clamp-2"
                                        href="#">
                                        Urban Farming Skala Apartemen: Menanam Pangan Sendiri di Jakarta
                                    </a>
                                    <span class="font-label-sm text-label-sm text-secondary">6 mnt baca</span>
                                </article>
                            </div>
                        </div>
                        <!-- Reading Newsletter Digest Sign-Up Box -->
                        <div class="p-space-lg rounded-2xl bg-surface-container flex flex-col gap-3">
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Wawasan
                                Mingguan</span>
                            <h4 class="font-headline-sm text-base font-semibold text-on-surface">Surat Kabar Narrativa
                            </h4>
                            <p class="font-body-sm text-body-sm text-secondary">Dapatkan 5 tulisan terpenting setiap
                                Jumat pagi langsung di kotak masuk Anda.</p>
                            <div class="flex flex-col gap-2 pt-1">
                                <input
                                    class="w-full px-4 py-2 rounded-xl bg-surface-container-lowest text-on-surface placeholder:text-secondary font-body-sm text-body-sm focus:outline-none shadow-sm"
                                    placeholder="Alamat email Anda..." type="email" />
                                <button
                                    class="w-full py-2 rounded-xl bg-primary-container hover:bg-primary text-on-primary-container font-label-md text-label-md font-semibold transition-colors shadow-sm"
                                    type="button">
                                    Berlangganan Gratis
                                </button>
                            </div>
                        </div>
                        <!-- Ringkas Auxiliary Links -->
                        <div class="flex flex-wrap gap-x-4 gap-y-1.5 text-secondary font-label-sm text-label-sm px-2">
                            <a class="hover:text-on-surface transition-colors" href="#">Bantuan</a>
                            <a class="hover:text-on-surface transition-colors" href="#">Status</a>
                            <a class="hover:text-on-surface transition-colors" href="#">Karir</a>
                            <a class="hover:text-on-surface transition-colors" href="#">Privasi</a>
                            <a class="hover:text-on-surface transition-colors" href="#">Ketentuan</a>
                            <a class="hover:text-on-surface transition-colors" href="#">Pedoman Komunitas</a>
                            <span class="w-full pt-1 text-xs text-secondary/70">© 2025 Narrativa Platform.</span>
                        </div>
                    </aside>
                </div>
            </div>
            <script>
                (function() {
                    // Tab Filtering Interaction
                    const tabButtons = document.querySelectorAll('.feed-tab-btn');
                    tabButtons.forEach(btn => {
                        btn.addEventListener('click', () => {
                            tabButtons.forEach(b => {
                                b.classList.remove('bg-on-surface', 'text-surface-container-lowest');
                                b.classList.add('bg-surface-container-low', 'text-on-surface-variant');
                            });
                            btn.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
                            btn.classList.add('bg-on-surface', 'text-surface-container-lowest');
                        });
                    });

                    // Interactive Bookmark Toggles
                    const bookmarkBtns = document.querySelectorAll('.bookmark-btn');
                    bookmarkBtns.forEach(btn => {
                        btn.addEventListener('click', (e) => {
                            e.preventDefault();
                            const icon = btn.querySelector('.bookmark-icon');
                            if (icon.textContent === 'bookmark_border') {
                                icon.textContent = 'bookmark';
                                icon.classList.add('text-primary');
                            } else {
                                icon.textContent = 'bookmark_border';
                                icon.classList.remove('text-primary');
                            }
                        });
                    });

                    // Interactive Clap Counts
                    const clapBtns = document.querySelectorAll('.clap-btn');
                    clapBtns.forEach(btn => {
                        let clapped = false;
                        btn.addEventListener('click', (e) => {
                            e.preventDefault();
                            const countSpan = btn.querySelector('.clap-count');
                            let current = parseFloat(countSpan.textContent.replace('k', '')) || 1;
                            if (!clapped) {
                                clapped = true;
                                btn.classList.add('text-primary');
                                countSpan.textContent = countSpan.textContent.includes('k') ?
                                    (current + 0.1).toFixed(1) + 'k' :
                                    (current + 1);
                            }
                        });
                    });

                    // Interactive Follow / Mengikuti Button Toggle
                    const followBtns = document.querySelectorAll('.follow-btn');
                    followBtns.forEach(btn => {
                        btn.addEventListener('click', () => {
                            const isFollowing = btn.getAttribute('data-following') === 'true';
                            if (isFollowing) {
                                btn.setAttribute('data-following', 'false');
                                btn.textContent = 'Ikuti';
                                btn.classList.remove('bg-on-surface', 'text-surface-container-lowest');
                                btn.classList.add('bg-surface', 'text-on-surface');
                            } else {
                                btn.setAttribute('data-following', 'true');
                                btn.textContent = 'Mengikuti';
                                btn.classList.remove('bg-surface', 'text-on-surface');
                                btn.classList.add('bg-on-surface', 'text-surface-container-lowest');
                            }
                        });
                    });

                    // Load More Articles Mock Interaction
                    const loadMoreBtn = document.getElementById('load-more-btn');
                    if (loadMoreBtn) {
                        loadMoreBtn.addEventListener('click', () => {
                            loadMoreBtn.innerHTML =
                                '<span class="material-symbols-outlined animate-spin text-base">progress_activity</span><span>Memuat...</span>';
                            setTimeout(() => {
                                loadMoreBtn.innerHTML = '<span>Semua Artikel Telah Dimuat</span>';
                                loadMoreBtn.disabled = true;
                                loadMoreBtn.classList.add('opacity-60', 'cursor-not-allowed');
                            }, 700);
                        });
                    }
                })();
            </script>
        </div>
    </main>
@endsection
