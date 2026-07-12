@extends('layouts.tailwind-public')

@section('title', 'Layanan Medis')

@section('content')
<!-- Hero Header -->
<div class="mb-16 text-center md:text-left">
    <h1 class="font-display-lg text-display-lg text-on-surface mb-4">Layanan Medis Kami</h1>
    <p class="font-body-lg text-body-lg text-secondary max-w-2xl">
        Kami menyediakan berbagai layanan kesehatan primer terpadu yang didukung oleh tenaga medis berpengalaman, fasilitas modern, serta pelayanan berbasis empati.
    </p>
</div>

<!-- Bento Grid: Services Layout -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-grid-gutter mb-16">
    <!-- Service 1: Poli Umum -->
    <div class="bg-white p-8 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 soft-card-shadow flex flex-col justify-between">
        <div>
            <div class="w-16 h-16 rounded-2xl bg-primary-container/10 flex items-center justify-center text-primary mb-6">
                <span class="material-symbols-outlined text-[36px]">medical_services</span>
            </div>
            <h3 class="font-headline-lg text-headline-lg text-on-surface mb-3">Poliklinik Umum</h3>
            <p class="text-body-md text-secondary mb-6 leading-relaxed">
                Melayani pemeriksaan kesehatan umum, konsultasi medis tingkat pertama, pengobatan penyakit akut/kronis, serta pembuatan surat keterangan sehat medis.
            </p>
            <div class="space-y-4">
                <h4 class="font-bold text-on-surface text-label-md">Fokus Pelayanan:</h4>
                <ul class="space-y-2 text-body-md text-secondary">
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Konsultasi &amp; Diagnosis Medis Dasar
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Pemeriksaan Fisik &amp; Vital Sign
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Rujukan Spesialis Tingkat Lanjut
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-outline-variant/30 flex justify-between items-center text-label-md">
            <div>
                <p class="text-secondary">Dokter Penanggung Jawab:</p>
                <p class="font-bold text-on-surface">Dr. Sarah Wijaya</p>
            </div>
            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-semibold">Aktif</span>
        </div>
    </div>

    <!-- Service 2: Poli Gigi -->
    <div class="bg-white p-8 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 soft-card-shadow flex flex-col justify-between">
        <div>
            <div class="w-16 h-16 rounded-2xl bg-secondary-container/30 flex items-center justify-center text-primary mb-6">
                <span class="material-symbols-outlined text-[36px]">dentistry</span>
            </div>
            <h3 class="font-headline-lg text-headline-lg text-on-surface mb-3">Poliklinik Gigi</h3>
            <p class="text-body-md text-secondary mb-6 leading-relaxed">
                Menyediakan perawatan gigi dan mulut secara komprehensif, mulai dari pembersihan karang gigi, penambalan, pencabutan, hingga edukasi kebersihan gigi.
            </p>
            <div class="space-y-4">
                <h4 class="font-bold text-on-surface text-label-md">Fokus Pelayanan:</h4>
                <ul class="space-y-2 text-body-md text-secondary">
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Pembersihan Karang Gigi (Scaling)
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Penambalan Gigi Berlubang
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Pencabutan &amp; Tindakan Gigi Minor
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-outline-variant/30 flex justify-between items-center text-label-md">
            <div>
                <p class="text-secondary">Dokter Penanggung Jawab:</p>
                <p class="font-bold text-on-surface">Drg. Robert Chen</p>
            </div>
            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-semibold">Aktif</span>
        </div>
    </div>

    <!-- Service 3: Poli KIA -->
    <div class="bg-white p-8 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 soft-card-shadow flex flex-col justify-between">
        <div>
            <div class="w-16 h-16 rounded-2xl bg-tertiary-fixed/30 flex items-center justify-center text-primary mb-6">
                <span class="material-symbols-outlined text-[36px]">pregnant_woman</span>
            </div>
            <h3 class="font-headline-lg text-headline-lg text-on-surface mb-3">Poli Kesehatan Ibu &amp; Anak (KIA)</h3>
            <p class="text-body-md text-secondary mb-6 leading-relaxed">
                Layanan kehamilan (ANC), pendampingan pascamelahirkan (PNC), imunisasi bayi, konsultasi tumbuh kembang anak, serta program Keluarga Berencana (KB).
            </p>
            <div class="space-y-4">
                <h4 class="font-bold text-on-surface text-label-md">Fokus Pelayanan:</h4>
                <ul class="space-y-2 text-body-md text-secondary">
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Pemeriksaan Kandungan Berkala (ANC)
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Pelayanan KB (Suntik, Pil, IUD/Implan)
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Penyuluhan Gizi &amp; Vitamin Ibu
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-outline-variant/30 flex justify-between items-center text-label-md">
            <div>
                <p class="text-secondary">Dokter/Bidan Penanggung Jawab:</p>
                <p class="font-bold text-on-surface">Bdn. Siti Aminah</p>
            </div>
            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-semibold">Aktif</span>
        </div>
    </div>

    <!-- Service 4: Poli Anak -->
    <div class="bg-white p-8 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 soft-card-shadow flex flex-col justify-between">
        <div>
            <div class="w-16 h-16 rounded-2xl bg-error-container/20 flex items-center justify-center text-primary mb-6">
                <span class="material-symbols-outlined text-[36px]">child_care</span>
            </div>
            <h3 class="font-headline-lg text-headline-lg text-on-surface mb-3">Poliklinik Anak</h3>
            <p class="text-body-md text-secondary mb-6 leading-relaxed">
                Menyediakan penanganan medis khusus bayi dan anak, pemantauan status tumbuh kembang, imunisasi dasar lengkap, serta konsultasi nutrisi/gizi anak.
            </p>
            <div class="space-y-4">
                <h4 class="font-bold text-on-surface text-label-md">Fokus Pelayanan:</h4>
                <ul class="space-y-2 text-body-md text-secondary">
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Pengobatan Penyakit Anak &amp; Balita
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Imunisasi Dasar Lengkap Nasional
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                        Konsultasi Nutrisi &amp; Deteksi Stunting
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-outline-variant/30 flex justify-between items-center text-label-md">
            <div>
                <p class="text-secondary">Dokter Penanggung Jawab:</p>
                <p class="font-bold text-on-surface">Dr. Ahmad Hidayat</p>
            </div>
            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-semibold">Aktif</span>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-primary-container/10 p-8 md:p-12 rounded-3xl border border-primary/20 flex flex-col md:flex-row justify-between items-center gap-8 shadow-sm">
    <div class="space-y-2 text-center md:text-left">
        <h3 class="font-headline-lg text-headline-lg text-on-surface">Butuh Konsultasi dengan Dokter Kami?</h3>
        <p class="text-body-md text-secondary max-w-xl">
            Daftarkan diri Anda secara online untuk mengambil nomor antrean pemeriksaan poliklinik secara praktis, tanpa perlu mengantre lama di loket pendaftaran fisik.
        </p>
    </div>
    @auth
        <a href="{{ url('/#booking-section') }}" class="bg-primary text-on-primary px-8 py-4 rounded-xl font-label-md text-label-md hover:bg-opacity-90 active:scale-95 transition-all shadow-md shrink-0">
            Ambil Nomor Antrean
        </a>
    @else
        <a href="{{ url('/LoginPage') }}" class="bg-primary text-on-primary px-8 py-4 rounded-xl font-label-md text-label-md hover:bg-opacity-90 active:scale-95 transition-all shadow-md shrink-0">
            Login / Daftar Sekarang
        </a>
    @endauth
</div>
@endsection
