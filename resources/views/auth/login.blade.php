<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Masuk - Puskesmas Sehat Utama</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Public+Sans:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "secondary-fixed": "#d5e3fd",
                    "surface-container-lowest": "#ffffff",
                    "surface": "#f8f9ff",
                    "on-secondary": "#ffffff",
                    "on-error-container": "#93000a",
                    "tertiary-fixed": "#d8e5e2",
                    "inverse-primary": "#4edea3",
                    "on-tertiary-fixed-variant": "#3d4947",
                    "tertiary": "#55615f",
                    "on-primary": "#ffffff",
                    "outline-variant": "#bbcabf",
                    "surface-dim": "#cbdbf5",
                    "primary-container": "#10b981",
                    "tertiary-container": "#98a5a3",
                    "outline": "#6c7a71",
                    "on-tertiary-container": "#2f3b39",
                    "inverse-surface": "#213145",
                    "on-surface": "#0b1c30",
                    "error-container": "#ffdad6",
                    "on-tertiary": "#ffffff",
                    "secondary-container": "#d5e3fd",
                    "on-secondary-fixed-variant": "#3a485c",
                    "inverse-on-surface": "#eaf1ff",
                    "primary-fixed-dim": "#4edea3",
                    "primary": "#006c49",
                    "on-background": "#0b1c30",
                    "surface-container-high": "#dce9ff",
                    "surface-variant": "#d3e4fe",
                    "secondary-fixed-dim": "#b9c7e0",
                    "on-surface-variant": "#3c4a42",
                    "on-primary-fixed": "#002113",
                    "surface-container-low": "#eff4ff",
                    "on-primary-fixed-variant": "#005236",
                    "error": "#ba1a1a",
                    "on-tertiary-fixed": "#121e1c",
                    "background": "#f8f9ff",
                    "surface-tint": "#006c49",
                    "primary-fixed": "#6ffbbe",
                    "on-secondary-fixed": "#0d1c2f",
                    "on-secondary-container": "#57657b",
                    "secondary": "#515f74",
                    "surface-bright": "#f8f9ff",
                    "on-primary-container": "#00422b",
                    "surface-container-highest": "#d3e4fe",
                    "tertiary-fixed-dim": "#bcc9c6",
                    "on-error": "#ffffff",
                    "surface-container": "#e5eeff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "section-gap-mobile": "48px",
                    "section-gap-desktop": "80px",
                    "container-max": "1280px",
                    "grid-gutter": "24px",
                    "base": "8px"
            },
            "fontFamily": {
                    "headline-lg-mobile": ["Manrope"],
                    "headline-lg": ["Manrope"],
                    "display-lg": ["Manrope"],
                    "body-lg": ["Public Sans"],
                    "label-md": ["Public Sans"],
                    "body-md": ["Public Sans"],
                    "headline-md": ["Manrope"]
            },
            "fontSize": {
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .form-input-focus:focus {
            box-shadow: 0 0 0 2px #006c49;
            border-color: transparent;
        }
    </style>
</head>
<body class="bg-surface text-on-surface selection:bg-primary-fixed-dim selection:text-on-primary-fixed overflow-hidden">
<main class="min-h-screen flex">
    <!-- Left Side: Visual/Welcoming Image -->
    <section class="hidden lg:flex lg:w-1/2 relative bg-primary-container overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDYZje-V8LoDm_0jcpeaf9b_tknOPT9QLpmDl7hk1iPC2xHcdY837eyVE1b25zl4StJDcr79rshp9xQm2_hadBRzmx2ztOsAeDy3bA49KktKTV-BI6JR0TuyG_XYjAz9mbIt1Mn4f8ZvihNTB4vrHP5wORZ1HRNzZzRVRrohKfSJ3JVvq5u7X225uYujUp1iTEALZULOPLhuiCdAgTtLOIZ7RC56WZOMH_EqhYSUVAMLZKjwfEpIDOcPskolhQMVDLBVe7wmuvGBss')">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
            </div>
        </div>
        <div class="relative z-10 p-16 flex flex-col justify-end h-full">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-primary-fixed text-on-primary-fixed rounded-full text-label-md font-label-md mb-4 shadow-sm">Puskesmas Terakreditasi Paripurna</span>
                <h1 class="text-display-lg font-display-lg text-surface-container-lowest leading-tight">
                    Kesehatan Anda Adalah<br/>Prioritas Kami.
                </h1>
                <p class="mt-6 text-body-lg font-body-lg text-surface-container-low max-w-lg">
                    Akses layanan kesehatan digital dengan mudah. Mulai dari pendaftaran antrian hingga rekam medis dalam satu platform yang aman dan terpercaya.
                </p>
            </div>
        </div>
        <div class="absolute top-12 left-12">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-surface-container-lowest flex items-center justify-center rounded-lg shadow-sm">
                    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">medical_services</span>
                </div>
                <span class="text-headline-md font-headline-md text-surface-container-lowest font-bold tracking-tight">Puskesmas Sehat Utama</span>
            </a>
        </div>
    </section>

    <!-- Right Side: Login Form -->
    <section class="w-full lg:w-1/2 flex items-center justify-center p-8 md:p-16 bg-surface-container-lowest overflow-y-auto">
        <div class="w-full max-w-[440px] animate-fade-in py-8">
            <!-- Logo for Mobile -->
            <div class="flex items-center gap-3 mb-12 lg:hidden">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-primary flex items-center justify-center rounded-lg">
                        <span class="material-symbols-outlined text-surface-container-lowest text-[18px]" style="font-variation-settings: 'FILL' 1;">medical_services</span>
                    </div>
                    <span class="text-headline-md font-headline-md text-primary font-bold">Puskesmas Sehat Utama</span>
                </a>
            </div>

            <div class="mb-10">
                <h2 class="text-headline-lg font-headline-lg text-on-surface mb-2">Masuk ke Akun Anda</h2>
                <p class="text-body-md font-body-md text-on-secondary-container">Silakan masukkan detail akun Anda untuk melanjutkan akses layanan kesehatan.</p>
            </div>

            <!-- Error and Success Messages -->
            @if($errors->any())
                <div class="p-4 mb-6 text-sm text-red-800 rounded-xl bg-red-50 border border-red-200" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
            
            @if(session('success'))
                <div class="p-4 mb-6 text-sm text-emerald-800 rounded-xl bg-emerald-50 border border-emerald-200" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Email Input -->
                <div>
                    <label class="block text-label-md font-label-md text-on-surface-variant mb-2" for="email">Alamat Email</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                            <span class="material-symbols-outlined text-[20px]">mail</span>
                        </div>
                        <input class="block w-full pl-11 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg text-body-md font-body-md text-on-surface placeholder:text-outline transition-all duration-200 form-input-focus outline-none" 
                               id="email" 
                               name="email" 
                               placeholder="misal: budi@gmail.com" 
                               type="email" 
                               value="{{ old('email') }}"
                               required 
                               autofocus/>
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-label-md font-label-md text-on-surface-variant" for="password">Kata Sandi</label>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                            <span class="material-symbols-outlined text-[20px]">lock</span>
                        </div>
                        <input class="block w-full pl-11 pr-12 py-3 bg-surface-container-low border border-outline-variant rounded-lg text-body-md font-body-md text-on-surface placeholder:text-outline transition-all duration-200 form-input-focus outline-none" 
                               id="password" 
                               name="password" 
                               placeholder="••••••••" 
                               type="password"
                               required/>
                        <button id="btn-toggle-password" class="absolute inset-y-0 right-0 pr-4 flex items-center text-outline hover:text-primary transition-colors" type="button">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <button class="w-full py-4 bg-primary text-on-primary rounded-xl font-bold text-body-md shadow-lg shadow-primary/20 hover:bg-on-primary-fixed-variant active:scale-[0.98] transition-all duration-200" type="submit">
                    Masuk
                </button>
            </form>

            <div class="mt-10 text-center">
                <p class="text-body-md font-body-md text-on-secondary-container">
                    Belum punya akun? 
                    <a class="text-primary font-bold hover:underline ml-1" href="{{ route('register') }}">Daftar Sekarang</a>
                </p>
            </div>

            <!-- Footer Links -->
            <footer class="mt-20 pt-8 border-t border-outline-variant flex flex-wrap justify-center gap-6">
                <a class="text-label-md font-label-md text-outline hover:text-primary transition-colors" href="#">Bantuan</a>
                <a class="text-label-md font-label-md text-outline hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
                <a class="text-label-md font-label-md text-outline hover:text-primary transition-colors" href="#">Syarat & Ketentuan</a>
            </footer>
        </div>
    </section>
</main>

<script>
    // Micro-interactions for form focus states
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            const icon = input.parentElement.querySelector('.material-symbols-outlined');
            if (icon) icon.style.color = '#006c49';
        });
        input.addEventListener('blur', () => {
            const icon = input.parentElement.querySelector('.material-symbols-outlined');
            if (icon) icon.style.color = '#6c7a71';
        });
    });

    // Password visibility toggle
    const togglePasswordBtn = document.getElementById('btn-toggle-password');
    const passwordInput = document.getElementById('password');
    if (togglePasswordBtn && passwordInput) {
        togglePasswordBtn.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            const icon = togglePasswordBtn.querySelector('.material-symbols-outlined');
            if (icon) {
                icon.textContent = type === 'password' ? 'visibility' : 'visibility_off';
            }
        });
    }

    // Simple entrance animation trigger
    document.addEventListener('DOMContentLoaded', () => {
        const formSection = document.querySelector('.animate-fade-in');
        if (formSection) {
            formSection.classList.add('opacity-0', 'translate-y-4');
            setTimeout(() => {
                formSection.classList.remove('opacity-0', 'translate-y-4');
                formSection.classList.add('transition-all', 'duration-700', 'ease-out', 'opacity-100', 'translate-y-0');
            }, 100);
        }
    });
</script>
</body>
</html>
