@extends('layouts.tailwind-public')

@section('title', 'Kontak & Lokasi')

@section('content')
<!-- Hero Header -->
<div class="mb-16">
    <h1 class="font-display-lg text-display-lg text-on-surface mb-4">Hubungi Kami</h1>
    <p class="font-body-lg text-body-lg text-secondary max-w-2xl">
        Kami siap membantu Anda mendapatkan layanan kesehatan terbaik. Temukan lokasi kami, periksa jam operasional, atau kirimkan pertanyaan melalui formulir di bawah ini.
    </p>
</div>

<!-- Main Layout: Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-grid-gutter items-start">
    <!-- Left Column: Location & Contact Info -->
    <div class="lg:col-span-5 space-y-grid-gutter">
        <!-- Quick Info Cards (Bento Style) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Emergency Card -->
            <div class="bg-error-container p-6 rounded-xl border border-error/10">
                <div class="flex items-center gap-3 mb-3 text-on-error-container">
                    <span class="material-symbols-outlined">emergency</span>
                    <span class="font-label-md text-label-md">DARURAT 24 JAM</span>
                </div>
                <p class="font-headline-md text-headline-md text-on-error-container">(021) 555-0199</p>
                <p class="text-label-md text-on-error-container/80 mt-1">Layanan Ambulans Siaga</p>
            </div>
            <!-- Main Phone -->
            <div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant/30 soft-card-shadow">
                <div class="flex items-center gap-3 mb-3 text-primary">
                    <span class="material-symbols-outlined">call</span>
                    <span class="font-label-md text-label-md">TELEPON UTAMA</span>
                </div>
                <p class="font-headline-md text-headline-md text-on-surface">(021) 555-0123</p>
                <p class="text-label-md text-secondary mt-1">Informasi Umum &amp; Janji Temu</p>
            </div>
        </div>

        <!-- Detailed Info List -->
        <div class="bg-surface-container-lowest p-8 rounded-xl border border-outline-variant/30 soft-card-shadow space-y-8">
            <!-- Address -->
            <div class="flex gap-4">
                <div class="bg-tertiary-fixed w-12 h-12 rounded-full flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-on-tertiary-fixed-variant">location_on</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md mb-2">Lokasi</h3>
                    <p class="text-body-md text-secondary">
                        Jl. Sejahtera No. 45, Kebayoran Baru,<br/>
                        Jakarta Selatan, DKI Jakarta 12150
                    </p>
                </div>
            </div>
            <!-- Operational Hours -->
            <div class="flex gap-4">
                <div class="bg-primary-fixed-dim w-12 h-12 rounded-full flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-on-primary-fixed-variant">schedule</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md mb-2">Jam Operasional</h3>
                    <ul class="space-y-1 text-body-md text-secondary">
                        <li class="flex justify-between gap-8">
                            <span>Senin - Jumat</span>
                            <span class="font-semibold text-on-surface">07:00 - 21:00</span>
                        </li>
                        <li class="flex justify-between gap-8">
                            <span>Sabtu</span>
                            <span class="font-semibold text-on-surface">08:00 - 15:00</span>
                        </li>
                        <li class="flex justify-between gap-8">
                            <span>Minggu &amp; Hari Libur</span>
                            <span class="text-error font-semibold">Tutup (Kecuali UGD)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Socials/Email -->
            <div class="flex gap-4">
                <div class="bg-secondary-container w-12 h-12 rounded-full flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-on-secondary-fixed-variant">mail</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md mb-2">Surel Elektronik</h3>
                    <p class="text-body-md text-secondary">layanan@puskesmas-sejahtera.go.id</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Map & Form -->
    <div class="lg:col-span-7 space-y-grid-gutter">
        <!-- Map Placeholder Container -->
        <div class="relative w-full aspect-video md:aspect-[16/9] bg-surface-dim rounded-2xl overflow-hidden border border-outline-variant/30 soft-card-shadow group">
            <div class="absolute inset-0 grayscale opacity-40 group-hover:opacity-60 transition-opacity duration-500 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAR-bmiBWl-O44O9OXKGxCrpshGn7nXJdCRDOMTir0T6dFjEdfiioR-lpPzyoo0M3zqb6ZX9_krO2eeYgLSfg3xjf8xS6cUSDg238bSMcAhv0Mwd0VfORBXh30DPcNCudycLu-3PE0dhq3hI-aNw3MWCw68wCqZZUt8CathjupatRg8jJuwGgxR8KAtHlrI_PfYLGnwo2ZCjdSxKkd50azpmoNuOlqxY2z68XCDUAUIk4lqtxsGI3_5Ju7T4czUHd_cT1dj52iYx54')">
            </div>
            <!-- Marker Overlay -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="flex flex-col items-center">
                    <div class="bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md text-label-md mb-2 shadow-lg scale-100 group-hover:scale-105 transition-transform">
                        Puskesmas Sehat Utama
                    </div>
                    <span class="material-symbols-outlined text-primary text-5xl drop-shadow-md" style="font-variation-settings: 'FILL' 1;">location_on</span>
                </div>
            </div>
            <!-- Map Action -->
            <div class="absolute bottom-4 right-4">
                <button class="bg-surface-container-lowest text-on-surface-variant px-4 py-2 rounded-lg border border-outline-variant font-label-md text-label-md flex items-center gap-2 hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                    Buka di Google Maps
                </button>
            </div>
        </div>

        <!-- Inquiry Form -->
        <div class="bg-surface-container-lowest p-8 md:p-10 rounded-2xl border border-outline-variant/30 soft-card-shadow">
            <h3 class="font-headline-lg text-headline-lg mb-6">Kirim Pesan</h3>
            <form action="#" class="space-y-6" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-label-md text-label-md text-on-surface-variant block" for="full_name">Nama Lengkap</label>
                        <input class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all bg-white" id="full_name" name="full_name" placeholder="Masukkan nama lengkap" type="text"/>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-md text-label-md text-on-surface-variant block" for="email">Alamat Email</label>
                        <input class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all bg-white" id="email" name="email" placeholder="email@contoh.com" type="email"/>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="font-label-md text-label-md text-on-surface-variant block" for="subject">Subjek</label>
                    <select class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all bg-white" id="subject" name="subject">
                        <option>Informasi Layanan</option>
                        <option>Pendaftaran Pasien Baru</option>
                        <option>Kritik &amp; Saran</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="font-label-md text-label-md text-on-surface-variant block" for="message">Pesan Anda</label>
                    <textarea class="w-full p-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all bg-white" id="message" name="message" placeholder="Tuliskan pesan Anda secara detail..." rows="4"></textarea>
                </div>
                <button class="w-full md:w-auto bg-primary text-on-primary px-10 py-4 rounded-lg font-label-md text-label-md hover:bg-opacity-90 active:scale-95 transition-all flex items-center justify-center gap-2" type="submit">
                    Kirim Pesan Sekarang
                    <span class="material-symbols-outlined text-body-md">send</span>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Simple micro-interaction for form submission
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = e.target.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[16px] leading-none">progress_activity</span> Mengirim...';
        
        setTimeout(() => {
            btn.innerHTML = '<span class="material-symbols-outlined text-[16px] leading-none">check_circle</span> Terkirim!';
            btn.classList.replace('bg-primary', 'bg-tertiary-container');
            e.target.reset();
            
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.replace('bg-tertiary-container', 'bg-primary');
                btn.disabled = false;
            }, 3000);
        }, 1500);
    });
</script>
@endsection
