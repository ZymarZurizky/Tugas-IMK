@extends('layouts.tailwind-public')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden pt-12 pb-16">
    <div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="z-10">
            <span class="inline-block px-4 py-1.5 rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md mb-6">
                #1 Mitra Kesehatan Masyarakat
            </span>
            <h1 class="text-display-lg font-display-lg text-on-surface mb-6 leading-tight">
                Kesehatan Keluarga Anda Adalah <span class="text-primary">Prioritas Utama Kami.</span>
            </h1>
            <p class="text-body-lg font-body-lg text-secondary mb-10 max-w-lg">
                Pelayanan kesehatan modern yang terjangkau, profesional, dan ramah untuk seluruh masyarakat. Kami hadir lebih dekat untuk melayani Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                @auth
                    <a href="#booking-section" class="bg-primary text-on-primary px-8 py-4 rounded-xl font-headline-md text-headline-md flex items-center justify-center gap-2 hover:shadow-lg transition-all active:scale-95">
                        <span class="material-symbols-outlined">calendar_month</span>
                        Ambil Antrean Online
                    </a>
                @else
                    <a href="{{ url('/LoginPage') }}" class="bg-primary text-on-primary px-8 py-4 rounded-xl font-headline-md text-headline-md flex items-center justify-center gap-2 hover:shadow-lg transition-all active:scale-95">
                        <span class="material-symbols-outlined">login</span>
                        Login / Daftar
                    </a>
                @endauth
                <a href="{{ url('/services') }}" class="border border-outline text-primary px-8 py-4 rounded-xl font-headline-md text-headline-md flex items-center justify-center gap-2 hover:bg-surface-container-low transition-all">
                    Layanan Kami
                </a>
            </div>
            <div class="mt-12 flex items-center gap-6">
                <div class="flex -space-x-3">
                    <div class="w-12 h-12 rounded-full border-2 border-white bg-slate-200 overflow-hidden">
                        <img class="w-full h-full object-cover" alt="dr. Sarah Wijaya" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAuy5UclGciK75ltJ1k_EnI5zgyJehUeofwR_URybi7dV9Ly1kJ0Ozck_xRxjy4aA12UssmwS-LC__VLPN1RTz6zxbqbimbZ-A1DjLcUMMQvMk2giag2YogMXVRyf0IN8HHJVVz57yJK5Vvg1yAbp8iA6k7vzMN5qC60N7hy71HsBzNh-jvqTSlMUBF57VaWqs18Ay6meF4HC-zWu9hn552MMSGdcmEaiShGKDeIIXdqGVFmJTP6rOp75hkurAyRtKG2JL8G3BkgQ"/>
                    </div>
                    <div class="w-12 h-12 rounded-full border-2 border-white bg-slate-200 overflow-hidden">
                        <img class="w-full h-full object-cover" alt="dr. Ahmad Hidayat" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBf98YpfpzZVhnBOsI7wIYpcyswjtAkTswbQmaGZs8a_mF8eNIZOp-4PKZJNmii_SoxsFoVjOAg51M3xaGAQxzqPNUNL_esxUuSQ16JV3D7wOUuAE7S07xWZ_wedZmiovMNCapsmlFT-x7fzah6wFxdnj3SmlnhcYCUj5U9VutSXiZYxgHjE06NMhRXzsmB1UucoAHCH16mCo4mYXbmQ1_mxj537jPIJ2fsFdh5oWNahSur4HD9wrnTwGg5GCS_TJjIgvaiDM5wrdI"/>
                    </div>
                    <div class="w-12 h-12 rounded-full border-2 border-white bg-slate-200 overflow-hidden">
                        <img class="w-full h-full object-cover" alt="drg. Robert Chen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCra6h3_x5jOAPPCWxwywqjwufNtPK6l9phoC7TThlJ5ry7xoNTqRLMCLbdDz8m9NxBfTxbvdxHeCAkFw_DVn27EHDZKI_J-I8yhzt6wwFsNp-_Cso45YKBFhRXvVchLN6J6wE1wUCigkmKlb-1__eAoJpxrLifsPkVrgXJXOUmrZOx3m6hSZWqmGKR7yKLzxgpQbjS-jVWVobGcVrU5qhmmXxioR1OClEUoVCbvojp7U7TJTeHuL7_bhFBHcvRVQ9pWds1zJl_zW4"/>
                    </div>
                </div>
                <div>
                    <p class="text-on-surface font-bold">25+ Dokter Ahli</p>
                    <p class="text-secondary text-label-md">Tersedia untuk konsultasi</p>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="absolute inset-0 bg-primary-fixed opacity-10 rounded-[40px] -rotate-3 scale-105"></div>
            <div class="relative rounded-[40px] overflow-hidden aspect-[4/5] soft-card-shadow">
                <img class="w-full h-full object-cover" alt="Interior Puskesmas" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXCdKO5pVJpEKc2BhxJFNLzJr4y5dPoLJ3_Wx4JoJXUxu87I2XO3mFWW8sghNPIAuUxvVjGFbXQsPTlCPU62jEDaUm_ZhFgzFFRXoQiZwSryN3oWqYhlzajteemndK8FFK1ZBwtyAXWmzPQTvWVmuqF08yycJc2ucfu_xAL_SyIxkTlYSO1gQlGgjHIcvn5DzWbIe-irtw15rU3uXdZsLeqyCJ3RYy5LO0Wt5GAu4upPkntzNSBizCQG0dWxfobBH8rXATDbfWv38"/>
            </div>
            <!-- Floating Badge -->
            <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl soft-card-shadow border border-outline-variant flex items-center gap-4 animate-bounce hover:animate-none">
                <div class="bg-primary-container p-3 rounded-xl text-on-primary-container">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">verified</span>
                </div>
                <div>
                    <p class="text-headline-md font-headline-md">Akreditasi Paripurna</p>
                    <p class="text-secondary text-label-md">Kemenkes RI</p>
                </div>
            </div>
        </div>
    </div>
