<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Riwayat Transaksi & Pengobatan | Puskesmas Sejahtera</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Public+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      try {
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-variant": "#d3e4fe",
                      "on-secondary-container": "#57657b",
                      "on-error": "#ffffff",
                      "error": "#ba1a1a",
                      "surface-dim": "#cbdbf5",
                      "secondary-fixed-dim": "#b9c7e0",
                      "background": "#f8f9ff",
                      "outline": "#6c7a71",
                      "on-secondary-fixed-variant": "#3a485c",
                      "on-primary-fixed-variant": "#005236",
                      "tertiary-fixed-dim": "#bcc9c6",
                      "outline-variant": "#bbcabf",
                      "surface-container-highest": "#d3e4fe",
                      "on-primary": "#ffffff",
                      "on-surface-variant": "#3c4a42",
                      "primary": "#006c49",
                      "secondary-container": "#d5e3fd",
                      "surface-container-lowest": "#ffffff",
                      "inverse-primary": "#4edea3",
                      "on-surface": "#0b1c30",
                      "error-container": "#ffdad6",
                      "tertiary-container": "#98a5a3",
                      "surface-container": "#e5eeff",
                      "tertiary": "#55615f",
                      "on-tertiary": "#ffffff",
                      "surface-container-low": "#eff4ff",
                      "secondary-fixed": "#d5e3fd",
                      "on-secondary": "#ffffff",
                      "inverse-on-surface": "#eaf1ff",
                      "on-tertiary-fixed-variant": "#3d4947",
                      "primary-fixed-dim": "#4edea3",
                      "inverse-surface": "#213145",
                      "primary-fixed": "#6ffbbe",
                      "on-error-container": "#93000a",
                      "on-secondary-fixed": "#0d1c2f",
                      "on-background": "#0b1c30",
                      "secondary": "#515f74",
                      "on-tertiary-fixed": "#121e1c",
                      "surface": "#f8f9ff",
                      "on-tertiary-container": "#2f3b39",
                      "on-primary-container": "#00422b",
                      "surface-tint": "#006c49",
                      "surface-container-high": "#dce9ff",
                      "tertiary-fixed": "#d8e5e2",
                      "primary-container": "#10b981",
                      "surface-bright": "#f8f9ff",
                      "on-primary-fixed": "#002113"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "container-max": "1280px",
                      "section-gap-mobile": "48px",
                      "section-gap-desktop": "80px",
                      "grid-gutter": "24px",
                      "base": "8px"
              },
              "fontFamily": {
                      "headline-lg": ["Manrope"],
                      "display-lg": ["Manrope"],
                      "headline-md": ["Manrope"],
                      "body-md": ["Public Sans"],
                      "body-lg": ["Public Sans"],
                      "label-md": ["Public Sans"],
                      "headline-lg-mobile": ["Manrope"]
              },
              "fontSize": {
                      "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                      "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                      "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
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
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container antialiased">
    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    <!-- TopNavBar -->
    <nav class="bg-surface dark:bg-surface-dim shadow-sm flex justify-between items-center w-full px-6 py-4 md:px-8 max-w-container-max mx-auto fixed top-0 left-0 right-0 z-50">
        <div class="flex items-center gap-4">
            <a href="{{ url('/') }}" class="text-headline-md font-headline-md font-bold text-primary dark:text-primary-fixed-dim">Puskesmas Sejahtera</a>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex flex-col text-right hidden sm:block">
                <span class="font-bold text-on-surface text-sm">{{ Auth::user()->name }}</span>
                <span class="text-xs text-secondary">NIK: {{ Auth::user()->nik }}</span>
            </div>
            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-outline-variant bg-surface-container-high flex items-center justify-center">
                <span class="material-symbols-outlined text-primary text-2xl">person</span>
            </div>
        </div>
    </nav>

    <div class="flex min-h-screen pt-20">
        <!-- SideNavBar -->
        <aside class="flex flex-col h-full w-64 fixed left-0 top-0 z-40 p-4 bg-surface-container-low dark:bg-inverse-surface border-r border-outline-variant hidden md:flex">
            <div class="mt-20 mb-8 px-4">
                <div class="flex items-center gap-3 mb-1">
                    <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
                    <span class="text-headline-md font-headline-md font-bold text-primary dark:text-primary-fixed-dim">Portal Pasien</span>
                </div>
                <p class="text-on-surface-variant font-label-md">Puskesmas Sejahtera</p>
            </div>
            <nav class="flex-1 space-y-1">
                <a class="flex items-center gap-3 text-on-surface-variant dark:text-on-secondary-fixed-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all" href="{{ url('/Pasien/Dashboard') }}">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-label-md text-label-md">Overview</span>
                </a>
                <a class="flex items-center gap-3 bg-secondary-container dark:bg-secondary text-on-secondary-container dark:text-on-secondary rounded-lg px-4 py-3 font-bold transition-all" href="{{ url('/Pasien/TransactionHistory') }}">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <span class="font-label-md text-label-md">Riwayat Transaksi</span>
                </a>
                <a class="flex items-center gap-3 text-on-surface-variant dark:text-on-secondary-fixed-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all" href="{{ url('/#booking-section') }}">
                    <span class="material-symbols-outlined">calendar_today</span>
                    <span class="font-label-md text-label-md">Janji Temu Baru</span>
                </a>
                <a class="flex items-center gap-3 text-on-surface-variant dark:text-on-secondary-fixed-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all" href="{{ url('/services') }}">
                    <span class="material-symbols-outlined">medical_information</span>
                    <span class="font-label-md text-label-md">Layanan Medis</span>
                </a>
                <a class="flex items-center gap-3 text-on-surface-variant dark:text-on-secondary-fixed-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all" href="{{ url('/staff') }}">
                    <span class="material-symbols-outlined">groups</span>
                    <span class="font-label-md text-label-md">Staf Medis</span>
                </a>
            </nav>
            <div class="pt-4 mt-4 border-t border-outline-variant space-y-1">
                <a class="flex items-center gap-3 text-on-surface-variant dark:text-on-secondary-fixed-variant px-4 py-3 hover:bg-surface-container-high rounded-lg transition-all" href="{{ url('/contact') }}">
                    <span class="material-symbols-outlined">help</span>
                    <span class="font-label-md text-label-md">Hubungi Kami</span>
                </a>
                <a class="flex items-center gap-3 text-error px-4 py-3 hover:bg-error-container rounded-lg transition-all cursor-pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="font-label-md text-label-md">Keluar</span>
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 md:ml-64 px-6 py-8 md:px-12 md:py-10 bg-background overflow-x-hidden pb-24 md:pb-10">
            <header class="mb-10">
                <h1 class="font-headline-lg text-headline-lg text-on-background mb-2">Riwayat Transaksi</h1>
                <p class="font-body-md text-on-surface-variant">Tinjau dan kelola seluruh pembayaran pengobatan Anda di Puskesmas Sejahtera.</p>
            </header>

            <!-- Stats Overview -->
            <section class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-10">
                <div class="md:col-span-8 bg-surface p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between">
                    <div>
                        <h3 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Total Pengeluaran Pengobatan</h3>
                        <div class="flex items-baseline gap-2">
                            <span class="font-headline-lg text-headline-lg text-primary">Rp {{ number_format($totalExpenditure, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-4 overflow-x-auto scrollbar-hide">
                        <div class="flex-shrink-0 bg-surface-container-low p-4 rounded-lg border border-outline-variant w-40">
                            <span class="text-label-md text-on-surface-variant block mb-1">Apotek (Farmasi)</span>
                            <span class="font-headline-md text-headline-md text-on-surface">Rp {{ number_format($pharmacyTotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex-shrink-0 bg-surface-container-low p-4 rounded-lg border border-outline-variant w-40">
                            <span class="text-label-md text-on-surface-variant block mb-1">Konsultasi Medis</span>
                            <span class="font-headline-md text-headline-md text-on-surface">Rp {{ number_format($consultationTotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex-shrink-0 bg-surface-container-low p-4 rounded-lg border border-outline-variant w-40">
                            <span class="text-label-md text-on-surface-variant block mb-1">Laboratorium</span>
                            <span class="font-headline-md text-headline-md text-on-surface">Rp 0</span>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-4 bg-primary text-on-primary p-6 rounded-xl shadow-lg relative overflow-hidden group">
                    <div class="relative z-10">
                        <h3 class="font-label-md text-label-md opacity-80 uppercase tracking-wider mb-1">Belum Terbayarkan</h3>
                        <span class="font-headline-lg text-headline-lg block mb-4">Rp {{ number_format($pendingBalance, 0, ',', '.') }}</span>
                        @if($pendingBalance > 0)
                            <button onclick="alert('Silakan menuju loket pembayaran kasir Puskesmas untuk melunasi tagihan antrean Mandiri Anda.')" class="bg-white text-primary px-6 py-2 rounded-full font-label-md hover:bg-primary-fixed transition-colors active:scale-95">Bayar Sekarang</button>
                        @else
                            <span class="text-xs bg-white/20 px-3 py-1 rounded-full font-bold">Semua Tagihan Lunas</span>
                        @endif
                    </div>
                    <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-9xl opacity-10 group-hover:scale-110 transition-transform">account_balance_wallet</span>
                </div>
            </section>

            <!-- Filters & Search -->
            <section class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant mb-6 shadow-sm">
                <div class="flex flex-col md:flex-row gap-4 items-end">
                    <div class="flex-1 w-full">
                        <label class="block text-label-md text-on-surface-variant mb-2 ml-1">Cari Transaksi</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                            <input class="w-full pl-10 pr-4 py-3 rounded-lg border border-outline focus:ring-2 focus:ring-primary focus:border-primary bg-white transition-all outline-none text-body-md" placeholder="Cari berdasarkan Poliklinik atau ID Transaksi..." type="text" id="search-input"/>
                        </div>
                    </div>
                    <div class="w-full md:w-48">
                        <label class="block text-label-md text-on-surface-variant mb-2 ml-1">Jenis Layanan</label>
                        <select class="w-full px-4 py-3 rounded-lg border border-outline focus:ring-2 focus:ring-primary focus:border-primary bg-white outline-none text-body-md" id="filter-service">
                            <option value="">Semua Layanan</option>
                            <option value="Umum">Poli Umum</option>
                            <option value="Gigi">Poli Gigi</option>
                            <option value="KIA">Poli KIA</option>
                            <option value="Anak">Poli Anak</option>
                        </select>
                    </div>
                </div>
            </section>

            <!-- Transaction Table -->
            <section class="bg-surface rounded-xl border border-outline-variant overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low border-b border-outline-variant">
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Tanggal &amp; Waktu</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Jenis Layanan</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">ID Transaksi</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Biaya Mandiri</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant">Status Tagihan</th>
                                <th class="px-6 py-4 font-label-md text-on-surface-variant text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant" id="table-body">
                            @forelse($queues as $q)
                                <tr class="hover:bg-surface-container-low transition-colors group">
                                    <td class="px-6 py-5">
                                        <span class="text-body-md block font-semibold text-on-surface">{{ \Carbon\Carbon::parse($q->date)->isoFormat('D MMM Y') }}</span>
                                        <span class="text-xs text-on-surface-variant">{{ \Carbon\Carbon::parse($q->created_at)->format('H:i') }} WIB</span>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined text-[18px]">medical_services</span>
                                            </div>
                                            <div>
                                                <span class="text-body-md text-on-surface block font-semibold">{{ $q->poliklinik }}</span>
                                                <span class="text-xs text-secondary">Jalur {{ $q->patient_type }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-on-surface-variant font-mono text-sm">TX-882{{ str_pad($q->id, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td class="px-6 py-5 font-semibold text-on-surface">
                                        Rp {{ number_format($q->patient_type === 'BPJS' ? 0 : 50000, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-5">
                                        @if($q->status === 'completed' || $q->patient_type === 'BPJS')
                                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 flex items-center w-fit gap-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-green-700"></span>
                                                Lunas
                                            </span>
                                        @elseif($q->status === 'skipped')
                                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-700 flex items-center w-fit gap-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-slate-700"></span>
                                                Batal (Lewat)
                                            </span>
                                        @else
                                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700 flex items-center w-fit gap-1 animate-pulse">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-700"></span>
                                                Menunggu
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        @if($q->status === 'completed')
                                            <button onclick="printTicket({{ $q->id }})" class="text-primary hover:bg-primary/10 p-2 rounded-lg transition-colors" title="Cetak Kuitansi">
                                                <span class="material-symbols-outlined">print</span>
                                            </button>
                                        @elseif($q->patient_type === 'Mandiri')
                                            <button onclick="alert('Silakan selesaikan pembayaran Rp 50.000 di loket kasir Puskesmas.')" class="text-primary font-label-md hover:underline pr-2">Bayar</button>
                                        @else
                                            <span class="text-xs text-secondary">-</span>
                                        @endif

                                        <!-- Hidden Ticket for printing -->
                                        <div id="print-ticket-{{ $q->id }}" class="hidden">
                                            <h2 style="font-size: 18px; margin: 5px 0; font-weight: bold; text-align: center;">Puskesmas Sejahtera</h2>
                                            <p style="font-size: 11px; color: #666; text-align: center; margin: 0 0 10px 0;">Bukti Transaksi & Layanan</p>
                                            <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                                            <h1 style="font-size: 32px; margin: 10px 0; font-weight: 800; text-align: center;">TX-882{{ str_pad($q->id, 4, '0', STR_PAD_LEFT) }}</h1>
                                            <p style="font-size: 14px; font-weight: bold; text-align: center; margin: 5px 0;">{{ $q->poliklinik }}</p>
                                            <p style="font-size: 12px; margin: 4px 0;">Pasien: {{ $q->patient_name }}</p>
                                            <p style="font-size: 12px; margin: 4px 0;">NIK: {{ $q->patient_nik }}</p>
                                            <p style="font-size: 12px; margin: 4px 0;">Metode: Mandiri (Tunai/Debit)</p>
                                            <p style="font-size: 12px; margin: 4px 0;">Total Biaya: Rp 50.000</p>
                                            <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                                            <p style="font-size: 10px; color: #666; text-align: center;">Terima kasih atas kunjungan Anda. Semoga lekas sembuh.</p>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-8 text-center text-secondary">Belum ada riwayat transaksi pengobatan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <!-- Mobile Appointment Bar (Sticky Bottom) -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-surface-container-lowest border-t border-outline-variant flex justify-around items-center h-16 z-50">
        <a class="flex flex-col items-center text-secondary" href="{{ url('/Pasien/Dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[10px]">Overview</span>
        </a>
        <a class="flex flex-col items-center text-primary" href="{{ url('/Pasien/TransactionHistory') }}">
            <span class="material-symbols-outlined">receipt_long</span>
            <span class="text-[10px] font-bold">Transaksi</span>
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

    <!-- Interaction Script -->
    <script>
        const searchInput = document.getElementById('search-input');
        const filterService = document.getElementById('filter-service');
        const rows = document.querySelectorAll('#table-body tr');

        function applyFilters() {
            const searchTerm = searchInput.value.toLowerCase();
            const serviceType = filterService.value.toLowerCase();

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const matchesSearch = text.includes(searchTerm);
                const matchesService = serviceType === '' || text.includes(serviceType);

                if (matchesSearch && matchesService) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', applyFilters);
        filterService.addEventListener('change', applyFilters);

        // Print ticket function
        function printTicket(id) {
            const printContent = document.getElementById(`print-ticket-${id}`).innerHTML;
            const printWindow = window.open('', '_blank');
            printWindow.document.write(`
                <html>
                <head>
                    <title>Cetak Kuitansi</title>
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
    </script>
</body>
</html>
