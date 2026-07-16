<div class="fixed inset-0 bg-[#f8f9ff] min-h-screen flex flex-col font-body-md text-[#0b1c30] selection:bg-[#10b981] selection:text-white z-[9999] overflow-y-auto pb-8">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700;800&amp;family=Public+Sans:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet"/>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        try {
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "surface-container-low": "#eff4ff",
                            "surface-container-lowest": "#ffffff",
                            "outline": "#6c7a71",
                            "on-primary-fixed": "#002113",
                            "inverse-surface": "#213145",
                            "inverse-on-surface": "#eaf1ff",
                            "on-primary": "#ffffff",
                            "surface-dim": "#cbdbf5",
                            "secondary-container": "#d5e3fd",
                            "on-tertiary-fixed": "#121e1c",
                            "error-container": "#ffdad6",
                            "on-primary-container": "#00422b",
                            "on-error": "#ffffff",
                            "inverse-primary": "#4edea3",
                            "tertiary-container": "#98a5a3",
                            "primary-container": "#10b981",
                            "on-secondary-fixed": "#0d1c2f",
                            "surface-variant": "#d3e4fe",
                            "surface-container-highest": "#d3e4fe",
                            "primary": "#006c49",
                            "primary-fixed-dim": "#4edea3",
                            "on-tertiary-fixed-variant": "#3d4947",
                            "on-background": "#0b1c30",
                            "on-surface-variant": "#3c4a42",
                            "tertiary": "#55615f",
                            "secondary-fixed": "#d5e3fd",
                            "outline-variant": "#bbcabf",
                            "on-secondary-fixed-variant": "#3a485c",
                            "background": "#f8f9ff",
                            "on-surface": "#0b1c30",
                            "error": "#ba1a1a",
                            "surface-container": "#e5eeff",
                            "tertiary-fixed-dim": "#bcc9c6",
                            "secondary-fixed-dim": "#b9c7e0",
                            "surface": "#f8f9ff",
                            "secondary": "#515f74",
                            "surface-tint": "#006c49",
                            "on-error-container": "#93000a",
                            "tertiary-fixed": "#d8e5e2",
                            "on-primary-fixed-variant": "#005236",
                            "on-secondary-container": "#57657b",
                            "surface-container-high": "#dce9ff",
                            "on-tertiary": "#ffffff",
                            "on-secondary": "#ffffff",
                            "primary-fixed": "#6ffbbe",
                            "surface-bright": "#f8f9ff",
                            "on-tertiary-container": "#2f3b39"
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
                            "grid-gutter": "24px",
                            "container-max": "1280px",
                            "base": "8px"
                        },
                        "fontFamily": {
                            "label-md": ["Public Sans"],
                            "display-lg": ["Manrope"],
                            "headline-lg": ["Manrope"],
                            "body-md": ["Public Sans"],
                            "body-lg": ["Public Sans"],
                            "headline-md": ["Manrope"],
                            "headline-lg-mobile": ["Manrope"]
                        },
                        "fontSize": {
                            "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                            "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                            "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                            "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                            "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                            "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                            "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
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
    </style>

    <!-- Main Content -->
    <main class="relative z-10 flex-grow flex items-center justify-center p-6 mt-8">
        <div class="w-full max-w-[440px]">
            <!-- Branding Header -->
            <div class="text-center mb-10">
                <h1 class="font-headline-md text-headline-md text-[#006c49] tracking-tight">Puskesmas Sejahtera</h1>
                <p class="font-label-md text-label-md text-[#3c4a42] mt-1 uppercase tracking-widest">Health Administration Portal</p>
            </div>

            <!-- Login Card -->
            <div class="bg-white login-card rounded-2xl p-8 md:p-10 shadow-sm border border-[#bbcabf]/30 transition-all duration-300">
                <div class="mb-8">
                    <h2 class="font-headline-md text-headline-md text-[#0b1c30] mb-2">Login as Admin</h2>
                    <p class="font-body-md text-body-md text-[#3c4a42]">Access the secure clinic management system.</p>
                </div>

                <form class="space-y-6" wire:submit.prevent="authenticate">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label class="font-label-md text-label-md text-[#0b1c30] block" for="email">Work Email</label>
                        <input class="w-full px-4 py-3.5 bg-[#f8f9ff] border border-[#bbcabf] rounded-lg focus:ring-2 focus:ring-[#006c49] focus:border-[#006c49] outline-none transition-all font-body-md text-[#0b1c30] placeholder:text-[#6c7a71]" 
                               id="email" 
                               name="email" 
                               wire:model="data.email"
                               required 
                               type="email"/>
                        @error('data.email')
                            <p class="text-[#ba1a1a] text-[12px] font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label class="font-label-md text-label-md text-[#0b1c30] block" for="password">Password</label>
                        </div>
                        <div class="relative">
                            <input class="w-full pl-4 pr-12 py-3.5 bg-[#f8f9ff] border border-[#bbcabf] rounded-lg focus:ring-2 focus:ring-[#006c49] focus:border-[#006c49] outline-none transition-all font-body-md text-[#0b1c30]" 
                                   id="password" 
                                   name="password" 
                                   wire:model="data.password"
                                   required 
                                   type="password"/>
                            <button class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#6c7a71] hover:text-[#006c49] transition-colors" id="togglePassword" type="button">
                                <span class="material-symbols-outlined text-[20px]" id="passwordIcon">visibility</span>
                            </button>
                        </div>
                        @error('data.password')
                            <p class="text-[#ba1a1a] text-[12px] font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Login Button -->
                    <button class="w-full bg-[#006c49] text-white font-headline-md text-headline-md py-4 rounded-lg hover:bg-opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-lg shadow-[#006c49]/10" 
                            type="submit"
                            wire:loading.attr="disabled">
                        <span wire:loading.remove class="flex items-center gap-2">
                            Login
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </span>
                        <span wire:loading class="flex items-center gap-2">
                            <span class="material-symbols-outlined animate-spin text-[20px]">progress_activity</span>
                            Authenticating...
                        </span>
                    </button>
                </form>
            </div>

            <!-- Footer Links -->
            <div class="mt-8 text-center space-y-4">
                <p class="font-body-md text-body-md text-[#3c4a42]">
                    Not an administrator? <a class="text-[#006c49] font-bold hover:underline" href="{{ url('/LoginPage') }}">Go to Patient Portal</a>
                </p>
                <div class="flex items-center justify-center gap-6 pt-4 opacity-40">
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px]">language</span>
                        <span class="text-[12px] font-label-md">v2.4.0-Stable</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px]">encrypted</span>
                        <span class="text-[12px] font-label-md">256-bit SSL</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Page Footer -->
    <footer class="relative z-10 w-full py-8 text-center border-t border-[#bbcabf]/30 mt-auto">
        <p class="text-[13px] text-[#3c4a42] font-label-md">
            © 2026 Puskesmas Sejahtera Community Health Hub. All Rights Reserved.
        </p>
    </footer>

    <script>
        // Password visibility toggle
        (() => {
            const toggleBtn = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('passwordIcon');

            if (toggleBtn && passwordInput && passwordIcon) {
                toggleBtn.addEventListener('click', () => {
                    const isPassword = passwordInput.type === 'password';
                    passwordInput.type = isPassword ? 'text' : 'password';
                    passwordIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
                });
            }
        })();
    </script>
</div>