</section>

@auth
    @if(Auth::user()->role === 'patient')
        <!-- Patient Section (Booking & Active Tickets) -->
        <section id="booking-section" class="py-16 bg-surface-container-low -mx-8 px-8 border-t border-b border-outline-variant/30">
            <div class="max-w-container-max mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-headline-lg font-headline-lg text-on-surface">Pendaftaran Antrean &amp; Tiket Aktif</h2>
                    <p class="text-secondary max-w-xl mx-auto mt-2">
                        Selamat datang kembali, <span class="font-bold text-primary">{{ Auth::user()->name }}</span>. Silakan ambil antrean pemeriksaan baru atau pantau status tiket aktif Anda di bawah ini.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-grid-gutter items-start">
                    <!-- Left: Booking Form -->
                    <div class="lg:col-span-6 bg-white p-8 rounded-3xl border border-outline-variant/30 soft-card-shadow">
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">add_circle</span>
                            Form Ambil Antrean
                        </h3>
                        
                        @if(session('success'))
                            <div class="bg-primary-container/20 border border-primary/20 text-on-primary-container p-4 rounded-xl mb-6 text-body-md">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="bg-error-container/20 border border-error/20 text-on-error-container p-4 rounded-xl mb-6 text-body-md">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form action="{{ route('queues.book') }}" method="POST" class="space-y-6">
                            @csrf
                            
                            <!-- Jenis Pembiayaan -->
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface-variant mb-2">Jenis Pembiayaan Pasien</label>
                                <div class="grid grid-cols-2 gap-4">
                                    <button type="button" id="btn-bpjs" onclick="setPatientType('BPJS')" class="h-12 rounded-xl border-2 border-primary bg-primary/10 text-primary font-bold text-center active:scale-95 transition-all">
                                        BPJS Kesehatan
                                    </button>
                                    <button type="button" id="btn-mandiri" onclick="setPatientType('Mandiri')" class="h-12 rounded-xl border border-outline-variant hover:bg-surface-container-low text-secondary font-bold text-center active:scale-95 transition-all">
                                        Mandiri / Umum
                                    </button>
                                </div>
                                <input type="hidden" name="patient_type" id="patient_type" value="BPJS">
                            </div>

                            <!-- Penerima Manfaat -->
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface-variant mb-2">Penerima Manfaat</label>
                                <div class="flex gap-6 mt-2">
                                    <label class="flex items-center gap-2 font-body-md text-body-md text-secondary cursor-pointer">
                                        <input type="radio" name="for_family" value="0" checked onclick="toggleFamilyFields(false)" class="text-primary focus:ring-primary">
                                        Diri Sendiri
                                    </label>
                                    <label class="flex items-center gap-2 font-body-md text-body-md text-secondary cursor-pointer">
                                        <input type="radio" name="for_family" value="1" onclick="toggleFamilyFields(true)" class="text-primary focus:ring-primary">
                                        Keluarga Lain
                                    </label>
                                </div>
                            </div>

                            <!-- Family Fields -->
                            <div id="family-fields" class="hidden p-6 bg-surface-container-low rounded-2xl border border-outline-variant/30 space-y-4">
                                <h4 class="font-bold text-on-surface text-label-md">Data Anggota Keluarga</h4>
                                <div class="space-y-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant block" for="family_name">Nama Lengkap</label>
                                    <input type="text" id="family_name" name="family_name" placeholder="Sesuai KTP Keluarga" class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-white"/>
                                </div>
                                <div class="space-y-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant block" for="family_nik">NIK (16 Digit)</label>
                                    <input type="text" id="family_nik" name="family_nik" maxlength="16" placeholder="NIK Keluarga" oninput="this.value = this.value.replace(/\D/g, '')" class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-white"/>
                                </div>
                            </div>

                            <!-- Poliklinik -->
                            <div class="space-y-2">
                                <label class="font-label-md text-label-md text-on-surface-variant block" for="poliklinik">Poliklinik Tujuan</label>
                                <select id="poliklinik" name="poliklinik" required class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-white font-bold">
                                    <option value="Poli Umum">Poli Umum</option>
                                    <option value="Poli Gigi">Poli Gigi</option>
                                    <option value="Poli KIA">Poli KIA (Kesehatan Ibu &amp; Anak)</option>
                                    <option value="Poli Anak">Poli Anak</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <!-- Tanggal -->
                                <div class="space-y-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant block" for="date">Tanggal Kunjungan</label>
                                    <input type="date" id="date" name="date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" required class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-white"/>
                                </div>

                                <!-- Sesi -->
                                <div class="space-y-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant block" for="session">Sesi Waktu</label>
                                    <select id="session" name="session" required class="w-full h-12 px-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-white">
                                        <option value="Pagi">Pagi (08:00 - 11:00)</option>
                                        <option value="Siang">Siang (13:00 - 15:00)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Keluhan -->
                            <div class="space-y-2">
                                <label class="font-label-md text-label-md text-on-surface-variant block" for="complaint">Keluhan Singkat (Opsional)</label>
                                <textarea id="complaint" name="complaint" placeholder="Tuliskan keluhan kesehatan Anda secara singkat..." rows="3" class="w-full p-4 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-white"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-primary text-on-primary h-14 rounded-xl font-bold hover:bg-opacity-90 active:scale-95 transition-all shadow-md">
                                Ambil Tiket Antrean
                            </button>
                        </form>
                    </div>

                    <!-- Right: Active Tickets -->
                    <div class="lg:col-span-6 space-y-6">
                        <div class="bg-white p-6 rounded-3xl border border-outline-variant/30 soft-card-shadow flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined">person</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface text-body-lg">{{ Auth::user()->name }}</h4>
                                <p class="text-secondary text-label-md">NIK: {{ Auth::user()->nik }}</p>
                            </div>
                        </div>

                        <h3 class="font-headline-md text-headline-md text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">local_activity</span>
                            E-Tiket Antrean Aktif
                        </h3>

                        @if($myTickets->isEmpty())
                            <div class="bg-white p-8 rounded-3xl border border-outline-variant/30 text-center text-secondary soft-card-shadow">
                                <span class="material-symbols-outlined text-4xl text-outline mb-3">hourglass_empty</span>
                                <p class="text-body-md">Belum ada antrean terdaftar untuk hari ini atau mendatang.</p>
                            </div>
                        @else
                            @foreach($myTickets as $ticket)
                                <div class="bg-white rounded-3xl border border-outline-variant/30 overflow-hidden soft-card-shadow">
                                    <div class="p-6 text-white text-center {{ $ticket->patient_type === 'BPJS' ? 'bg-primary' : 'bg-[#1b62cc]' }}">
                                        <h4 class="font-bold text-body-lg">Puskesmas Sehat Utama</h4>
                                        <p class="text-[12px] opacity-90">Tiket Antrean Online - Jalur {{ $ticket->patient_type }}</p>
                                    </div>
                                    
                                    <!-- Hidden Printable Form -->
                                    <div id="print-ticket-{{ $ticket->id }}" class="hidden">
                                        <h2 style="font-size: 20px; margin: 5px 0;">Puskesmas Sehat Utama</h2>
                                        <p style="font-size: 12px; color: #666;">Tiket Antrean Online</p>
                                        <hr style="border: none; border-top: 1px dashed #000; margin: 15px 0;" />
                                        <h1 style="font-size: 48px; margin: 10px 0; font-weight: 800;">{{ $ticket->queue_number }}</h1>
                                        <p style="font-size: 18px; font-weight: bold;">{{ $ticket->poliklinik }}</p>
                                        <p style="font-size: 13px;">Penerima: {{ $ticket->patient_name }}</p>
                                        <p style="font-size: 13px;">NIK: {{ $ticket->patient_nik }}</p>
                                        <p style="font-size: 13px;">Tanggal: {{ \Carbon\Carbon::parse($ticket->date)->isoFormat('dddd, D MMMM Y') }}</p>
                                        <p style="font-size: 13px;">Sesi: {{ $ticket->session }} ({{ $ticket->session === 'Pagi' ? '08:00 - 11:00' : '13:00 - 15:00' }})</p>
                                        <hr style="border: none; border-top: 1px dashed #000; margin: 15px 0;" />
                                        <p style="font-size: 11px; color: #666;">Tunjukkan tiket ini atau Scan QR di mesin check-in saat tiba di puskesmas.</p>
                                    </div>

                                    <div class="p-8 flex flex-col items-center border-b border-outline-variant/30">
                                        <div class="text-display-lg font-display-lg text-on-surface mb-4">{{ $ticket->queue_number }}</div>
                                        
                                        <!-- QR Code -->
                                        <div class="qrcode-container mb-6 border-4 border-slate-50 p-2 rounded-xl bg-white" data-code="{{ $ticket->queue_number }}"></div>

                                        <div class="w-full space-y-3 text-body-md text-secondary">
                                            <div class="flex justify-between">
                                                <span>Nama Pasien</span>
                                                <span class="font-bold text-on-surface">{{ $ticket->patient_name }}</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>NIK Pasien</span>
                                                <span class="font-bold text-on-surface">{{ $ticket->patient_nik }}</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Poliklinik</span>
                                                <span class="font-bold text-on-surface">{{ $ticket->poliklinik }}</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Tanggal</span>
                                                <span class="font-bold text-on-surface">{{ \Carbon\Carbon::parse($ticket->date)->isoFormat('D MMM Y') }}</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Sesi</span>
                                                <span class="font-bold text-on-surface">{{ $ticket->session }}</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span>Status</span>
                                                <span>
                                                    @if($ticket->status === 'pending')
                                                        <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-label-md font-bold">Menunggu</span>
                                                    @elseif($ticket->status === 'calling')
                                                        <span class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-label-md font-bold animate-pulse">Dipanggil</span>
                                                    @elseif($ticket->status === 'completed')
                                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-label-md font-bold">Selesai</span>
                                                    @else
                                                        <span class="bg-slate-100 text-slate-800 px-3 py-1 rounded-full text-label-md font-bold">Terlewati</span>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>

                                        <button onclick="printTicket({{ $ticket->id }})" class="mt-6 w-full h-12 bg-surface-container hover:bg-surface-container-high text-on-surface-variant rounded-xl font-bold flex items-center justify-center gap-2 active:scale-95 transition-all">
                                            <span class="material-symbols-outlined text-[18px]">printer</span>
                                            Cetak E-Tiket / Simpan PDF
                                        </button>
                                    </div>
                                    <div class="bg-slate-50 p-4 text-center text-label-md text-secondary border-t border-outline-variant/30">
                                        *Tiba 15 menit sebelum sesi dimulai untuk check-in mandiri.
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif
@endauth

