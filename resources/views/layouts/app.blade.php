<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;1,6..72,400;1,6..72,500&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-container": "#e4e2e1",
                        "tertiary-fixed": "#e4e2e2",
                        "surface-dim": "#dbdad7",
                        "tertiary-fixed-dim": "#c7c6c6",
                        "surface-container-lowest": "#ffffff",
                        "background": "#faf9f6",
                        "on-tertiary": "#ffffff",
                        "tertiary-container": "#767676",
                        "on-primary-container": "#ffffff",
                        "inverse-surface": "#2f312f",
                        "on-tertiary-fixed": "#1b1c1c",
                        "on-surface-variant": "#3f4a3b",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-secondary-fixed": "#1b1c1c",
                        "on-secondary-fixed-variant": "#474746",
                        "surface-container-high": "#e9e8e5",
                        "surface": "#faf9f6",
                        "secondary-fixed": "#e4e2e1",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#ffffff",
                        "primary-fixed": "#90fb7c",
                        "inverse-primary": "#74de63",
                        "primary": "#006e05",
                        "tertiary": "#5d5d5d",
                        "on-tertiary-fixed-variant": "#464747",
                        "secondary": "#5f5e5e",
                        "on-primary": "#ffffff",
                        "on-primary-fixed": "#002200",
                        "surface-bright": "#faf9f6",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#e3e2e0",
                        "surface-tint": "#006e05",
                        "on-primary-fixed-variant": "#005303",
                        "primary-container": "#1a8917",
                        "inverse-on-surface": "#f2f1ee",
                        "error-container": "#ffdad6",
                        "outline-variant": "#becab6",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#e3e2e0",
                        "on-background": "#1a1c1a",
                        "outline": "#6f7a69",
                        "surface-container": "#efeeeb",
                        "on-surface": "#1a1c1a",
                        "on-error-container": "#93000a",
                        "surface-container-low": "#f4f3f1",
                        "primary-fixed-dim": "#74de63",
                        "on-secondary-container": "#656464"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "space-md": "1rem",
                        "margin": "3rem",
                        "space-xs": "0.25rem",
                        "space-xl": "2.5rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem",
                        "margin-mobile": "1.25rem",
                        "gutter-mobile": "1rem",
                        "gutter": "2rem",
                        "space-xxl": "4rem"
                    },
                    "fontFamily": {
                        "body-sm": ["Plus Jakarta Sans"],
                        "body-md": ["Newsreader"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Newsreader"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Newsreader"],
                        "headline-lg": ["Newsreader"],
                        "display-lg-mobile": ["Newsreader"],
                        "display-lg": ["Newsreader"],
                        "headline-sm": ["Newsreader"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "body-lg": ["Newsreader"]
                    },
                    "fontSize": {
                        "body-sm": ["0.9375rem", {
                            "lineHeight": "1.5rem",
                            "fontWeight": "400"
                        }],
                        "body-md": ["1.125rem", {
                            "lineHeight": "1.875rem",
                            "fontWeight": "400"
                        }],
                        "label-md": ["0.8125rem", {
                            "lineHeight": "1.125rem",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "headline-lg-mobile": ["1.75rem", {
                            "lineHeight": "2.25rem",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "500"
                        }],
                        "label-lg": ["0.9375rem", {
                            "lineHeight": "1.25rem",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["1.875rem", {
                            "lineHeight": "2.375rem",
                            "fontWeight": "500"
                        }],
                        "headline-lg": ["2.5rem", {
                            "lineHeight": "3rem",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "400"
                        }],
                        "display-lg-mobile": ["2.25rem", {
                            "lineHeight": "2.75rem",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "400"
                        }],
                        "display-lg": ["3.5rem", {
                            "lineHeight": "4rem",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "400"
                        }],
                        "headline-sm": ["1.375rem", {
                            "lineHeight": "1.75rem",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["0.6875rem", {
                            "lineHeight": "1rem",
                            "letterSpacing": "0.04em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["1.3125rem", {
                            "lineHeight": "2.125rem",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-background font-body-sm text-on-surface antialiased">
    <header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-28 w-full max-w-7xl mx-auto px-gutter-mobile md:px-gutter flex flex-col justify-between">
            <div class="h-16 flex items-center justify-between gap-space-md">
                <div class="flex items-center gap-space-lg"><a
                        class="flex items-center gap-space-sm text-inherit no-underline" data-path="beranda"
                        href="#"><img alt="Narrativa Editorial Logo" class="h-8 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida/AEtjO1WrOEv6hHQtzD1Q04pHEFURbLHgIWNvicYauINvOSRjJZn3qL0322BM6MAVVfJwN_VgH64GkjXjwvKcM87GZZIUymch7YMQee7ECSq3yMApvFqUT_aEXfT1AKgvPVl6xPJ5HRDNJdv1W67ipld_pgl6RB2fYm4dlvUwSbH279BuKmCDDOMUAQHPdFRT_D_497ToYLdrRImow0uVkczDKqVcUk-YXUnwyv4z2_9aLJcma-qORAj5TLTvWXc" /><span
                            class="font-headline-md text-headline-md tracking-tight text-on-surface select-none">Narrativa</span></a>
                    <div class="hidden md:flex items-center relative w-64 lg:w-80"><span
                            class="material-symbols-outlined absolute left-3 text-secondary text-base select-none pointer-events-none">search</span><input
                            class="w-full pl-9 pr-4 py-1.5 rounded-full bg-surface-container-low text-on-surface placeholder:text-secondary font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest transition-colors"
                            placeholder="Cari topik, penulis, atau ide..." type="text" /></div>
                </div>
                <div class="flex items-center gap-space-md lg:gap-space-lg">
                    <nav class="hidden lg:flex items-center gap-space-lg"
                        data-active-classes="text-on-surface font-semibold"><a aria-current="page"
                            class="transition-colors text-on-surface font-semibold" data-path="beranda"
                            href="#">Beranda</a><a
                            class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors"
                            data-path="eksplorasi" href="#">Eksplorasi</a><a
                            class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors"
                            data-path="publikasi-komunitas" href="#">Publikasi</a></nav>
                    <div class="flex items-center gap-space-sm sm:gap-space-md"><a
                            class="hidden sm:inline-flex items-center gap-1.5 font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors px-3 py-1.5 rounded-full"
                            data-path="tulis-cerita" href="#"><span
                                class="material-symbols-outlined text-base">edit_note</span><span>Tulis</span></a><button
                            aria-label="Notifikasi"
                            class="p-2 text-on-surface-variant hover:text-on-surface rounded-full transition-colors"
                            type="button"><span
                                class="material-symbols-outlined text-xl leading-none">notifications</span></button><a
                            class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors px-2 py-1"
                            data-path="masuk" href="#">Masuk</a><a
                            class="inline-flex items-center justify-center rounded-full bg-primary-container text-on-primary-container px-4 py-1.5 font-label-md text-label-md hover:bg-primary transition-colors shadow-[0_1px_4px_rgba(0,0,0,0.06)]"
                            data-path="tulis-cerita" href="#">Mulai Menulis</a><a class="flex items-center ml-1"
                            data-path="pengaturan-profil" href="#"><img alt="Profile"
                                class="w-8 h-8 rounded-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz4qPR9IhgP1j_tppXT5EubdO-6AXQ5XC9Jrl24-IPbxiVbt6LXjWZKfK8ek6cIdNxOGuXc-DHraBXnkgX8FzP9GMK-PHR_87TDsBsjlu-Ppmb85ZZdyE9vPXYUcMS01VgZFBbstSb_mRI0IA4MYZHSYd6rQgtvPpKn29tCxaSkSiMsF4paha9ZvmDuSxMu4rqFQtIuWTDSHMVGfA5hIAlyfDSLRFYrisbGSy0OEJIVCCZkhzxQSqh" /></a>
                    </div>
                </div>
            </div>
            <div class="h-12 flex items-center overflow-x-auto no-scrollbar gap-space-sm pb-1">
                <nav class="flex items-center gap-space-xs whitespace-nowrap"
                    data-active-classes="bg-on-surface text-surface-container-lowest font-medium"><a aria-current="page"
                        class="px-3.5 py-1 rounded-full transition-colors bg-on-surface text-surface-container-lowest font-medium"
                        data-path="beranda" href="#">Semua</a><a
                        class="font-label-md text-label-md px-3.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        data-path="topik-teknologi-ai" href="#">Teknologi &amp; AI</a><a
                        class="font-label-md text-label-md px-3.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        data-path="topik-desain" href="#">Desain</a><a
                        class="font-label-md text-label-md px-3.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        data-path="topik-bisnis-startup" href="#">Bisnis &amp; Startup</a><a
                        class="font-label-md text-label-md px-3.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        data-path="topik-budaya" href="#">Budaya</a><a
                        class="font-label-md text-label-md px-3.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        data-path="topik-produktivitas" href="#">Produktivitas</a><a
                        class="font-label-md text-label-md px-3.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors"
                        data-path="topik-sains" href="#">Sains</a></nav>
            </div>
        </div>
    </header>
    @yield('content')
    <x-footer></x-footer>
</body>

</html>
