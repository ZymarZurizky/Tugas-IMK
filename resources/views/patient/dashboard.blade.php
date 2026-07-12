<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard Pasien - Puskesmas Sejahtera</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Public+Sans:wght@400;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@100..900&family=Public+Sans:wght@100..900&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      try {
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-error": "#ffffff",
                      "tertiary-fixed": "#d8e5e2",
                      "surface-container": "#e5eeff",
                      "on-secondary-container": "#57657b",
                      "tertiary-fixed-dim": "#bcc9c6",
                      "on-tertiary-container": "#2f3b39",
                      "secondary": "#515f74",
                      "surface-dim": "#cbdbf5",
                      "surface-container-low": "#eff4ff",
                      "on-surface-variant": "#3c4a42",
                      "on-primary": "#ffffff",
                      "primary-container": "#10b981",
                      "on-background": "#0b1c30",
                      "on-tertiary": "#ffffff",
                      "primary-fixed-dim": "#4edea3",
                      "on-surface": "#0b1c30",
                      "surface-tint": "#006c49",
                      "on-tertiary-fixed": "#121e1c",
                      "on-primary-fixed-variant": "#005236",
                      "on-primary-container": "#00422b",
                      "secondary-container": "#d5e3fd",
                      "outline-variant": "#bbcabf",
                      "surface-container-highest": "#d3e4fe",
                      "surface": "#f8f9ff",
                      "surface-container-high": "#dce9ff",
                      "error-container": "#ffdad6",
                      "on-secondary-fixed": "#0d1c2f",
                      "surface-container-lowest": "#ffffff",
                      "on-tertiary-fixed-variant": "#3d4947",
                      "secondary-fixed-dim": "#b9c7e0",
                      "primary-fixed": "#6ffbbe",
                      "on-primary-fixed": "#002113",
                      "secondary-fixed": "#d5e3fd",
                      "primary": "#006c49",
                      "on-error-container": "#93000a",
                      "surface-bright": "#f8f9ff",
                      "on-secondary-fixed-variant": "#3a485c",
                      "on-secondary": "#ffffff",
                      "outline": "#6c7a71",
                      "tertiary": "#55615f",
                      "surface-variant": "#d3e4fe",
                      "error": "#ba1a1a",
                      "inverse-primary": "#4edea3",
                      "tertiary-container": "#98a5a3",
                      "background": "#f8f9ff",
                      "inverse-surface": "#213145",
                      "inverse-on-surface": "#eaf1ff"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "section-gap-mobile": "48px",
                      "container-max": "1280px",
                      "base": "8px",
                      "grid-gutter": "24px",
                      "section-gap-desktop": "80px"
              },
              "fontFamily": {
                      "display-lg": ["Manrope"],
                      "label-md": ["Public Sans"],
                      "headline-md": ["Manrope"],
                      "body-lg": ["Public Sans"],
                      "headline-lg-mobile": ["Manrope"],
                      "headline-lg": ["Manrope"],
                      "body-md": ["Public Sans"]
              },
              "fontSize": {
                      "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                      "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                      "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
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
        .active-nav {
            background-color: #006c49;
            color: white;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex overflow-hidden">
    
    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    <!-- Sidebar (Asymmetric & Professional) -->
    <aside class="hidden md:flex flex-col w-72 bg-surface-container-lowest border-r border-outline-variant h-screen sticky top-0 z-40 p-6">
        <div class="mb-10">
            <h1 class="text-headline-md font-headline-md font-extrabold text-primary">Puskesmas Sejahtera</h1>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl active-nav transition-all duration-200" href="{{ url('/pasien') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-md text-label-md">Overview</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-all duration-200" href="{{ url('/#booking-section') }}">
                <span class="material-symbols-outlined">calendar_today</span>
                <span class="font-label-md text-label-md">Janji Temu</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-all duration-200" href="{{ url('/services') }}">
                <span class="material-symbols-outlined">medical_information</span>
                <span class="font-label-md text-label-md">Layanan Medis</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-all duration-200" href="{{ url('/staff') }}">
                <span class="material-symbols-outlined">group</span>
                <span class="font-label-md text-label-md">Staf Medis</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-secondary hover:bg-surface-container transition-all duration-200" href="{{ url('/contact') }}">
                <span class="material-symbols-outlined">contact_support</span>
                <span class="font-label-md text-label-md">Hubungi Kami</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-error hover:bg-error-container/20 transition-all duration-200 cursor-pointer" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="material-symbols-outlined text-error">logout</span>
                <span class="font-label-md text-label-md text-error">Keluar</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 border-t border-outline-variant">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-secondary-container overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1S7_RB57-TYyeLqiQP8Z-806SmLqDf4aZ9DuKhnZIAjYz8KFOOcNx7kcsF4_0n7WhNYpOQt6Zqaj-dt8qSvNNBBMvpWYbkcrXqw2Nw4esMTrv87FbggNwK9b2EOUHmLrqeGJYPyel6mzqNLOuFN2Ay8vbLLH7EguwjDCnvqqcm_SWuskmXfGXsvI6DNNFqzYay9IuvMBJmEyj_DnY3WlsZdCrzx6ILbUg2JrpxUxmFYCQB_ulidyFLtDL0zLjN0EuYWZCg3SSJxU"/>
                </div>
                <div>
                    <p class="font-label-md text-label-md text-on-surface">{{ Auth::user()->name }}</p>
                    <p class="text-[12px] text-secondary">NIK: {{ Auth::user()->nik }}</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto bg-surface-container-low h-screen pb-24 md:pb-8">
        <!-- Header -->
        <header class="h-20 px-8 flex items-center justify-between sticky top-0 bg-surface-container-lowest/80 backdrop-blur-md z-30 border-b border-outline-variant/30">
            <div>
                <h2 class="text-headline-md font-headline-md text-on-surface">Halo, {{ Auth::user()->name }}</h2>
                <p class="text-body-md text-secondary">Selamat datang kembali di portal kesehatan Anda.</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
                <a href="{{ url('/#booking-section') }}" class="bg-primary text-white px-6 py-2 rounded-full font-label-md text-label-md hover:bg-surface-tint active:scale-95 transition-all text-center">
                    Janji Temu Baru
                </a>
            </div>
        </header>

        <div class="p-8 max-w-container-max mx-auto space-y-grid-gutter">
            <!-- Summary Bento Grid -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-grid-gutter">
                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm flex items-center gap-4 group hover:border-primary transition-colors">
                    <div class="w-12 h-12 bg-primary-container/10 rounded-xl flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">group</span>
                    </div>
                    <div>
                        <p class="text-secondary text-label-md">Total Kunjungan</p>
                        <h3 class="text-headline-md font-headline-md">{{ $totalVisits }}</h3>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm flex items-center gap-4 group hover:border-primary transition-colors">
                    <div class="w-12 h-12 bg-primary-container/10 rounded-xl flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <div>
                        <p class="text-secondary text-label-md">Total Transaksi</p>
                        <h3 class="text-headline-md font-headline-md">{{ $totalSpentFormatted }}</h3>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm flex items-center gap-4 group hover:border-primary transition-colors">
                    <div class="w-12 h-12 bg-primary-container/10 rounded-xl flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">event_available</span>
                    </div>
                    <div>
                        <p class="text-secondary text-label-md">Janji Temu Aktif</p>
                        <h3 class="text-headline-md font-headline-md">{{ $activeQueuesCount }}</h3>
                    </div>
                </div>
            </section>

            <!-- Main Split Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-grid-gutter items-start">
                
                <!-- Left: Transaction History & Medical Activities -->
                <section class="lg:col-span-2 space-y-6">
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden shadow-sm">
                        <div class="p-6 border-b border-outline-variant flex justify-between items-center">
                            <h3 class="text-headline-md font-headline-md text-on-surface">Riwayat Kunjungan &amp; Transaksi</h3>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="bg-surface-container-low">
                                    <tr>
                                        <th class="px-6 py-4 text-label-md text-secondary uppercase tracking-wider">Tanggal</th>
                                        <th class="px-6 py-4 text-label-md text-secondary uppercase tracking-wider">Layanan Poliklinik</th>
                                        <th class="px-6 py-4 text-label-md text-secondary uppercase tracking-wider">Nomor Tiket</th>
                                        <th class="px-6 py-4 text-label-md text-secondary uppercase tracking-wider">Biaya Mandiri</th>
                                        <th class="px-6 py-4 text-label-md text-secondary uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-4 text-label-md text-secondary uppercase tracking-wider">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-outline-variant">
                                    @forelse($queues as $q)
                                        <tr class="hover:bg-slate-50 transition-colors">
                                            <td class="px-6 py-4 text-body-md">{{ \Carbon\Carbon::parse($q->date)->isoFormat('D MMM Y') }}</td>
                                            <td class="px-6 py-4">
                                                <div class="flex flex-col">
                                                    <span class="text-on-surface font-semibold">{{ $q->poliklinik }}</span>
                                                    <span class="text-secondary text-[12px]">Jalur {{ $q->patient_type }}</span>
                                                </div>
                                                <!-- Hidden Printable Ticket -->
                                                <div id="print-ticket-{{ $q->id }}" class="hidden">
                                                    <h2 style="font-size: 18px; margin: 5px 0; font-weight: bold; text-align: center;">Puskesmas Sejahtera</h2>
                                                    <p style="font-size: 11px; color: #666; text-align: center; margin: 0 0 10px 0;">Tiket Antrean Online</p>
                                                    <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                                                    <h1 style="font-size: 40px; margin: 10px 0; font-weight: 800; text-align: center;">{{ $q->queue_number }}</h1>
                                                    <p style="font-size: 14px; font-weight: bold; text-align: center; margin: 5px 0;">{{ $q->poliklinik }}</p>
                                                    <p style="font-size: 12px; margin: 4px 0; text-align: left;">Pasien: {{ $q->patient_name }}</p>
                                                    <p style="font-size: 12px; margin: 4px 0; text-align: left;">NIK: {{ $q->patient_nik }}</p>
                                                    <p style="font-size: 12px; margin: 4px 0; text-align: left;">Tanggal: {{ \Carbon\Carbon::parse($q->date)->isoFormat('dddd, D MMM Y') }}</p>
                                                    <p style="font-size: 12px; margin: 4px 0; text-align: left;">Sesi: {{ $q->session }}</p>
                                                    <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                                                    <p style="font-size: 10px; color: #666; text-align: center;">Tunjukkan tiket ini atau sebutkan nomor antrean saat check-in.</p>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-body-md font-mono text-secondary">{{ $q->queue_number }}</td>
                                            <td class="px-6 py-4 text-body-md font-semibold text-on-surface">
                                                {{ $q->patient_type === 'BPJS' ? 'Rp 0' : 'Rp 50.000' }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($q->status === 'pending')
                                                    <span class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-[12px] font-bold">Menunggu</span>
                                                @elseif($q->status === 'calling')
                                                    <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-[12px] font-bold animate-pulse">Dipanggil</span>
                                                @elseif($q->status === 'completed')
                                                    <span class="px-3 py-1 bg-primary-container/20 text-on-primary-container rounded-full text-[12px] font-bold">Berhasil</span>
                                                @else
                                                    <span class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-[12px] font-bold">Terlewati</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                <button onclick="printTicket({{ $q->id }})" class="text-primary hover:text-primary-fixed-dim font-bold flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-[18px]">print</span>
                                                    Cetak
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-6 py-8 text-center text-secondary">Belum ada riwayat kunjungan antrean.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Recent Activity Timeline -->
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant p-6 shadow-sm">
                        <h3 class="text-headline-md font-headline-md text-on-surface mb-6">Aktivitas Medis Terkini</h3>
                        <div class="relative pl-8 space-y-8 before:content-[''] before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-outline-variant">
                            @php $activities = $queues->take(3); @endphp
                            @forelse($activities as $act)
                                <div class="relative">
                                    <div class="absolute -left-[27px] top-1 w-4 h-4 rounded-full {{ $act->status === 'completed' ? 'bg-primary ring-4 ring-primary/10' : 'bg-amber-500 ring-4 ring-amber-500/10' }}"></div>
                                    <div class="flex flex-col">
                                        <span class="text-label-md font-label-md {{ $act->status === 'completed' ? 'text-primary' : 'text-amber-600' }}">
                                            {{ \Carbon\Carbon::parse($act->date)->isoFormat('D MMMM Y') }} (Sesi {{ $act->session }})
                                        </span>
                                        <p class="text-on-surface font-semibold">Pendaftaran di {{ $act->poliklinik }} - {{ $act->status === 'completed' ? 'Selesai' : 'Aktif' }}</p>
                                        <p class="text-body-md text-secondary">Nomor tiket antrean: <span class="font-mono font-bold">{{ $act->queue_number }}</span> untuk pasien {{ $act->patient_name }}.</p>
                                    </div>
                                </div>
                            @empty
                                <p class="text-secondary text-body-md">Belum ada aktivitas medis terbaru.</p>
                            @endforelse
                        </div>
                    </div>
                </section>

                <!-- Right: Quick Actions & Widgets -->
                <aside class="space-y-grid-gutter">
                    <!-- Quick Actions -->
                    <div class="bg-primary p-6 rounded-2xl text-white shadow-lg shadow-primary/20">
                        <h4 class="text-headline-md font-headline-md mb-2">Butuh Bantuan?</h4>
                        <p class="text-body-md text-white/80 mb-6">Pesan janji temu baru atau unduh bukti transaksi Anda dengan cepat.</p>
                        <div class="space-y-3">
                            <a href="{{ url('/#booking-section') }}" class="w-full flex items-center justify-between bg-white text-primary p-4 rounded-xl transition-all group hover:bg-surface-container-low shadow-md">
                                <span class="flex items-center gap-3">
                                    <span class="material-symbols-outlined">add_circle</span>
                                    <span class="font-label-md">Janji Temu Baru</span>
                                </span>
                                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">chevron_right</span>
                            </a>
                        </div>
                    </div>

                    <!-- Health Tip Card -->
                    <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-symbols-outlined text-primary">lightbulb</span>
                            <h4 class="font-headline-md text-on-surface">Tips Kesehatan</h4>
                        </div>
                        <div class="aspect-video mb-4 rounded-xl overflow-hidden relative group">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkZ4joeqyai-owrWKvQbuq-cctqA7HCLYeShDTvRrEUvlsZkrH3kwQQRIumZmC7e7kBg-foqYyY1__1yoiXpKubqC-uIBuHkU4nhxLJV5nN9nvdusqbZPsYFAL_B4KOgwx-7F0Bvoy11sxrhnRRry2Fdnxqh8XxAI1zuiLUJvY63R27sOUSAN15iseEVKuOpaE4CJmiWyFmfee0s74_ZqRG3AdohOBB7DnjMNGFT21dPUzlZWqgH0yds5W4zKMBr7cQMSjOLJ_HMs"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <p class="text-white text-label-md">Pentingnya Serat</p>
                            </div>
                        </div>
                        <p class="text-body-md text-secondary mb-4">Konsumsi sayuran hijau setidaknya 3 kali sehari untuk menjaga kesehatan pencernaan Anda.</p>
                    </div>

                    <!-- Hospital Info -->
                    <div class="bg-secondary-container p-6 rounded-2xl border border-outline-variant">
                        <h4 class="font-headline-md text-on-secondary-container mb-4">Informasi Layanan</h4>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-on-secondary-container">call</span>
                                <div>
                                    <p class="text-label-md font-bold text-on-secondary-container">Darurat (24 Jam)</p>
                                    <p class="text-body-md text-on-secondary-container/80">(021) 555-0123</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-on-secondary-container">schedule</span>
                                <div>
                                    <p class="text-label-md font-bold text-on-secondary-container">Jam Operasional</p>
                                    <p class="text-body-md text-on-secondary-container/80">Senin - Sabtu: 08:00 - 20:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <!-- Footer (Shared Component) -->
            <footer class="mt-section-gap-desktop py-12 border-t border-outline-variant">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-grid-gutter max-w-container-max mx-auto">
                    <div class="space-y-4">
                        <h3 class="text-headline-md font-headline-md font-bold text-on-surface">Puskesmas Sejahtera</h3>
                        <p class="text-body-md text-secondary">Melayani dengan Sepenuh Hati. Pusat layanan kesehatan komunitas yang modern, terjangkau, dan berkualitas.</p>
                        <p class="text-body-md text-secondary font-bold">© 2026 Puskesmas Sejahtera. Semua Hak Dilindungi.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-bold text-on-surface mb-3">Tautan Cepat</p>
                            <ul class="space-y-2">
                                <li><a class="text-secondary hover:text-primary transition-colors text-body-md" href="{{ url('/services') }}">Layanan</a></li>
                                <li><a class="text-secondary hover:text-primary transition-colors text-body-md" href="{{ url('/contact') }}">Hubungi Kami</a></li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-bold text-on-surface mb-3">Staf Medis</p>
                            <ul class="space-y-2">
                                <li><a class="text-secondary hover:text-primary transition-colors text-body-md" href="{{ url('/staff') }}">Dokter &amp; Suster</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <!-- Mobile Navigation Bottom Bar -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-surface-container-lowest border-t border-outline-variant flex justify-around items-center h-16 z-50">
        <a class="flex flex-col items-center text-primary" href="{{ url('/pasien') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[10px] font-bold">Beranda</span>
        </a>
        <a class="flex flex-col items-center text-secondary" href="{{ url('/#booking-section') }}">
            <span class="material-symbols-outlined">calendar_today</span>
            <span class="text-[10px]">Janji Temu</span>
        </a>
        <a href="{{ url('/#booking-section') }}" class="flex flex-col items-center justify-center -mt-8 bg-primary w-14 h-14 rounded-full text-white shadow-lg border-4 border-background">
            <span class="material-symbols-outlined">add</span>
        </a>
        <a class="flex flex-col items-center text-secondary" href="{{ url('/services') }}">
            <span class="material-symbols-outlined">medical_information</span>
            <span class="text-[10px]">Layanan</span>
        </a>
        <a class="flex flex-col items-center text-error cursor-pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="material-symbols-outlined text-error">logout</span>
            <span class="text-[10px] text-error font-bold">Keluar</span>
        </a>
    </nav>

    <script>
        // Micro-interaction: Active state animation for summary cards
        document.querySelectorAll('section > div').forEach(card => {
            card.addEventListener('mousedown', () => card.classList.add('scale-95'));
            card.addEventListener('mouseup', () => card.classList.remove('scale-95'));
            card.addEventListener('mouseleave', () => card.classList.remove('scale-95'));
        });

        // Print ticket function
        function printTicket(id) {
            const printContent = document.getElementById(`print-ticket-${id}`).innerHTML;
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
                    <div style="max-width: 320px; margin: 0 auto; padding: 20px; border: 1px dashed #333;">
                        ${printContent}
                    </div>
                </body>
                </html>
            `);
            printWindow.document.close();
        }

        console.log("Puskesmas Sejahtera Dashboard Initialized");
    </script>
</body>
</html>