<!-- Layanan Unggulan Section -->
<section class="bg-surface-container-low py-16 -mx-8 px-8">
    <div class="max-w-container-max mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-headline-lg font-headline-lg mb-4">Layanan Unggulan</h2>
            <p class="text-secondary max-w-2xl mx-auto">Kami menyediakan berbagai layanan kesehatan primer yang didukung oleh tenaga medis profesional dan peralatan medis yang memadai.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-grid-gutter">
            <!-- General Care -->
            <div class="bg-surface-container-lowest p-8 rounded-3xl border border-outline-variant hover:border-primary transition-all group soft-card-shadow">
                <div class="w-16 h-16 bg-surface-container-high rounded-2xl flex items-center justify-center text-primary mb-8 group-hover:bg-primary-container group-hover:text-on-primary-container transition-colors">
                    <span class="material-symbols-outlined text-4xl">medical_services</span>
                </div>
                <h3 class="text-headline-md font-headline-md mb-4">Poli Umum</h3>
                <p class="text-secondary mb-6">Pemeriksaan kesehatan rutin, pengobatan penyakit umum, dan konsultasi medis untuk seluruh anggota keluarga.</p>
                <a class="text-primary font-bold flex items-center gap-2 group-hover:translate-x-2 transition-transform" href="{{ url('/services') }}">
                    Selengkapnya <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            <!-- Dental Care -->
            <div class="bg-surface-container-lowest p-8 rounded-3xl border border-outline-variant hover:border-primary transition-all group soft-card-shadow">
                <div class="w-16 h-16 bg-surface-container-high rounded-2xl flex items-center justify-center text-primary mb-8 group-hover:bg-primary-container group-hover:text-on-primary-container transition-colors">
                    <span class="material-symbols-outlined text-4xl">dentistry</span>
                </div>
                <h3 class="text-headline-md font-headline-md mb-4">Poli Gigi</h3>
                <p class="text-secondary mb-6">Perawatan kesehatan gigi dan mulut profesional mulai dari pembersihan karang gigi hingga tindakan bedah mulut ringan.</p>
                <a class="text-primary font-bold flex items-center gap-2 group-hover:translate-x-2 transition-transform" href="{{ url('/services') }}">
                    Selengkapnya <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            <!-- Maternal Care -->
            <div class="bg-surface-container-lowest p-8 rounded-3xl border border-outline-variant hover:border-primary transition-all group soft-card-shadow">
                <div class="w-16 h-16 bg-surface-container-high rounded-2xl flex items-center justify-center text-primary mb-8 group-hover:bg-primary-container group-hover:text-on-primary-container transition-colors">
                    <span class="material-symbols-outlined text-4xl">pregnant_woman</span>
                </div>
                <h3 class="text-headline-md font-headline-md mb-4">Poli KIA &amp; KB</h3>
                <p class="text-secondary mb-6">Pelayanan kesehatan ibu dan anak, imunisasi, serta program keluarga berencana yang terpadu dan menyeluruh.</p>
                <a class="text-primary font-bold flex items-center gap-2 group-hover:translate-x-2 transition-transform" href="{{ url('/services') }}">
                    Selengkapnya <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Jadwal Dokter (Bento Layout) -->
