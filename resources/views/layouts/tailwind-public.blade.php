<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title') - Puskesmas Sehat Utama</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet"/>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary-fixed-dim": "#4edea3",
                    "surface-bright": "#f8f9ff",
                    "on-surface": "#0b1c30",
                    "tertiary-fixed-dim": "#bcc9c6",
                    "on-tertiary-container": "#2f3b39",
                    "secondary-container": "#d5e3fd",
                    "inverse-on-surface": "#eaf1ff",
                    "secondary": "#515f74",
                    "surface-variant": "#d3e4fe",
                    "surface-container": "#e5eeff",
                    "on-secondary-fixed": "#0d1c2f",
                    "secondary-fixed-dim": "#b9c7e0",
                    "primary-fixed": "#6ffbbe",
                    "on-tertiary-fixed": "#121e1c",
                    "on-surface-variant": "#3c4a42",
                    "on-secondary-fixed-variant": "#3a485c",
                    "outline-variant": "#bbcabf",
                    "on-tertiary": "#ffffff",
                    "surface-container-highest": "#d3e4fe",
                    "surface-dim": "#cbdbf5",
                    "inverse-surface": "#213145",
                    "on-tertiary-fixed-variant": "#3d4947",
                    "on-primary": "#ffffff",
                    "background": "#f8f9ff",
                    "on-secondary": "#ffffff",
                    "tertiary-container": "#98a5a3",
                    "on-secondary-container": "#57657b",
                    "outline": "#6c7a71",
                    "on-primary-container": "#00422b",
                    "surface-container-lowest": "#ffffff",
                    "tertiary-fixed": "#d8e5e2",
                    "on-error": "#ffffff",
                    "inverse-primary": "#4edea3",
                    "secondary-fixed": "#d5e3fd",
                    "surface-tint": "#006c49",
                    "surface-container-high": "#dce9ff",
                    "surface-container-low": "#eff4ff",
                    "error": "#ba1a1a",
                    "on-background": "#0b1c30",
                    "primary": "#006c49",
                    "on-primary-fixed": "#002113",
                    "surface": "#f8f9ff",
                    "on-error-container": "#93000a",
                    "tertiary": "#55615f",
                    "primary-container": "#10b981",
                    "error-container": "#ffdad6",
                    "on-primary-fixed-variant": "#005236"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "base": "8px",
                    "container-max": "1280px",
                    "section-gap-desktop": "80px",
                    "grid-gutter": "24px",
                    "section-gap-mobile": "48px"
            },
            "fontFamily": {
                    "headline-lg": ["Manrope"],
                    "display-lg": ["Manrope"],
                    "headline-md": ["Manrope"],
                    "body-md": ["Public Sans"],
                    "headline-lg-mobile": ["Manrope"],
                    "body-lg": ["Public Sans"],
                    "label-md": ["Public Sans"]
            },
            "fontSize": {
                    "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .soft-card-shadow {
            box-shadow: 0 4px 20px -2px rgba(51, 65, 85, 0.05);
        }
        @yield('styles')
    </style>
</head>
<body class="bg-background text-on-surface font-body-md selection:bg-primary-fixed-dim selection:text-on-primary-container">
    <header class="bg-surface-container-lowest dark:bg-on-surface docked full-width top-0 sticky z-50 shadow-sm dark:shadow-none border-b border-outline-variant dark:border-outline">
        <nav class="flex justify-between items-center h-20 px-8 max-w-container-max mx-auto">
            <a href="{{ url('/') }}" class="text-headline-md font-headline-md font-bold text-primary dark:text-primary-fixed-dim">
                Puskesmas Sehat Utama
            </a>
            <div class="hidden md:flex items-center space-x-8 h-full">
                <a class="{{ Request::is('/') ? 'text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim transition-colors' }} font-label-md text-label-md" href="{{ url('/') }}">Beranda</a>
                <a class="{{ Request::is('services') ? 'text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim transition-colors' }} font-label-md text-label-md" href="{{ url('/services') }}">Layanan Medis</a>
                <a class="{{ Request::is('staff') ? 'text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim transition-colors' }} font-label-md text-label-md" href="{{ url('/staff') }}">Staf Medis</a>
                <a class="{{ Request::is('contact') ? 'text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim transition-colors' }} font-label-md text-label-md" href="{{ url('/contact') }}">Kontak</a>
                @auth
                    <a class="{{ Request::is('pasien') ? 'text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1' : 'text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim transition-colors' }} font-label-md text-label-md" href="{{ url('/pasien') }}">Dashboard</a>
                @endauth
            </div>
            
            @auth
                <a href="{{ url('/#booking-section') }}" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md text-label-md active:scale-95 transition-all duration-150 hover:bg-opacity-90">
                    Ambil Antrean
                </a>
            @else
                <a href="{{ url('/LoginPage') }}" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md text-label-md active:scale-95 transition-all duration-150 hover:bg-opacity-90">
                    Login
                </a>
            @endauth
        </nav>
    </header>

    <main class="max-w-container-max mx-auto px-8 py-section-gap-mobile md:py-section-gap-desktop min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-surface-dim dark:bg-inverse-surface border-t border-outline-variant">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-grid-gutter py-section-gap-desktop px-8 max-w-container-max mx-auto">
            <div class="space-y-6">
                <div class="text-headline-md font-headline-md font-bold text-on-surface dark:text-inverse-on-surface">
                    Puskesmas Sehat Utama
                </div>
                <p class="text-on-secondary-container dark:text-secondary-fixed-dim max-w-sm text-body-md font-body-md">
                    Memberikan pelayanan kesehatan primer yang bermutu dan terjangkau bagi seluruh lapisan masyarakat.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all" href="#">
                        <span class="material-symbols-outlined">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all" href="#">
                        <span class="material-symbols-outlined">alternate_email</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all" href="#">
                        <span class="material-symbols-outlined">call</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div class="space-y-4">
                    <h5 class="text-primary dark:text-primary-fixed-dim font-bold text-label-md">Menu</h5>
                    <ul class="space-y-2">
                        <li><a class="text-on-secondary-container dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all text-body-md font-body-md" href="{{ url('/') }}">Beranda</a></li>
                        <li><a class="text-on-secondary-container dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all text-body-md font-body-md" href="{{ url('/services') }}">Layanan Medis</a></li>
                        <li><a class="text-on-secondary-container dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all text-body-md font-body-md" href="{{ url('/staff') }}">Tentang Staf</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h5 class="text-primary dark:text-primary-fixed-dim font-bold text-label-md">Dukungan</h5>
                    <ul class="space-y-2">
                        <li><a class="text-on-secondary-container dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all text-body-md font-body-md" href="#">Bantuan</a></li>
                        <li><a class="text-on-secondary-container dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all text-body-md font-body-md" href="#">Kebijakan Privasi</a></li>
                        <li><a class="text-on-secondary-container dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all text-body-md font-body-md" href="{{ url('/contact') }}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="px-8 max-w-container-max mx-auto py-8 border-t border-outline-variant/30 text-center md:text-left">
            <p class="text-on-secondary-container dark:text-secondary-fixed-dim text-label-md font-label-md opacity-70">
                © 2026 Puskesmas Sehat Utama. Melayani dengan Sepenuh Hati.
            </p>
        </div>
    </footer>
    @yield('scripts')
</body>
</html>
