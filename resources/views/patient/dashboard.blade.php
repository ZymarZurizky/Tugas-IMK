<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard Overview - Puskesmas Sejahtera</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Public+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      try {
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "background": "#f8f9ff",
                      "surface-container-highest": "#d3e4fe",
                      "surface-container-high": "#dce9ff",
                      "surface-bright": "#f8f9ff",
                      "on-primary-fixed": "#002113",
                      "surface-container": "#e5eeff",
                      "surface": "#f8f9ff",
                      "secondary-container": "#d5e3fd",
                      "outline": "#6c7a71",
                      "on-tertiary": "#ffffff",
                      "on-secondary-fixed-variant": "#3a485c",
                      "on-secondary-container": "#57657b",
                      "surface-tint": "#006c49",
                      "primary-fixed": "#6ffbbe",
                      "on-error": "#ffffff",
                      "tertiary-fixed-dim": "#bcc9c6",
                      "on-secondary-fixed": "#0d1c2f",
                      "surface-dim": "#cbdbf5",
                      "secondary-fixed-dim": "#b9c7e0",
                      "on-tertiary-container": "#2f3b39",
                      "on-primary": "#ffffff",
                      "on-surface": "#0b1c30",
                      "on-primary-container": "#00422b",
                      "surface-container-lowest": "#ffffff",
                      "error": "#ba1a1a",
                      "surface-container-low": "#eff4ff",
                      "primary-fixed-dim": "#4edea3",
                      "on-tertiary-fixed-variant": "#3d4947",
                      "surface-variant": "#d3e4fe",
                      "on-secondary": "#ffffff",
                      "error-container": "#ffdad6",
                      "tertiary-container": "#98a5a3",
                      "secondary": "#515f74",
                      "inverse-primary": "#4edea3",
                      "inverse-surface": "#213145",
                      "secondary-fixed": "#d5e3fd",
                      "primary-container": "#10b981",
                      "on-error-container": "#93000a",
                      "tertiary-fixed": "#d8e5e2",
                      "primary": "#006c49",
                      "outline-variant": "#bbcabf",
                      "on-tertiary-fixed": "#121e1c",
                      "on-surface-variant": "#3c4a42",
                      "tertiary": "#55615f",
                      "inverse-on-surface": "#eaf1ff",
                      "on-background": "#0b1c30",
                      "on-primary-fixed-variant": "#005236"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "section-gap-desktop": "80px",
                      "grid-gutter": "24px",
                      "container-max": "1280px",
                      "base": "8px",
                      "section-gap-mobile": "48px"
              },
              "fontFamily": {
                      "label-md": ["Public Sans"],
                      "headline-lg-mobile": ["Manrope"],
                      "body-lg": ["Public Sans"],
                      "display-lg": ["Manrope"],
                      "body-md": ["Public Sans"],
                      "headline-md": ["Manrope"],
                      "headline-lg": ["Manrope"]
              },
              "fontSize": {
                      "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                      "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                      "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}]
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
        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f8f9ff;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .card-lift {
            transition: transform 0.2s ease, background-color 0.2s ease;
        }
        .card-lift:hover {
            transform: translateY(-2px);
            background-color: #F0FDFA;
        }
    </style>
</head>
<body class="bg-background text-on-background antialiased">
    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    <!-- Sidebar Navigation Shell -->
    <aside class="flex flex-col h-full w-64 fixed left-0 top-0 z-40 p-4 bg-surface-container-low border-r border-outline-variant hidden md:flex">
        <div class="mb-8 px-4">
            <h1 class="text-headline-md font-headline-md font-bold text-primary">Puskesmas Sejahtera</h1>
            <p class="text-label-md font-label-md text-on-surface-variant opacity-70">Community Health Hub</p>
        </div>
        <nav class="flex-1 space-y-2">
            <!-- Active State: Overview -->
            <a class="flex items-center gap-3 bg-secondary-container text-on-secondary-container rounded-lg px-4 py-3 font-bold transition-all" href="{{ url('/Pasien/Dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="text-label-md font-label-md">Overview</span>
            </a>
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all active:translate-x-1" href="{{ url('/Pasien/TransactionHistory') }}">
                <span class="material-symbols-outlined">receipt_long</span>
                <span class="text-label-md font-label-md">Riwayat Transaksi</span>
            </a>
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all active:translate-x-1" href="{{ url('/#booking-section') }}">
                <span class="material-symbols-outlined">calendar_today</span>
                <span class="text-label-md font-label-md">Janji Temu Baru</span>
            </a>
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all active:translate-x-1" href="{{ url('/services') }}">
                <span class="material-symbols-outlined">medical_information</span>
                <span class="text-label-md font-label-md">Layanan Medis</span>
            </a>
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all active:translate-x-1" href="{{ url('/staff') }}">
                <span class="material-symbols-outlined">groups</span>
                <span class="text-label-md font-label-md">Staf Medis</span>
            </a>
        </nav>
        <div class="mt-auto pt-4 border-t border-outline-variant space-y-2">
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all" href="{{ url('/contact') }}">
                <span class="material-symbols-outlined">help</span>
                <span class="text-label-md font-label-md">Hubungi Kami</span>
            </a>
            <a class="flex items-center gap-3 text-error px-4 py-3 hover:bg-error-container rounded-lg transition-all cursor-pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="material-symbols-outlined">logout</span>
                <span class="text-label-md font-label-md">Keluar</span>
            </a>
        </div>
    </aside>

    <!-- Main Content Canvas -->
    <main class="md:ml-64 min-h-screen p-6 md:p-10 pb-24 md:pb-10">
        <!-- Top App Bar / Identity -->
        <header class="flex justify-between items-center w-full mb-10 max-w-container-max mx-auto">
            <div class="md:hidden">
                <h1 class="text-headline-md font-headline-md font-bold text-primary">Puskesmas Sejahtera</h1>
            </div>
            <div class="flex items-center gap-4 ml-auto">
                <div class="flex flex-col text-right hidden sm:block">
                    <span class="font-bold text-on-surface text-sm">{{ Auth::user()->name }}</span>
                    <span class="text-xs text-secondary">NIK: {{ Auth::user()->nik }}</span>
                </div>
                <div class="w-10 h-10 rounded-full border-2 border-primary-container overflow-hidden bg-surface-container-high flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-2xl">person</span>
                </div>
            </div>
        </header>

        <div class="max-w-container-max mx-auto space-y-8">
            <!-- Welcome Banner Section -->
            <section class="relative overflow-hidden rounded-xl bg-primary-container p-8 md:p-12 text-on-primary">
                <div class="relative z-10 max-w-2xl">
                    <h2 class="font-headline-lg text-headline-lg mb-2 text-white">Selamat Datang, {{ Auth::user()->name }}</h2>
                    <p class="font-body-lg text-body-lg opacity-90 mb-6 text-white/90">Tubuh yang sehat adalah investasi terbaik. Jangan lupa untuk rutin meminum air putih setidaknya 2 liter hari ini.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ url('/#booking-section') }}" class="bg-on-primary-container text-white px-6 py-3 rounded-lg font-label-md text-label-md hover:bg-opacity-90 active:scale-95 transition-all block">
                            Ambil Antrean Baru
                        </a>
                        <a href="{{ url('/Pasien/TransactionHistory') }}" class="border border-white/40 bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-lg font-label-md text-label-md hover:bg-white/20 active:scale-95 transition-all block">
                            Lihat Pembayaran
                        </a>
                    </div>
                </div>
            </section>

            <!-- Quick Stats Row -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-6 card-lift shadow-[0px_4px_20px_rgba(51,65,85,0.05)]">
                    <div class="flex items-center gap-4">
                        <div class="bg-primary/10 p-3 rounded-lg text-primary">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">verified_user</span>
                        </div>
                        <div>
                            <p class="text-label-md font-label-md text-on-surface-variant">Status Kesehatan</p>
                            <h3 class="text-headline-md font-headline-md text-primary">Terverifikasi</h3>
                        </div>
                    </div>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-6 card-lift shadow-[0px_4px_20px_rgba(51,65,85,0.05)]">
                    <div class="flex items-center gap-4">
                        <div class="bg-secondary-container p-3 rounded-lg text-secondary">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
                        </div>
                        <div>
                            <p class="text-label-md font-label-md text-on-surface-variant">Total Kunjungan</p>
                            <h3 class="text-headline-md font-headline-md text-on-surface">{{ $totalVisits }} Sesi</h3>
                        </div>
                    </div>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-6 card-lift shadow-[0px_4px_20px_rgba(51,65,85,0.05)]">
                    <div class="flex items-center gap-4">
                        <div class="bg-tertiary-container/20 p-3 rounded-lg text-tertiary">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_today</span>
                        </div>
                        <div>
                            <p class="text-label-md font-label-md text-on-surface-variant">Janji Temu Aktif</p>
                            <h3 class="text-headline-md font-headline-md text-on-surface">{{ $activeQueuesCount }} Tiket</h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Bento Grid Content -->
            <section class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Upcoming Appointment (Large Card) -->
                <div class="lg:col-span-8 bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 flex flex-col md:flex-row gap-8 shadow-[0px_4px_20px_rgba(51,65,85,0.05)] relative overflow-hidden">
                    @if($upcoming)
                        @php
                            $docName = 'Dokter Puskesmas';
                            $docSpec = 'Poli Medis';
                            if ($upcoming->poliklinik === 'Poli Gigi') {
                                $docName = 'drg. Bambang Susilo';
                                $docSpec = 'Spesialis Gigi & Mulut';
                            } elseif ($upcoming->poliklinik === 'Poli KIA') {
                                $docName = 'dr. Indah Lestari';
                                $docSpec = 'Spesialis Kebidanan';
                            } elseif ($upcoming->poliklinik === 'Poli Anak') {
                                $docName = 'dr. Budi Santoso';
                                $docSpec = 'Spesialis Anak';
                            } else {
                                $docName = 'dr. Sarah Wijaya';
                                $docSpec = 'Spesialis Penyakit Dalam';
                            }
                        @endphp
                        <div class="md:w-1/3 flex flex-col items-center text-center space-y-4">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-primary-container/20 bg-surface-container-high flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary text-5xl">person_play</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-headline-md text-on-surface">{{ $docName }}</h4>
                                <p class="text-label-md font-label-md text-primary">{{ $docSpec }}</p>
                            </div>
                        </div>
                        <div class="md:w-2/3 space-y-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="bg-primary/10 text-primary text-[12px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block">Janji Temu Mendatang</span>
                                    <h3 class="font-headline-lg text-headline-lg text-on-surface">Pemeriksaan Rawat Jalan</h3>
                                </div>
                                <div class="text-right">
                                    <p class="text-headline-md font-headline-md text-primary">{{ $upcoming->session === 'Pagi' ? '08:00 - 11:00' : '13:00 - 15:00' }}</p>
                                    <p class="text-label-md font-label-md text-on-surface-variant">{{ \Carbon\Carbon::parse($upcoming->date)->isoFormat('dddd, D MMM Y') }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 border-y border-outline-variant/30 py-6">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-secondary">meeting_room</span>
                                    <div>
                                        <p class="text-[12px] text-on-surface-variant">Layanan Poli</p>
                                        <p class="font-bold text-on-surface">{{ $upcoming->poliklinik }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-secondary">assignment_ind</span>
                                    <div>
                                        <p class="text-[12px] text-on-surface-variant">No. Antrian</p>
                                        <p class="font-bold text-on-surface text-primary">{{ $upcoming->queue_number }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button onclick="printDashboardTicket()" class="flex-1 bg-primary text-white py-3 rounded-lg font-label-md text-label-md hover:bg-opacity-90 active:scale-95 transition-all text-center flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">print</span>
                                    Cetak E-Tiket
                                </button>
                                <a href="{{ url('/Pasien/Dashboard') }}" class="flex-1 border border-primary text-primary py-3 rounded-lg font-label-md text-label-md hover:bg-primary/5 active:scale-95 transition-all text-center flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">refresh</span>
                                    Refresh
                                </a>
                                <a href="{{ url('/#booking-section') }}" class="flex-1 border border-primary text-primary py-3 rounded-lg font-label-md text-label-md hover:bg-primary/5 active:scale-95 transition-all text-center flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">add</span>
                                    Antrean Baru
                                </a>
                            </div>

                            <!-- Hidden Ticket for Printing -->
                            <div id="print-dashboard-ticket-content" class="hidden">
                                <h2 style="font-size: 18px; margin: 5px 0; font-weight: bold; text-align: center;">Puskesmas Sejahtera</h2>
                                <p style="font-size: 11px; color: #666; text-align: center; margin: 0 0 10px 0;">E-Tiket Kunjungan Antrean</p>
                                <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                                <h1 style="font-size: 40px; margin: 10px 0; font-weight: 800; text-align: center; color: #006c49;">{{ $upcoming->queue_number }}</h1>
                                <p style="font-size: 14px; font-weight: bold; text-align: center; margin: 5px 0;">{{ $upcoming->poliklinik }}</p>
                                <p style="font-size: 12px; margin: 4px 0;">Pasien: {{ $upcoming->patient_name }}</p>
                                <p style="font-size: 12px; margin: 4px 0;">NIK: {{ $upcoming->patient_nik }}</p>
                                <p style="font-size: 12px; margin: 4px 0;">Tanggal: {{ \Carbon\Carbon::parse($upcoming->date)->isoFormat('dddd, D MMM Y') }}</p>
                                <p style="font-size: 12px; margin: 4px 0;">Sesi: {{ $upcoming->session }} ({{ $upcoming->session === 'Pagi' ? '08:00-11:00' : '13:00-15:00' }})</p>
                                <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                                <div style="text-align: center; margin: 15px 0;">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data={{ urlencode(route('queues.download-ticket', ['id' => $upcoming->id])) }}" style="width: 120px; height: 120px; border: 1px solid #ccc; padding: 4px; border-radius: 6px;" alt="QR Code">
                                    <p style="font-size: 9px; color: #777; margin-top: 5px; line-height: 1.2;">Scan QR Code di atas menggunakan kamera HP Anda untuk mengunduh E-Tiket ini secara otomatis ke galeri internal Anda.</p>
                                </div>
                                <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                                <p style="font-size: 10px; color: #666; text-align: center;">Harap datang 15 menit sebelum sesi dimulai. Semoga sehat selalu.</p>
                            </div>
                        </div>
                    @else
                        <div class="w-full flex flex-col items-center justify-center text-center p-8 border-2 border-dashed border-outline-variant/40 rounded-xl min-h-[300px]">
                            <span class="material-symbols-outlined text-primary text-5xl mb-4">calendar_today</span>
                            <h4 class="font-headline-md text-headline-md text-on-surface mb-1">Belum Ada Janji Temu Aktif</h4>
                            <p class="text-on-surface-variant text-sm mb-6 max-w-sm">Anda saat ini tidak memiliki nomor antrean atau janji temu aktif untuk hari ini atau mendatang.</p>
                            <a href="{{ url('/#booking-section') }}" class="bg-primary text-white px-6 py-3 rounded-lg font-label-md hover:bg-opacity-90 active:scale-95 transition-all inline-block">Ambil Antrean Sekarang</a>
                        </div>
                    @endif
                </div>

                <!-- Service Shortcuts (Vertical Sidebar in Bento) -->
                <div class="lg:col-span-4 flex flex-col gap-4">
                    <h4 class="font-headline-md text-headline-md text-on-surface mb-2">Akses Cepat</h4>
                    <a href="{{ url('/#booking-section') }}" class="w-full flex items-center justify-between p-5 bg-primary text-white rounded-xl hover:shadow-lg transition-all active:scale-[0.98] block">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-[28px]">add_circle</span>
                            <span class="font-headline-md text-headline-md text-white">Buat Janji Temu</span>
                        </div>
                        <span class="material-symbols-outlined text-white">chevron_right</span>
                    </a>
                    <a href="{{ url('/staff') }}" class="w-full flex items-center justify-between p-5 bg-surface-container-highest text-on-secondary-container rounded-xl hover:shadow-lg transition-all active:scale-[0.98] block">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-[28px]">person_search</span>
                            <span class="font-headline-md text-headline-md">Cari Dokter</span>
                        </div>
                        <span class="material-symbols-outlined">chevron_right</span>
                    </a>
                    <a href="{{ url('/contact') }}" class="w-full flex items-center justify-between p-5 bg-error-container text-on-error-container rounded-xl hover:shadow-lg transition-all active:scale-[0.98] block">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-[28px]">emergency_share</span>
                            <span class="font-headline-md text-headline-md font-bold">Hubungi Kami</span>
                        </div>
                        <span class="material-symbols-outlined">chevron_right</span>
                    </a>
                </div>

                <!-- Recent Activity List -->
                <div class="lg:col-span-12 bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 shadow-[0px_4px_20px_rgba(51,65,85,0.05)]">
                    <div class="flex justify-between items-center mb-6">
                        <h4 class="font-headline-md text-headline-md text-on-surface">Aktivitas Terakhir</h4>
                        <a class="text-primary font-label-md text-label-md hover:underline" href="{{ url('/Pasien/TransactionHistory') }}">Lihat Semua</a>
                    </div>
                    <div class="space-y-4">
                        @forelse($queues->take(3) as $act)
                            <div class="flex items-center justify-between p-4 rounded-lg hover:bg-surface-container-low transition-colors group">
                                <div class="flex items-center gap-4">
                                    @if($act->status === 'completed')
                                        <div class="bg-primary/10 p-2 rounded-full text-primary flex items-center justify-center">
                                            <span class="material-symbols-outlined text-[18px]">receipt_long</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-on-surface">Pemeriksaan Selesai</p>
                                            <p class="text-label-md font-label-md text-on-surface-variant">Layanan Kesehatan - {{ $act->poliklinik }}</p>
                                        </div>
                                    @elseif($act->status === 'skipped')
                                        <div class="bg-error-container/20 p-2 rounded-full text-error flex items-center justify-center">
                                            <span class="material-symbols-outlined text-[18px]">close</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-on-surface">Antrean Dilewati</p>
                                            <p class="text-label-md font-label-md text-on-surface-variant">Jadwal Pemeriksaan Terlewati - {{ $act->poliklinik }}</p>
                                        </div>
                                    @else
                                        <div class="bg-secondary-container/50 p-2 rounded-full text-secondary flex items-center justify-center">
                                            <span class="material-symbols-outlined text-[18px]">edit_calendar</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-on-surface">Pendaftaran Antrean</p>
                                            <p class="text-label-md font-label-md text-on-surface-variant">Menunggu Antrean - {{ $act->poliklinik }}</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="text-right">
                                    @if($act->status === 'completed')
                                        <p class="text-on-surface font-bold">{{ $act->patient_type === 'BPJS' ? 'BPJS (Rp 0)' : 'Rp 50.000' }}</p>
                                    @elseif($act->status === 'skipped')
                                        <p class="text-on-surface-variant text-sm font-semibold">Batal</p>
                                    @else
                                        <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Menunggu</span>
                                    @endif
                                    <p class="text-[12px] text-on-surface-variant mt-1">{{ \Carbon\Carbon::parse($act->date)->isoFormat('D MMM Y') }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-center py-6 text-secondary">Belum ada riwayat aktivitas kunjungan antrean.</p>
                        @endforelse
                    </div>
                </div>
            </section>
        </div>

        <!-- Subtle Footer -->
        <footer class="mt-16 text-center max-w-container-max mx-auto border-t border-outline-variant/30 pt-8 pb-10">
            <p class="text-label-md font-label-md text-on-surface-variant opacity-60">© 2026 Puskesmas Sejahtera. Melayani dengan hati demi kesehatan masyarakat.</p>
        </footer>
    </main>

    <!-- Mobile Navigation Shell (Bottom Bar) -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-surface shadow-[0px_-2px_10px_rgba(0,0,0,0.05)] flex justify-around items-center p-3 z-50">
        <a class="flex flex-col items-center text-primary" href="{{ url('/Pasien/Dashboard') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="text-[10px] font-bold mt-1">Home</span>
        </a>
        <a class="flex flex-col items-center text-on-surface-variant" href="{{ url('/Pasien/TransactionHistory') }}">
            <span class="material-symbols-outlined">receipt_long</span>
            <span class="text-[10px] mt-1">Transaksi</span>
        </a>
        <a class="flex flex-col items-center text-on-surface-variant" href="{{ url('/#booking-section') }}">
            <span class="material-symbols-outlined">calendar_today</span>
            <span class="text-[10px] mt-1">Janji Temu</span>
        </a>
        <a class="flex flex-col items-center text-on-surface-variant cursor-pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="material-symbols-outlined">logout</span>
            <span class="text-[10px] mt-1">Keluar</span>
        </a>
    </nav>

    <script>
        // Micro-interaction for cards
        document.querySelectorAll('.card-lift').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.borderColor = 'rgba(0, 108, 73, 0.2)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.borderColor = 'rgba(187, 202, 191, 0.3)';
            });
        });

        // Print Dashboard Ticket
        function printDashboardTicket() {
            const printContent = document.getElementById('print-dashboard-ticket-content').innerHTML;
            const printWindow = window.open('', '_blank');
            printWindow.document.write(`
                <html>
                <head>
                    <title>Cetak E-Tiket</title>
                    <style>
                        body { font-family: sans-serif; text-align: center; padding: 20px; }
                    </style>
                </head>
                <body onload="window.print(); window.close();">
                    <div style="max-width: 320px; margin: 0 auto; padding: 20px; border: 1px dashed #333; border-radius: 8px;">
                        ${printContent}
                    </div>
                </body>
                </html>
            `);
            printWindow.document.close();
        }
    </script>
</body>
</html>