<section class="py-16">
    <div class="max-w-container-max mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <h2 class="text-headline-lg font-headline-lg mb-4">Jadwal Dokter Hari Ini</h2>
                <p class="text-secondary">Temukan dokter yang siap melayani Anda hari ini dengan sistem antrian real-time.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Dr 1 -->
            <div class="md:col-span-1 bg-white border border-outline-variant rounded-3xl overflow-hidden soft-card-shadow flex flex-col">
                <div class="h-48 bg-slate-100 relative">
                    <img class="w-full h-full object-cover" alt="Dr. Sarah Wijaya" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqoDa8RgYHJAlG6p2px52M5f2zoq9-phyYqTbQhQqmxJM17OQKDNhq-HheJfeq3Fr2QMYD7XvFOf3BeqV9rMQ9QJVDVPWGdhO0BSKrrxU_SdEvvmMJ395KHNZaKKnq6sT7ZMXPiyou-Q7gknCA_jObdPnEq8aNAs3ScUBxdj2ewx3wBkKg1lXDh3MDWnCgHuhxQH-5gB2XgsK3SsfK6FL0dtz-arPGBEd_WE7NHe5s110KH0Y2pd9STVCKFVw7LRyGwkK6DzZpH0Q"/>
                    <div class="absolute top-4 right-4 bg-primary text-white text-[10px] px-2 py-1 rounded-full font-bold uppercase tracking-wider">Tersedia</div>
                </div>
                <div class="p-6">
                    <p class="text-label-md text-primary mb-1 uppercase tracking-tight font-semibold">Poli Umum</p>
                    <h4 class="font-bold text-lg mb-4">Dr. Sarah Wijaya</h4>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-secondary text-label-md">
                            <span class="material-symbols-outlined text-sm">schedule</span>
                            <span>08:00 - 14:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dr 2 -->
            <div class="md:col-span-1 bg-white border border-outline-variant rounded-3xl overflow-hidden soft-card-shadow flex flex-col">
                <div class="h-48 bg-slate-100 relative">
                    <img class="w-full h-full object-cover" alt="Drg. Robert Chen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZgaom61I9IVjFOF3dSEqML9XCjLkLIkv8O0V2flfPh-D7YQ0d--cNhGlzOcN10WMYYiA7iAodFajO5UjwP-S4H9M7Kx9AJgWjmtL90o60fTwYD20Gs4ViUERBwDMM3qSkHUoO6Byqp49-jsB68k9f4_TmsrW8YnbmMcZMxYR5xKdDz9PrsSFEFKSriyRorsFrRBG6ZWqzjdCuOPizREToxfuAqF33OR-2FMtuDLATjc5QWK0Zz4nL6VtqJ7htKlRY8ZD0UMRmCFk"/>
                    <div class="absolute top-4 right-4 bg-primary text-white text-[10px] px-2 py-1 rounded-full font-bold uppercase tracking-wider">Tersedia</div>
                </div>
                <div class="p-6">
                    <p class="text-label-md text-primary mb-1 uppercase tracking-tight font-semibold">Poli Gigi</p>
                    <h4 class="font-bold text-lg mb-4">Drg. Robert Chen</h4>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-secondary text-label-md">
                            <span class="material-symbols-outlined text-sm">schedule</span>
                            <span>09:00 - 15:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dr 3 -->
            <div class="md:col-span-1 bg-white border border-outline-variant rounded-3xl overflow-hidden soft-card-shadow flex flex-col">
                <div class="h-48 bg-slate-100 relative">
                    <img class="w-full h-full object-cover" alt="Bdn. Siti Aminah" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAulPgxxQP0_dgKH9JHsFlaW9tWdkE_VDHkvzbD-7MGTejCyAS4NLOcm-uCPTO3VDUgfIjNuAoclLWSvdpOmrtXIi8Kl_wj4XFODCKMsXTADK17XBsPF-Jme42QepxvaxQ47ciHLirLpDW03HEvWJ5v5MaXBj51AJQAaZSmsYOlxR0e6Dz5XyYHwd6q7_5PuKkmOgp1kuwP9beNy0P9E2s-yWUPCKbsTxXLhIne7txp9knvWHBlxtp7WRq6SH_MmqpUBrxJ5-Fkeac"/>
                    <div class="absolute top-4 right-4 bg-primary text-white text-[10px] px-2 py-1 rounded-full font-bold uppercase tracking-wider">Tersedia</div>
                </div>
                <div class="p-6">
                    <p class="text-label-md text-primary mb-1 uppercase tracking-tight font-semibold">Poli KIA</p>
                    <h4 class="font-bold text-lg mb-4">Bdn. Siti Aminah</h4>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-secondary text-label-md">
                            <span class="material-symbols-outlined text-sm">schedule</span>
                            <span>08:00 - 12:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Square -->
            <div class="md:col-span-1 bg-primary-container/20 rounded-3xl p-8 flex flex-col justify-between items-start text-on-primary-container border border-primary/20">
                <span class="material-symbols-outlined text-5xl text-primary opacity-70">calendar_add_on</span>
                <div>
                    <h3 class="text-headline-md font-headline-md mb-2 leading-tight text-on-surface">Jadwal Lainnya?</h3>
                    <p class="text-sm text-secondary mb-6">Tinjau profil semua tim spesialis medis serta bidan penanggung jawab kami.</p>
                    <a href="{{ url('/staff') }}" class="bg-primary text-on-primary text-center px-6 py-3 rounded-xl font-bold text-sm w-full block hover:bg-opacity-90 transition-all">
                        Lihat Semua Staf
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Berita Kesehatan Section -->
<section class="bg-surface-container-low py-16 -mx-8 px-8 border-t border-outline-variant/30">
    <div class="max-w-container-max mx-auto">
        <div class="flex items-baseline justify-between mb-12">
            <h2 class="text-headline-lg font-headline-lg text-on-surface">Berita Kesehatan Terkini</h2>
            <a class="text-primary font-bold hover:underline" href="#">Lihat Semua Artikel</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-grid-gutter">
            <!-- Featured Article -->
            <div class="md:col-span-7 group cursor-pointer">
                <div class="rounded-[32px] overflow-hidden aspect-[16/9] mb-6 relative shadow-md">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Tips Nutrisi" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJR-J3F-HFBuWk1EvgrFZjfRKPYStWSUWS-tWujAcRluqph8rEeSlmEovGgieFqiiLYgxCJhMLDFIS-4gLjTPBdz2yVchEwDl7FBRmbBsE7-Jse7X8-J8gpDeDYxYP2vmUwWEMK-Gm9o1fN8JVXh6_tma67GFAiv1nMeNha6lpso06hSyS6c9jn7Scz-E7scP7UEQxzwWwIs80wTnPKtV82OixvP3iq05_rvhQwb-vE__rBijkfXsbiu9J8LOuGHZ0_yST6a1hPnU"/>
                    <div class="absolute top-6 left-6 bg-white/95 backdrop-blur px-4 py-1.5 rounded-full text-label-md font-bold text-primary">Tips Nutrisi</div>
                </div>
                <h3 class="text-headline-md font-headline-md mb-3 text-on-surface group-hover:text-primary transition-colors">7 Pola Makan Sehat untuk Menjaga Imunitas di Musim Pancaroba</h3>
                <p class="text-secondary mb-4">Pelajari bagaimana menjaga daya tahan tubuh dengan konsumsi nutrisi yang tepat selama perubahan cuaca ekstrim...</p>
                <div class="flex items-center gap-4 text-label-md text-secondary opacity-80">
                    <span>12 Jan 2024</span>
                    <span class="w-1 h-1 bg-secondary-fixed-dim rounded-full"></span>
                    <span>Baca 5 Menit</span>
                </div>
            </div>
            <!-- Side Articles -->
            <div class="md:col-span-5 flex flex-col gap-8">
                <div class="flex gap-4 group cursor-pointer">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 shadow-sm">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" alt="Imunisasi Anak" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzBoYOBK0V5qBfdrEg4LSpeYt_61wgPybpkS9-3-U9RMzdLeIgR-Dwr6A8xuh3Pk3_DLsXKDgyEdMbZTfq8ldIywXf6C8D3PGHfTlWAzPurvobBofsBc32a2YiEQfGCciT8cVVSLrafsqT-TrpCz1HieNt6STHuU-HsGM3zGyfl07R-iQvUYmMdPKHy27ahtXWAjTrdSV_4NwA3DKuOVqIdNcPWjSKeTkY0zkIYNYeH6exCvvdJuVyqRUKrdHiqlGKBvb0Y-FEUe8"/>
                    </div>
                    <div>
                        <p class="text-primary text-[10px] font-bold uppercase mb-1">Informasi Layanan</p>
                        <h4 class="font-bold text-body-lg text-on-surface mb-2 group-hover:text-primary transition-colors line-clamp-2">Pentingnya Imunisasi Dasar Lengkap Bagi Pertumbuhan Buah Hati</h4>
                        <p class="text-label-md text-secondary">08 Jan 2024</p>
                    </div>
                </div>
                <div class="flex gap-4 group cursor-pointer">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 shadow-sm">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" alt="Meditasi Kesehatan Mental" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAIdUB1bskQSyQKpK3OsN-BakA2-3oVXMDaAgtXVmGh97gTMSaHCJ9mPJObs6NfRHsFKW8lSxWZpmCaOvQmaCje9zGG8H1ZcDt9rag7-1W4XRD0gycUWIAD54mSHGB3goreRHE_lUtjkgt3Jw-w-9ckGBsnGXs03eSNdKEeWgdyxgKKal40yR4TtmQrSh_1ji4COgfm_hXqSWHh7BaaO3v6spkP4xa90rz8YHFv17mF5W5iUL3rnikk-92STfGIOTdglXsCgbYaE8"/>
                    </div>
                    <div>
                        <p class="text-primary text-[10px] font-bold uppercase mb-1">Kesehatan Mental</p>
                        <h4 class="font-bold text-body-lg text-on-surface mb-2 group-hover:text-primary transition-colors line-clamp-2">Manfaat Meditasi 10 Menit Sehari untuk Kesehatan Mental</h4>
                        <p class="text-label-md text-secondary">05 Jan 2024</p>
                    </div>
                </div>
                <div class="flex gap-4 group cursor-pointer">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 shadow-sm">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" alt="Air Putih di Pagi Hari" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfADMGZBI-nuD1hYqA8pC2MvfVeP_zc7cEyqlZ_HQDENMFsDuOEH2tuh0w10bHqmHDo9Coh-LkDWGRjXnNq-d9JPMrOPdNy24RGN_bWRFPq-VfHC_rFlYTssSOJ1G1bHjC3T6VqHaTsOEhMpKpgyBKvw4inKZqGl8zdyqF3J_IGQLn_QKcsfiDtxEuvyYZQscXoBFE-Wd8KcXd0_7LXlpzBvMsLAWLqHjSCF82nlbRCPoLGlphw7pSONZnsZQG2C5OzagoQcj0XTk"/>
                    </div>
                    <div>
                        <p class="text-primary text-[10px] font-bold uppercase mb-1">Gaya Hidup</p>
                        <h4 class="font-bold text-body-lg text-on-surface mb-2 group-hover:text-primary transition-colors line-clamp-2">Kenapa Anda Harus Minum Air Putih di Pagi Hari?</h4>
                        <p class="text-label-md text-secondary">02 Jan 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Janji Temu CTA -->
