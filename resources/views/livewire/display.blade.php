<div wire:poll.2s class="min-h-screen flex flex-col justify-between">
    <!-- Top App Bar -->
    <header class="flex justify-between items-center px-8 w-full h-20 bg-surface border-b border-outline-variant fixed top-0 z-50">
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined text-primary text-[40px]">health_and_safety</span>
            <div class="flex flex-col">
                <span class="font-headline-lg text-headline-lg font-bold text-primary leading-tight">Puskesmas Sejahtera</span>
                <span class="font-label-md text-label-md text-on-surface-variant">Sistem Informasi Antrean Terpadu</span>
            </div>
        </div>
        <div class="flex items-center gap-8">
            <div class="text-right">
                <div id="current-time" class="font-headline-md text-headline-md text-on-surface">10:45:22</div>
                <div id="current-date" class="font-label-md text-label-md text-on-surface-variant">Senin, 24 Mei 2024</div>
            </div>
            <div class="flex gap-4">
                <span onclick="testVoice()" class="material-symbols-outlined text-primary cursor-pointer hover:bg-tertiary-container/10 transition-colors p-2 rounded-full" title="Tes Suara Panggilan">volume_up</span>
                <span onclick="toggleFullscreen()" class="material-symbols-outlined text-primary cursor-pointer hover:bg-tertiary-container/10 transition-colors p-2 rounded-full" title="Fullscreen">fullscreen</span>
            </div>
        </div>
    </header>

    <!-- Main Content Canvas -->
    <main class="ml-0 mt-20 p-8 h-[calc(100vh-80px-60px)] overflow-y-auto">
        <div class="bento-grid container-max mx-auto">
            <!-- CURRENT CALL SECTION (Primary Focus) -->
            <section class="col-span-12 lg:col-span-8 row-span-4 bg-white rounded-[32px] border border-outline-variant shadow-sm overflow-hidden flex flex-col relative">
                <!-- Background Decoration -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary-container/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
                <div class="p-8 flex justify-between items-start z-10">
                    <div>
                        <h2 class="text-primary font-headline-lg flex items-center gap-3 font-bold">
                            <span class="material-symbols-outlined text-[32px]">campaign</span>
                            Panggilan Aktif
                        </h2>
                        <p class="text-on-surface-variant font-body-lg">Silakan menuju unit layanan berikut</p>
                    </div>
                    @if($latestCalling)
                        @php
                            $loket = 'Loket 2';
                            if ($latestCalling->poliklinik === 'Poli Gigi') {
                                $loket = 'Loket 3';
                            } elseif ($latestCalling->poliklinik === 'Poli KIA') {
                                $loket = 'Loket 4';
                            } elseif ($latestCalling->poliklinik === 'Poli Anak') {
                                $loket = 'Loket 5';
                            }
                        @endphp
                        <div class="flex items-center gap-4 bg-surface-container px-6 py-3 rounded-full border border-outline-variant">
                            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">location_on</span>
                            <span class="font-headline-md text-primary font-bold">{{ $loket }} - {{ $latestCalling->poliklinik }}</span>
                        </div>
                    @else
                        <div class="flex items-center gap-4 bg-surface-container px-6 py-3 rounded-full border border-outline-variant">
                            <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">location_off</span>
                            <span class="font-headline-md text-secondary font-bold">-</span>
                        </div>
                    @endif
                </div>

                <div class="flex-grow flex flex-col items-center justify-center p-8 z-10">
                    @if($latestCalling)
                        <div class="relative mb-12">
                            <!-- Calling Animation Speaker Icon -->
                            <div class="relative z-20 bg-primary-container text-on-primary-container w-32 h-32 rounded-full flex items-center justify-center shadow-lg">
                                <span class="material-symbols-outlined text-[64px] animate-bounce">volume_up</span>
                            </div>
                            <div class="pulse-effect"></div>
                            <div class="pulse-effect" style="animation-delay: 0.5s"></div>
                            <div class="pulse-effect" style="animation-delay: 1s"></div>
                        </div>
                        <div class="text-center">
                            <span class="text-[160px] leading-none font-extrabold tracking-tighter text-on-surface block mb-4">{{ $latestCalling->queue_number }}</span>
                            <h3 class="text-headline-lg font-bold text-on-surface-variant uppercase tracking-widest">{{ $latestCalling->patient_name }}</h3>
                        </div>
                    @else
                        <div class="text-center py-16">
                            <span class="material-symbols-outlined text-secondary text-8xl mb-4">notifications_off</span>
                            <h3 class="text-headline-lg font-bold text-secondary">Belum Ada Panggilan Antrean</h3>
                            <p class="text-secondary/70 mt-2 max-w-sm mx-auto">Silakan menunggu hingga nomor antrean Anda dipanggil oleh dokter.</p>
                        </div>
                    @endif
                </div>

                <div class="bg-primary-container/10 p-6 flex justify-center items-center gap-6 border-t border-outline-variant z-10">
                    <span class="material-symbols-outlined text-primary">info</span>
                    <p class="text-on-primary-container font-label-md">Harap siapkan Kartu Berobat dan KTP untuk verifikasi di loket poli.</p>
                </div>
            </section>

            <!-- MEDIA / INFO SECTION -->
            <aside class="col-span-12 lg:col-span-4 row-span-4 flex flex-col gap-6">
                <!-- Health Video/Information -->
                <div class="h-[260px] bg-inverse-surface rounded-[32px] overflow-hidden relative group">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-500 z-10 flex flex-col justify-end p-6">
                        <span class="bg-primary text-white font-label-md px-3 py-1 rounded-full w-fit mb-2">Tips Kesehatan</span>
                        <h4 class="text-white font-headline-md leading-tight">Pentingnya Mencuci Tangan Selama 20 Detik</h4>
                    </div>
                    <img class="w-full h-full object-cover" data-alt="A health professional demonstrating proper handwashing technique." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-oT44iYseCfpUJ-T3ETArbFW1e-hlcVkE5s76MOXjyXRsGBprwJLv6ZWI3xBJZ3iO6fAzakHJ7HAhSipR3ENlTpVRabkqap6ZlDsbV2PfJbO03C84KPIsivFQZk3ELD3rUx54P0xrGG7-wxm-pI5siDg-alHr2JoM9OBcVzNOV6rZ5ajdOkKcpTlL7y9P6eI09bIKjgMLH6IpxeNFrwO2v4uMdjktMdERPcrqXHnCullGGxz_tcdRYk214BE_eQyj0zCTLNLw2e0"/>
                </div>

                <!-- Upcoming Queues (Bento Style) -->
                <div class="flex-grow bg-surface-container-high rounded-[32px] p-6 border border-outline-variant flex flex-col min-h-[300px]">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-headline-md text-primary font-bold">Antrean Berikutnya</h3>
                        <span class="material-symbols-outlined text-on-surface-variant">list_alt</span>
                    </div>
                    <div class="space-y-4 overflow-y-auto pr-2 custom-scrollbar">
                        @forelse($pendingQueues as $p)
                            <div class="bg-white p-4 rounded-2xl border border-outline-variant flex items-center justify-between hover:border-primary transition-colors cursor-default">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-surface-container-low rounded-xl flex items-center justify-center font-bold text-primary">{{ $p->queue_number }}</div>
                                    <div>
                                        <p class="font-label-md text-on-surface font-bold">{{ $p->patient_name }}</p>
                                        <p class="text-[12px] text-on-surface-variant">{{ $p->poliklinik }}</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-outline">hourglass_empty</span>
                            </div>
                        @empty
                            <p class="text-center py-12 text-secondary text-sm">Tidak ada antrean tunggu berikutnya.</p>
                        @endforelse
                    </div>
                    <div class="mt-auto pt-4 text-center border-t border-outline-variant/30">
                        <p class="text-[12px] text-on-surface-variant">Total antrean saat ini: {{ $totalPending }} pasien</p>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <!-- Footer Status Bar -->
    <footer class="w-full h-[60px] px-8 bg-surface-dim flex justify-between items-center fixed bottom-0 left-0 z-50 border-t border-outline-variant">
        <div class="flex gap-6 items-center">
            <span class="font-label-md text-primary font-bold">© 2026 Puskesmas Sejahtera</span>
            <div class="h-4 w-[1px] bg-outline-variant"></div>
            <span class="font-label-md text-on-secondary-container">Sistem Informasi Antrean Terpadu</span>
        </div>
        <div class="flex gap-6 items-center">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[18px]">wifi</span>
                <span class="text-[12px] text-on-secondary-container">Koneksi Server Stabil</span>
            </div>
            <div class="flex gap-4">
                <a class="font-label-md text-on-secondary-container hover:text-primary transition-colors hover:underline underline-offset-4" href="{{ url('/services') }}">Layanan</a>
                <a class="font-label-md text-on-secondary-container hover:text-primary transition-colors hover:underline underline-offset-4" href="{{ url('/contact') }}">Hubungi Kami</a>
            </div>
        </div>
    </footer>

    <!-- Hidden audio voice data node for tracking changes -->
    <div id="active-ticket-data" 
         data-ticket-id="{{ $latestCalling ? $latestCalling->id : '' }}" 
         data-ticket-number="{{ $latestCalling ? $latestCalling->queue_number : '' }}"
         data-ticket-loket="{{ $latestCalling ? ($latestCalling->poliklinik === 'Poli Umum' ? '2' : ($latestCalling->poliklinik === 'Poli Gigi' ? '3' : ($latestCalling->poliklinik === 'Poli KIA' ? '4' : '5'))) : '' }}">
    </div>

    <!-- Script Layer -->
    <script>
        // Real-time clock update
        function updateClock() {
            const now = new Date();
            const timeStr = now.toLocaleTimeString('id-ID', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit' });
            const dateStr = now.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
            
            const timeEl = document.getElementById('current-time');
            const dateEl = document.getElementById('current-date');
            if (timeEl) timeEl.textContent = timeStr;
            if (dateEl) dateEl.textContent = dateStr;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // Screen Fullscreen toggle
        function toggleFullscreen() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen().catch(err => {
                    console.log(`Error attempting to enable full-screen mode: ${err.message}`);
                });
            } else {
                document.exitFullscreen();
            }
        }

        // Voice call logic (Google Translate TTS with Web Speech API fallback)
        let lastPlayedId = localStorage.getItem('last_played_ticket_id') || '';

        function checkAndPlayCall() {
            const dataEl = document.getElementById('active-ticket-data');
            if (!dataEl) return;

            const ticketId = dataEl.getAttribute('data-ticket-id');
            const ticketNumber = dataEl.getAttribute('data-ticket-number');
            const loket = dataEl.getAttribute('data-ticket-loket');

            if (ticketId && ticketId !== lastPlayedId) {
                lastPlayedId = ticketId;
                localStorage.setItem('last_played_ticket_id', ticketId);
                triggerVoiceCall(ticketNumber, loket);
            }
        }

        function triggerVoiceCall(ticketNumber, loket) {
            let formattedTicket = ticketNumber.replace('-', ' ');
            formattedTicket = formattedTicket.replace(/0/g, 'kosong ');

            speakAntrean(`Nomor antrean ${formattedTicket}, silakan menuju ke loket ${loket}`);
        }

        function speakAntrean(text) {
            const audio = new Audio(
                `https://translate.google.com/translate_tts?ie=UTF-8&q=${encodeURIComponent(text)}&tl=id&client=tw-ob`
            );

            audio.play().catch(() => {
                // fallback ke Web Speech API kalau endpoint gagal/diblokir
                fallbackSpeak(text);
            });
        }

        function fallbackSpeak(text) {
            const utter = new SpeechSynthesisUtterance(text);
            utter.lang = 'id-ID';
            utter.rate = 0.9;   // sedikit lebih lambat, kesan lebih natural
            utter.pitch = 1;

            // pilih voice ID yang paling bagus kalau tersedia
            const voices = speechSynthesis.getVoices();
            const idVoice = voices.find(v => v.lang === 'id-ID') || voices.find(v => v.lang.startsWith('id'));
            if (idVoice) utter.voice = idVoice;

            speechSynthesis.speak(utter);
        }

        // Clickable speaker icon to test sound
        function testVoice() {
            triggerVoiceCall('TES-99', 'Uji Coba');
        }

        // Run check periodically
        setInterval(checkAndPlayCall, 1000);
        checkAndPlayCall();
    </script>
</div>
