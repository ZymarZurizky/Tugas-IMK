<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registrasi - Puskesmas Sejahtera</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Public+Sans:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
      try {
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-secondary": "#ffffff",
                      "primary-fixed-dim": "#4edea3",
                      "secondary": "#515f74",
                      "on-tertiary": "#ffffff",
                      "secondary-fixed-dim": "#b9c7e0",
                      "tertiary-fixed-dim": "#bcc9c6",
                      "on-tertiary-container": "#2f3b39",
                      "on-secondary-fixed-variant": "#3a485c",
                      "on-error": "#ffffff",
                      "error": "#ba1a1a",
                      "primary-container": "#10b981",
                      "surface-container": "#e5eeff",
                      "on-primary-fixed-variant": "#005236",
                      "inverse-on-surface": "#eaf1ff",
                      "on-primary": "#ffffff",
                      "surface-container-high": "#dce9ff",
                      "outline": "#6c7a71",
                      "on-background": "#0b1c30",
                      "on-secondary-container": "#57657b",
                      "tertiary-fixed": "#d8e5e2",
                      "on-error-container": "#93000a",
                      "on-primary-container": "#00422b",
                      "on-tertiary-fixed": "#121e1c",
                      "on-surface-variant": "#3c4a42",
                      "on-secondary-fixed": "#0d1c2f",
                      "primary": "#006c49",
                      "surface-variant": "#d3e4fe",
                      "surface-container-low": "#eff4ff",
                      "surface-container-highest": "#d3e4fe",
                      "surface-container-lowest": "#ffffff",
                      "primary-fixed": "#6ffbbe",
                      "surface-dim": "#cbdbf5",
                      "inverse-surface": "#213145",
                      "secondary-container": "#d5e3fd",
                      "surface": "#f8f9ff",
                      "on-primary-fixed": "#002113",
                      "error-container": "#ffdad6",
                      "background": "#f8f9ff",
                      "secondary-fixed": "#d5e3fd",
                      "outline-variant": "#bbcabf",
                      "inverse-primary": "#4edea3",
                      "surface-tint": "#006c49",
                      "on-surface": "#0b1c30",
                      "surface-bright": "#f8f9ff",
                      "on-tertiary-fixed-variant": "#3d4947",
                      "tertiary-container": "#98a5a3",
                      "tertiary": "#55615f"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "section-gap-desktop": "80px",
                      "container-max": "1280px",
                      "grid-gutter": "24px",
                      "base": "8px",
                      "section-gap-mobile": "48px"
              },
              "fontFamily": {
                      "headline-md": ["Manrope"],
                      "body-lg": ["Public Sans"],
                      "headline-lg": ["Manrope"],
                      "headline-lg-mobile": ["Manrope"],
                      "body-md": ["Public Sans"],
                      "label-md": ["Public Sans"],
                      "display-lg": ["Manrope"]
              },
              "fontSize": {
                      "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                      "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                      "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
              }
            },
          },
        }
      } catch (_e) {}
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
        }
        .form-input-shadow {
            box-shadow: 0 1px 2px 0 rgba(51, 65, 85, 0.05);
        }
        .split-screen-container {
            min-height: 100vh;
            display: flex;
        }
        .hero-overlay {
            background: linear-gradient(to bottom, rgba(0, 108, 73, 0.4) 0%, rgba(11, 28, 48, 0.8) 100%);
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased">
    <main class="split-screen-container">
        <!-- Left Side: Hero Brand Image -->
        <section class="hidden lg:flex lg:w-1/2 relative overflow-hidden items-center justify-center">
            <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDXpM2GpNGRLy-I5yooXTdAeADjOC93n2ZtdZePdOYf-GP_wuCDYmpI7xeDkmcWWHKC4sefUlPQ_qaDlDi5WNRlUt38O0CtdkbIh7TtHO-bAV7PJ5MgZJkA5MYg82rDH3Qe4Q2_AGu6baqWQ-7kgG3_ZYTWkO8gVhbnlOPPc1FKb8JHnZ0mjzcIEcEXEiArzkxVvU9GXZzqPWFRxU_AbKfhatXH8QFlhbY-evkpuha_Xmx-ejsMVwd8OAOI3MdGJB53EnT8BGUwkG0')">
            </div>
            <div class="absolute inset-0 hero-overlay z-10"></div>
            <div class="relative z-20 px-12 max-w-xl">
                <!-- Brand Identity -->
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shadow-lg">
                        <span class="material-symbols-outlined text-white text-3xl" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
                    </div>
                    <h1 class="font-headline-md text-headline-md text-white tracking-tight">Puskesmas Sejahtera</h1>
                </div>
                <h2 class="font-display-lg text-display-lg text-white mb-6">Akses Kesehatan dalam Genggaman Anda</h2>
                <p class="font-body-lg text-body-lg text-white/80 leading-relaxed">
                    Kami hadir untuk memberikan layanan kesehatan primer yang profesional, terpercaya, dan mudah diakses bagi seluruh masyarakat. Bergabunglah sekarang untuk pengalaman layanan kesehatan digital yang mulus.
                </p>
                <div class="mt-12 flex gap-6">
                    <div class="flex items-center gap-2 text-white/90">
                        <span class="material-symbols-outlined text-primary-fixed">verified_user</span>
                        <span class="font-label-md text-label-md">Terverifikasi Kemenkes</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <span class="material-symbols-outlined text-primary-fixed">encrypted</span>
                        <span class="font-label-md text-label-md">Data Terenkripsi</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Right Side: Registration Form -->
        <section class="w-full lg:w-1/2 flex items-center justify-center px-6 py-12 lg:px-24 bg-surface overflow-y-auto">
            <div class="w-full max-w-md my-auto">
                <!-- Mobile Logo -->
                <div class="lg:hidden flex items-center gap-2 mb-10">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-white text-2xl" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
                    </div>
                    <span class="font-headline-md text-headline-md text-primary">Puskesmas Sejahtera</span>
                </div>
                <div class="mb-8">
                    <h3 class="font-headline-lg text-headline-lg text-on-surface mb-2">Buat Akun Baru</h3>
                    <p class="font-body-md text-body-md text-secondary">Lengkapi data diri Anda untuk memulai perjalanan kesehatan yang lebih baik.</p>
                </div>

                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- NIK Input (Required in backend) -->
                    <div class="space-y-1">
                        <label class="block font-label-md text-label-md text-secondary" for="nik">NIK Pasien (16 Digit)</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined">badge</span>
                            </span>
                            <input class="w-full pl-12 pr-4 py-3 bg-white border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none text-on-surface placeholder:text-outline-variant/70 form-input-shadow" 
                                   id="nik" 
                                   name="nik" 
                                   placeholder="Masukkan 16 digit NIK KTP Anda" 
                                   type="text" 
                                   maxlength="16"
                                   oninput="this.value = this.value.replace(/\D/g, '')"
                                   value="{{ old('nik') }}"
                                   required/>
                        </div>
                        @error('nik')
                            <p class="text-error text-[12px] font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Name Input -->
                    <div class="space-y-1">
                        <label class="block font-label-md text-label-md text-secondary" for="name">Nama Lengkap</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined">person</span>
                            </span>
                            <input class="w-full pl-12 pr-4 py-3 bg-white border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none text-on-surface placeholder:text-outline-variant/70 form-input-shadow" 
                                   id="name" 
                                   name="name" 
                                   placeholder="Masukkan nama lengkap Anda" 
                                   type="text"
                                   value="{{ old('name') }}"
                                   required/>
                        </div>
                        @error('name')
                            <p class="text-error text-[12px] font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="space-y-1">
                        <label class="block font-label-md text-label-md text-secondary" for="email">Email</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined">mail</span>
                            </span>
                            <input class="w-full pl-12 pr-4 py-3 bg-white border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none text-on-surface placeholder:text-outline-variant/70 form-input-shadow" 
                                   id="email" 
                                   name="email" 
                                   placeholder="nama@email.com" 
                                   type="email"
                                   value="{{ old('email') }}"
                                   required/>
                        </div>
                        @error('email')
                            <p class="text-error text-[12px] font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Input (Required in backend) -->
                    <div class="space-y-1">
                        <label class="block font-label-md text-label-md text-secondary" for="phone">Nomor HP / Whatsapp</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined">call</span>
                            </span>
                            <input class="w-full pl-12 pr-4 py-3 bg-white border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none text-on-surface placeholder:text-outline-variant/70 form-input-shadow" 
                                   id="phone" 
                                   name="phone" 
                                   placeholder="Contoh: 08123456789" 
                                   type="tel"
                                   value="{{ old('phone') }}"
                                   required/>
                        </div>
                        @error('phone')
                            <p class="text-error text-[12px] font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="space-y-1">
                        <label class="block font-label-md text-label-md text-secondary" for="password">Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
                                <span class="material-symbols-outlined">lock</span>
                            </span>
                            <input class="w-full pl-12 pr-12 py-3 bg-white border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none text-on-surface placeholder:text-outline-variant/70 form-input-shadow" 
                                   id="password" 
                                   name="password" 
                                   placeholder="Minimal 6 karakter" 
                                   type="password"
                                   required/>
                            <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#6c7a71] hover:text-[#006c49] transition-colors" id="btn-toggle-password" type="button">
                                <span class="material-symbols-outlined text-[20px]" id="password-icon">visibility</span>
                            </button>
                        </div>
                        @error('password')
                            <p class="text-error text-[12px] font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button class="w-full py-4 bg-[#006c49] text-white font-headline-md text-headline-md rounded-xl hover:bg-opacity-95 transition-all duration-300 shadow-md flex justify-center items-center gap-2 group mt-6" type="submit">
                        Daftar Sekarang
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </form>

                <!-- Footer Link -->
                <div class="mt-8 text-center">
                    <p class="font-body-md text-body-md text-secondary">
                        Sudah punya akun? 
                        <a class="text-[#006c49] font-bold hover:underline ml-1" href="{{ url('/LoginPage') }}">Masuk di sini</a>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Meta -->
    <footer class="lg:absolute lg:bottom-6 lg:right-6 py-6 lg:py-0 px-6 text-center lg:text-right w-full lg:w-auto">
        <p class="text-secondary/60 text-[12px] font-label-md">
            © 2026 Puskesmas Sejahtera. Professional Community Healthcare.
        </p>
    </footer>

    <script>
        // Password visibility toggle
        (() => {
            const togglePasswordBtn = document.getElementById('btn-toggle-password');
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');

            if (togglePasswordBtn && passwordInput && passwordIcon) {
                togglePasswordBtn.addEventListener('click', () => {
                    const isPassword = passwordInput.type === 'password';
                    passwordInput.type = isPassword ? 'text' : 'password';
                    passwordIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
                });
            }

            // Atmosphere Effect: Light subtle parallax on mouse move for the hero side
            const heroSection = document.querySelector('section.hidden.lg\\:flex');
            const heroImage = heroSection?.querySelector('div[style*="background-image"]');

            if (heroSection && heroImage) {
                heroSection.addEventListener('mousemove', (e) => {
                    const xAxis = (window.innerWidth / 2 - e.pageX) / 50;
                    const yAxis = (window.innerHeight / 2 - e.pageY) / 50;
                    heroImage.style.transform = `scale(1.05) translate(${xAxis}px, ${yAxis}px)`;
                });
                heroImage.style.transition = 'transform 0.1s ease-out';
                heroImage.style.transform = 'scale(1.05)';
            }
        })();
    </script>
</body>
</html>