<section class="py-16">
    <div class="max-w-container-max mx-auto">
        <div class="bg-on-surface rounded-[40px] p-8 md:p-16 relative overflow-hidden text-center md:text-left">
            <div class="absolute top-0 right-0 w-1/3 h-full opacity-10 pointer-events-none hidden md:block">
                <span class="material-symbols-outlined text-[300px] text-white">medical_services</span>
            </div>
            <div class="relative z-10 grid md:grid-cols-2 items-center gap-12">
                <div>
                    <h2 class="text-white text-display-lg font-display-lg mb-6 leading-tight">Siap Menuju Hidup yang Lebih Sehat?</h2>
                    <p class="text-surface-container-highest text-body-lg mb-10 opacity-80">
                        Buat janji temu sekarang secara online dan hindari antrian panjang di loket. Mudah, cepat, dan terintegrasi.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        @auth
                            <a href="#booking-section" class="bg-primary text-on-primary px-10 py-5 rounded-2xl font-bold text-lg hover:shadow-lg transition-all active:scale-95 text-center font-headline-md">
                                Ambil Nomor Antrean
                            </a>
                        @else
                            <a href="{{ url('/LoginPage') }}" class="bg-primary text-on-primary px-10 py-5 rounded-2xl font-bold text-lg hover:shadow-lg transition-all active:scale-95 text-center font-headline-md">
                                Login / Daftar Akun
                            </a>
                        @endauth
                        <a href="{{ url('/contact') }}" class="bg-white/10 backdrop-blur text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/20 transition-all border border-white/20 text-center">
                            Hubungi CS Kami
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-[32px] p-8 soft-card-shadow text-on-surface">
                    <h3 class="text-headline-md font-headline-md mb-6">Statistik Pelayanan</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-4 border border-outline-variant rounded-2xl">
                            <p class="text-primary font-bold text-3xl mb-1">98%</p>
                            <p class="text-secondary text-label-md">Kepuasan Pasien</p>
                        </div>
                        <div class="p-4 border border-outline-variant rounded-2xl">
                            <p class="text-primary font-bold text-3xl mb-1">15mnt</p>
                            <p class="text-secondary text-label-md">Rerata Tunggu</p>
                        </div>
                        <div class="p-4 border border-outline-variant rounded-2xl">
                            <p class="text-primary font-bold text-3xl mb-1">24/7</p>
                            <p class="text-secondary text-label-md">UGD Darurat</p>
                        </div>
                        <div class="p-4 border border-outline-variant rounded-2xl">
                            <p class="text-primary font-bold text-3xl mb-1">50+</p>
                            <p class="text-secondary text-label-md">Dokter &amp; Staf</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="fixed bottom-6 right-6 md:hidden z-[100]">
    @auth
        <a href="#booking-section" class="bg-primary text-on-primary w-14 h-14 rounded-full shadow-lg flex items-center justify-center active:scale-95 transition-all">
            <span class="material-symbols-outlined">calendar_month</span>
        </a>
    @else
        <a href="{{ url('/LoginPage') }}" class="bg-primary text-on-primary w-14 h-14 rounded-full shadow-lg flex items-center justify-center active:scale-95 transition-all">
            <span class="material-symbols-outlined">login</span>
        </a>
    @endauth
