@extends('layouts.app')
@section('content')
    <main class="w-full pt-28 bg-background">
        <div class="flex flex-col w-full">
            <div class="w-full max-w-7xl mx-auto px-gutter-mobile md:px-gutter py-space-md lg:py-space-xl">
                <!-- Top Utility Bar -->
                <div class="flex items-center justify-between mb-space-lg">
                    <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-secondary hover:text-on-surface transition-colors py-1"
                        data-path="beranda" href="#">
                        <span class="material-symbols-outlined text-lg">arrow_back</span>
                        <span>Kembali ke Beranda</span>
                    </a>
                    <div class="flex items-center gap-space-md">
                        <span class="font-body-sm text-body-sm text-secondary hidden sm:inline">Perlu bantuan
                            akses?</span>
                        <a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary hover:underline"
                            data-path="bantuan" href="#">
                            <span class="material-symbols-outlined text-base">help_outline</span>
                            <span>Pusat Bantuan</span>
                        </a>
                    </div>
                </div>
                <!-- Editorial Split Card -->
                <div
                    class="grid grid-cols-1 lg:grid-cols-12 rounded-xl bg-surface-container-lowest shadow-md overflow-hidden min-h-[720px]">
                    <!-- Left Column: Editorial Manifesto & Community Proof -->
                    <section
                        class="lg:col-span-5 bg-surface-container-low p-space-lg lg:p-space-xl flex flex-col justify-between relative overflow-hidden">
                        <!-- Subtle Ambient Gradient Spot -->
                        <div
                            class="absolute -top-24 -left-24 w-80 h-80 rounded-full bg-primary/10 blur-3xl pointer-events-none">
                        </div>
                        <div
                            class="absolute -bottom-20 -right-20 w-72 h-72 rounded-full bg-secondary-fixed/40 blur-2xl pointer-events-none">
                        </div>
                        <div class="relative z-10 flex flex-col gap-space-lg">
                            <!-- Monogram & Editorial Identity -->
                            <div class="flex items-center gap-space-sm">
                                <img alt="Narrativa Monogram" class="w-10 h-10 rounded-full object-cover shadow-sm"
                                    src="https://lh3.googleusercontent.com/aida/AEtjO1WrOEv6hHQtzD1Q04pHEFURbLHgIWNvicYauINvOSRjJZn3qL0322BM6MAVVfJwN_VgH64GkjXjwvKcM87GZZIUymch7YMQee7ECSq3yMApvFqUT_aEXfT1AKgvPVl6xPJ5HRDNJdv1W67ipld_pgl6RB2fYm4dlvUwSbH279BuKmCDDOMUAQHPdFRT_D_497ToYLdrRImow0uVkczDKqVcUk-YXUnwyv4z2_9aLJcma-qORAj5TLTvWXc" />
                                <div>
                                    <span
                                        class="font-headline-sm text-headline-sm tracking-tight text-on-surface block">Narrativa</span>
                                    <span
                                        class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Editorial
                                        Sanctum</span>
                                </div>
                            </div>
                            <!-- Literary Quote Hero -->
                            <div class="mt-space-md">
                                <span
                                    class="inline-block px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider mb-space-sm">Gagasan
                                    &amp; Dialog</span>
                                <h1 class="font-headline-lg text-headline-lg text-on-surface leading-tight tracking-tight">
                                    Tuliskan apa yang ingin kamu baca.
                                </h1>
                                <p class="font-body-md text-body-md text-secondary mt-space-sm">
                                    Bagikan perspektif, esai mendalam, dan telaah kritis kepada ratusan ribu pembaca
                                    yang menyukai kedalaman kata di Narrativa.
                                </p>
                            </div>
                            <!-- Community Numbers / Bento Stats -->
                            <div class="grid grid-cols-3 gap-space-sm pt-space-xs">
                                <div class="p-space-sm rounded-DEFAULT bg-surface-container-lowest/80">
                                    <span class="font-headline-sm text-headline-sm text-on-surface block">120rb+</span>
                                    <span class="font-label-sm text-label-sm text-secondary">Penulis aktif</span>
                                </div>
                                <div class="p-space-sm rounded-DEFAULT bg-surface-container-lowest/80">
                                    <span class="font-headline-sm text-headline-sm text-on-surface block">2.5jt+</span>
                                    <span class="font-label-sm text-label-sm text-secondary">Pembaca/bln</span>
                                </div>
                                <div class="p-space-sm rounded-DEFAULT bg-surface-container-lowest/80">
                                    <span class="font-headline-sm text-headline-sm text-primary block">100%</span>
                                    <span class="font-label-sm text-label-sm text-secondary">Bebas iklan liar</span>
                                </div>
                            </div>
                        </div>
                        <!-- Author Testimonial Snippet -->
                        <div
                            class="relative z-10 mt-space-xl p-space-md rounded-DEFAULT bg-surface-container-lowest shadow-sm">
                            <div class="flex items-center gap-space-xs text-primary mb-space-xs">
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-sm"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                            <blockquote class="font-body-sm text-body-sm text-on-surface italic">
                                “Narrativa mengembalikan martabat proses menulis. Di sini, tulisan reflektif menemukan
                                pembacanya yang tepat tanpa algoritma yang melelahkan.”
                            </blockquote>
                            <div class="flex items-center gap-space-sm mt-space-sm pt-space-xs">
                                <img alt="Clarissa Hartono" class="w-10 h-10 rounded-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida/AEtjO1UUbA16XFWVf2JgkumdxwWABx_wutGU0wSjdBpHEnrzwZCjeYuVNzXJCb7UcZgKn6IRCBkoLT85mdXovyXs0sw4RRAnEpwC6K1ranCVziCSyxv5bV1j__w22CRkgTz7xxUdGYzPXo0s7XsjOodnh6jJnhSTyH4-_Ow6GXWhRFQg83_oW1KNvORMrJAvDze8HMrYeHnvdaFq7I56xhSWXxJ4kxEuUFFtd7hxzNhoJJETloFEJwPnO4qiyRM" />
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface font-semibold">Clarissa
                                        Hartono</p>
                                    <p class="font-label-sm text-label-sm text-secondary">Esais Budaya &amp; Direktur
                                        Kreatif</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Right Column: Interactive Authentication Forms -->
                    <section class="lg:col-span-7 p-space-lg lg:p-space-xl flex flex-col justify-center">
                        <div class="max-w-xl w-full mx-auto">
                            <!-- Tab Switcher -->
                            <div aria-label="Pilihan Autentikasi"
                                class="flex items-center p-1 rounded-full bg-surface-container mb-space-lg" role="tablist">
                                <button aria-controls="panel-login" aria-selected="true"
                                    class="flex-1 py-2 rounded-full font-label-md text-label-md transition-all bg-surface-container-lowest text-on-surface shadow-sm font-semibold"
                                    id="tab-login-btn" role="tab" type="button">
                                    Masuk ke Akun
                                </button>
                                <button aria-controls="panel-register" aria-selected="false"
                                    class="flex-1 py-2 rounded-full font-label-md text-label-md transition-all text-secondary hover:text-on-surface"
                                    id="tab-register-btn" role="tab" type="button">
                                    Buat Akun Baru
                                </button>
                            </div>
                            <!-- Quick Single Sign-On (SSO) Options -->
                            <div class="flex flex-col gap-space-sm mb-space-lg">
                                <button
                                    class="w-full flex items-center justify-center gap-space-sm py-2.5 px-4 rounded-full bg-surface-container-low hover:bg-surface-container-high transition-colors font-label-md text-label-md text-on-surface"
                                    type="button">
                                    <svg aria-hidden="true" class="w-4 h-4" viewbox="0 0 24 24">
                                        <path
                                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                            fill="#4285F4"></path>
                                        <path
                                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                            fill="#34A853"></path>
                                        <path
                                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"
                                            fill="#FBBC05"></path>
                                        <path
                                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"
                                            fill="#EA4335"></path>
                                    </svg>
                                    <span>Lanjutkan dengan Google</span>
                                </button>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                                    <button
                                        class="flex items-center justify-center gap-space-sm py-2 px-4 rounded-full bg-surface-container-low hover:bg-surface-container-high transition-colors font-label-md text-label-md text-on-surface"
                                        type="button">
                                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewbox="0 0 24 24">
                                            <path clip-rule="evenodd"
                                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                        <span>GitHub</span>
                                    </button>
                                    <button
                                        class="flex items-center justify-center gap-space-sm py-2 px-4 rounded-full bg-surface-container-low hover:bg-surface-container-high transition-colors font-label-md text-label-md text-on-surface"
                                        type="button">
                                        <span class="material-symbols-outlined text-base">mail</span>
                                        <span>Tautan Email Cepat</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Subtle Divider -->
                            <div class="relative flex items-center justify-center my-space-md">
                                <div class="w-full h-px bg-surface-container-highest"></div>
                                <span
                                    class="absolute bg-surface-container-lowest px-3 font-label-sm text-label-sm text-secondary"
                                    id="divider-text">
                                    atau dengan email terdaftar
                                </span>
                            </div>
                            <!-- PANEL 1: LOGIN FORM -->
                            <div aria-labelledby="tab-login-btn" id="panel-login" role="tabpanel">
                                <form class="space-y-space-md" onsubmit="event.preventDefault();">
                                    <div>
                                        <label class="block font-label-md text-label-md text-on-surface mb-1"
                                            for="login-email">Alamat Email</label>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-lg">mail</span>
                                            <input
                                                class="w-full pl-10 pr-4 py-2.5 rounded-DEFAULT bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest transition-colors"
                                                id="login-email" placeholder="nama@domain.com" required=""
                                                type="email" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between mb-1">
                                            <label class="font-label-md text-label-md text-on-surface"
                                                for="login-password">Kata Sandi</label>
                                            <a class="font-label-sm text-label-sm text-primary hover:underline"
                                                data-path="lupa-sandi" href="#">Lupa kata sandi?</a>
                                        </div>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-lg">lock</span>
                                            <input
                                                class="w-full pl-10 pr-11 py-2.5 rounded-DEFAULT bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest transition-colors"
                                                id="login-password" placeholder="••••••••••••" required=""
                                                type="password" />
                                            <button
                                                class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-on-surface p-1"
                                                onclick="togglePasswordVisibility('login-password', this)" type="button">
                                                <span class="material-symbols-outlined text-lg">visibility</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-1">
                                        <label class="flex items-center gap-2 cursor-pointer select-none">
                                            <input checked=""
                                                class="w-4 h-4 rounded text-primary-container focus:ring-0 accent-primary"
                                                type="checkbox" />
                                            <span class="font-label-md text-label-md text-on-surface">Ingat saya selama
                                                30 hari</span>
                                        </label>
                                        <span class="font-label-sm text-label-sm text-secondary">Aman &amp;
                                            terenkripsi</span>
                                    </div>
                                    <button
                                        class="w-full mt-space-sm py-3 px-6 rounded-full bg-primary-container text-on-primary-container hover:bg-primary transition-colors font-label-lg text-label-lg shadow-sm flex items-center justify-center gap-2"
                                        type="submit">
                                        <span>Masuk ke Narrativa</span>
                                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
                                    </button>
                                    <div class="text-center pt-space-xs">
                                        <p class="font-label-sm text-label-sm text-secondary">
                                            Dengan masuk, Anda menyetujui standar editorial dan privasi pembaca
                                            Narrativa.
                                        </p>
                                    </div>
                                </form>
                            </div>
                            <!-- PANEL 2: REGISTER FORM -->
                            <div aria-labelledby="tab-register-btn" class="hidden" id="panel-register" role="tabpanel">
                                <form class="space-y-space-md" onsubmit="event.preventDefault();">
                                    <div>
                                        <label class="block font-label-md text-label-md text-on-surface mb-1"
                                            for="reg-name">Nama Lengkap atau Nama Pena</label>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-lg">person</span>
                                            <input
                                                class="w-full pl-10 pr-4 py-2.5 rounded-DEFAULT bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest transition-colors"
                                                id="reg-name" placeholder="Contoh: Raden Ayu atau J. Doe" required=""
                                                type="text" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block font-label-md text-label-md text-on-surface mb-1"
                                            for="reg-email">Alamat Email Aktif</label>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-lg">mail</span>
                                            <input
                                                class="w-full pl-10 pr-4 py-2.5 rounded-DEFAULT bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest transition-colors"
                                                id="reg-email" placeholder="penulis@narrativa.id" required=""
                                                type="email" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block font-label-md text-label-md text-on-surface mb-1"
                                            for="reg-password">Kata Sandi Baru</label>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-lg">lock</span>
                                            <input
                                                class="w-full pl-10 pr-11 py-2.5 rounded-DEFAULT bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest transition-colors"
                                                id="reg-password" oninput="checkPasswordStrength(this.value)"
                                                placeholder="Minimal 8 karakter unik" required="" type="password" />
                                            <button
                                                class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-on-surface p-1"
                                                onclick="togglePasswordVisibility('reg-password', this)" type="button">
                                                <span class="material-symbols-outlined text-lg">visibility</span>
                                            </button>
                                        </div>
                                        <!-- Aesthetic Password Strength Bar -->
                                        <div class="mt-2 flex items-center gap-1.5">
                                            <div class="flex-1 h-1 rounded-full bg-surface-container" id="bar-1">
                                            </div>
                                            <div class="flex-1 h-1 rounded-full bg-surface-container" id="bar-2">
                                            </div>
                                            <div class="flex-1 h-1 rounded-full bg-surface-container" id="bar-3">
                                            </div>
                                            <span class="font-label-sm text-label-sm text-secondary ml-1"
                                                id="strength-label">Kekuatan sandi</span>
                                        </div>
                                    </div>
                                    <!-- Topic Interests Preference Selection -->
                                    <div>
                                        <div class="flex items-center justify-between mb-1.5">
                                            <label class="font-label-md text-label-md text-on-surface">Minat Awal /
                                                Topik Favorit</label>
                                            <span class="font-label-sm text-label-sm text-secondary" id="topic-count">0/3
                                                dipilih</span>
                                        </div>
                                        <div class="flex flex-wrap gap-1.5" id="topic-group">
                                            <button
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm hover:bg-surface-container-high transition-colors"
                                                onclick="toggleTopic(this)" type="button">
                                                Teknologi &amp; AI
                                            </button>
                                            <button
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm hover:bg-surface-container-high transition-colors"
                                                onclick="toggleTopic(this)" type="button">
                                                Desain
                                            </button>
                                            <button
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm hover:bg-surface-container-high transition-colors"
                                                onclick="toggleTopic(this)" type="button">
                                                Cerita Pribadi
                                            </button>
                                            <button
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm hover:bg-surface-container-high transition-colors"
                                                onclick="toggleTopic(this)" type="button">
                                                Bisnis &amp; Startup
                                            </button>
                                            <button
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm hover:bg-surface-container-high transition-colors"
                                                onclick="toggleTopic(this)" type="button">
                                                Budaya
                                            </button>
                                            <button
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm hover:bg-surface-container-high transition-colors"
                                                onclick="toggleTopic(this)" type="button">
                                                Sains
                                            </button>
                                            <button
                                                class="px-3 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm hover:bg-surface-container-high transition-colors"
                                                onclick="toggleTopic(this)" type="button">
                                                Produktivitas
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Terms agreement checkbox -->
                                    <div class="pt-1">
                                        <label class="flex items-start gap-2.5 cursor-pointer">
                                            <input
                                                class="mt-0.5 w-4 h-4 rounded text-primary-container focus:ring-0 accent-primary"
                                                required="" type="checkbox" />
                                            <span class="font-body-sm text-body-sm text-secondary">
                                                Saya menyetujui <a class="text-on-surface underline hover:text-primary"
                                                    data-path="syarat-ketentuan" href="#">Ketentuan Layanan</a>
                                                serta <a class="text-on-surface underline hover:text-primary"
                                                    data-path="kebijakan-privasi" href="#">Kebijakan Privasi</a>
                                                Narrativa.
                                            </span>
                                        </label>
                                    </div>
                                    <button
                                        class="w-full mt-space-sm py-3 px-6 rounded-full bg-primary-container text-on-primary-container hover:bg-primary transition-colors font-label-lg text-label-lg shadow-sm flex items-center justify-center gap-2"
                                        type="submit">
                                        <span>Mulai Menulis &amp; Membaca</span>
                                        <span class="material-symbols-outlined text-lg">auto_awesome</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Editorial Trust Footer Bar -->
                <div
                    class="mt-space-lg py-space-sm flex flex-col sm:flex-row items-center justify-between gap-space-sm text-secondary font-label-sm text-label-sm">
                    <div class="flex items-center gap-space-md">
                        <span class="inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-base text-primary">verified_user</span>
                            <span>Protokol Keamanan Tingkat Enkripsi TLS 1.3</span>
                        </span>
                        <span class="hidden md:inline">•</span>
                        <span class="hidden md:inline">Narrativa Literasi Nusantara</span>
                    </div>
                    <div class="flex items-center gap-space-md">
                        <a class="hover:text-on-surface transition-colors" data-path="panduan-kurasi"
                            href="#">Standar Kurasi</a>
                        <a class="hover:text-on-surface transition-colors" data-path="komunitas-penulis"
                            href="#">Jaringan Penulis</a>
                        <a class="hover:text-on-surface transition-colors" data-path="kontak" href="#">Kontak
                            Kami</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Tab Switcher Logic
            const tabLoginBtn = document.getElementById('tab-login-btn');
            const tabRegisterBtn = document.getElementById('tab-register-btn');
            const panelLogin = document.getElementById('panel-login');
            const panelRegister = document.getElementById('panel-register');
            const dividerText = document.getElementById('divider-text');

            function setTab(isLogin) {
                if (isLogin) {
                    tabLoginBtn.classList.add('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm', 'font-semibold');
                    tabLoginBtn.classList.remove('text-secondary');
                    tabLoginBtn.setAttribute('aria-selected', 'true');

                    tabRegisterBtn.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm',
                        'font-semibold');
                    tabRegisterBtn.classList.add('text-secondary');
                    tabRegisterBtn.setAttribute('aria-selected', 'false');

                    panelLogin.classList.remove('hidden');
                    panelRegister.classList.add('hidden');
                    if (dividerText) dividerText.textContent = 'atau dengan email terdaftar';
                } else {
                    tabRegisterBtn.classList.add('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm',
                        'font-semibold');
                    tabRegisterBtn.classList.remove('text-secondary');
                    tabRegisterBtn.setAttribute('aria-selected', 'true');

                    tabLoginBtn.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm',
                        'font-semibold');
                    tabLoginBtn.classList.add('text-secondary');
                    tabLoginBtn.setAttribute('aria-selected', 'false');

                    panelRegister.classList.remove('hidden');
                    panelLogin.classList.add('hidden');
                    if (dividerText) dividerText.textContent = 'atau buat akun dengan surel baru';
                }
            }

            tabLoginBtn.addEventListener('click', () => setTab(true));
            tabRegisterBtn.addEventListener('click', () => setTab(false));

            // Password Visibility Toggle
            function togglePasswordVisibility(inputId, btn) {
                const input = document.getElementById(inputId);
                const icon = btn.querySelector('.material-symbols-outlined');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.textContent = 'visibility_off';
                } else {
                    input.type = 'password';
                    icon.textContent = 'visibility';
                }
            }

            // Aesthetic Password Strength Indicator
            function checkPasswordStrength(val) {
                const b1 = document.getElementById('bar-1');
                const b2 = document.getElementById('bar-2');
                const b3 = document.getElementById('bar-3');
                const label = document.getElementById('strength-label');

                // Reset styles
                b1.className = 'flex-1 h-1 rounded-full bg-surface-container transition-colors';
                b2.className = 'flex-1 h-1 rounded-full bg-surface-container transition-colors';
                b3.className = 'flex-1 h-1 rounded-full bg-surface-container transition-colors';

                if (!val || val.length === 0) {
                    label.textContent = 'Kekuatan sandi';
                    label.className = 'font-label-sm text-label-sm text-secondary ml-1';
                    return;
                }

                if (val.length < 6) {
                    b1.className = 'flex-1 h-1 rounded-full bg-error transition-colors';
                    label.textContent = 'Lemah';
                    label.className = 'font-label-sm text-label-sm text-error ml-1';
                } else if (val.length < 10) {
                    b1.className = 'flex-1 h-1 rounded-full bg-primary-fixed-dim transition-colors';
                    b2.className = 'flex-1 h-1 rounded-full bg-primary-fixed-dim transition-colors';
                    label.textContent = 'Cukup baik';
                    label.className = 'font-label-sm text-label-sm text-on-surface-variant ml-1';
                } else {
                    b1.className = 'flex-1 h-1 rounded-full bg-primary-container transition-colors';
                    b2.className = 'flex-1 h-1 rounded-full bg-primary-container transition-colors';
                    b3.className = 'flex-1 h-1 rounded-full bg-primary-container transition-colors';
                    label.textContent = 'Kuat & Aman';
                    label.className = 'font-label-sm text-label-sm text-primary font-semibold ml-1';
                }
            }

            // Interactive Interest Tags Selection
            let selectedTopics = 0;

            function toggleTopic(btn) {
                const isSelected = btn.dataset.selected === 'true';
                if (!isSelected) {
                    btn.dataset.selected = 'true';
                    btn.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
                    btn.classList.add('bg-on-surface', 'text-surface-container-lowest');
                    selectedTopics++;
                } else {
                    btn.dataset.selected = 'false';
                    btn.classList.remove('bg-on-surface', 'text-surface-container-lowest');
                    btn.classList.add('bg-surface-container-low', 'text-on-surface-variant');
                    selectedTopics--;
                }
                const countEl = document.getElementById('topic-count');
                if (countEl) {
                    countEl.textContent = `${selectedTopics}/3 dipilih`;
                    if (selectedTopics >= 3) {
                        countEl.classList.add('text-primary', 'font-semibold');
                        countEl.classList.remove('text-secondary');
                    } else {
                        countEl.classList.remove('text-primary', 'font-semibold');
                        countEl.classList.add('text-secondary');
                    }
                }
            }
        </script>
    </main>
@endsection