</div>
@endsection

@section('scripts')
<!-- Load QRCode.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
    // Simple scroll micro-interaction
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-md');
        } else {
            header.classList.remove('shadow-md');
        }
    });

    // Set active patient type BPJS/Mandiri
    function setPatientType(type) {
        document.getElementById('patient_type').value = type;
        const btnBpjs = document.getElementById('btn-bpjs');
        const btnMandiri = document.getElementById('btn-mandiri');
        
        if (type === 'BPJS') {
            btnBpjs.className = "h-12 rounded-xl border-2 border-primary bg-primary/10 text-primary font-bold text-center active:scale-95 transition-all";
            btnMandiri.className = "h-12 rounded-xl border border-outline-variant hover:bg-surface-container-low text-secondary font-bold text-center active:scale-95 transition-all";
        } else {
            btnBpjs.className = "h-12 rounded-xl border border-outline-variant hover:bg-surface-container-low text-secondary font-bold text-center active:scale-95 transition-all";
            btnMandiri.className = "h-12 rounded-xl border-2 border-primary bg-primary/10 text-primary font-bold text-center active:scale-95 transition-all";
        }
    }

    // Toggle Family inputs
    function toggleFamilyFields(show) {
        const familyFields = document.getElementById('family-fields');
        const nameInput = document.getElementById('family_name');
        const nikInput = document.getElementById('family_nik');
        
        if (show) {
            familyFields.classList.remove('hidden');
            nameInput.setAttribute('required', 'required');
            nikInput.setAttribute('required', 'required');
        } else {
            familyFields.classList.add('hidden');
            nameInput.removeAttribute('required');
            nikInput.removeAttribute('required');
        }
    }

    // Generate QR codes using qrcodejs
    document.querySelectorAll('.qrcode-container').forEach(el => {
        new QRCode(el, {
            text: el.dataset.code,
            width: 110,
            height: 110,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
    });

    // Print functionality
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
</script>
@endsection
