<div>
    <style>
        body {
            background-color: #0b0f19;
            color: #f8fafc;
        }
        .navbar {
            background: #0f172a !important;
            border-bottom: 1px solid #1e293b !important;
        }
        .navbar a, .navbar span, .navbar button {
            color: #f8fafc !important;
        }
        .logo span {
            color: #34d399 !important;
        }
        
        .monitor-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 24px;
        }

        .monitor-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            border: 1px solid #1e293b;
            border-radius: 20px;
            padding: 24px;
            text-align: center;
            margin-bottom: 32px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
        }

        .monitor-header h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }
        
        .monitor-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        @media (max-width: 768px) {
            .monitor-grid {
                grid-template-columns: 1fr;
            }
        }

        .column-title {
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 2px solid #1e293b;
        }

        .column-bpjs .column-title {
            color: #34d399; /* Emerald */
            border-bottom-color: rgba(52, 211, 153, 0.2);
        }

        .column-mandiri .column-title {
            color: #60a5fa; /* Blue */
            border-bottom-color: rgba(96, 165, 250, 0.2);
        }

        .active-card {
            border-radius: 24px;
            padding: 40px 24px;
            text-align: center;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
        }

        .column-bpjs .active-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 6px;
            background: linear-gradient(90deg, #10b981, #34d399);
        }

        .column-mandiri .active-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 6px;
            background: linear-gradient(90deg, #2563eb, #60a5fa);
        }

        .active-card h3 {
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #94a3b8;
            margin-bottom: 16px;
        }

        .active-number {
            font-size: 84px;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 16px;
            font-family: monospace;
            letter-spacing: -2px;
        }

        .column-bpjs .active-number {
            color: #34d399;
            text-shadow: 0 0 20px rgba(52, 211, 153, 0.3);
        }

        .column-mandiri .active-number {
            color: #60a5fa;
            text-shadow: 0 0 20px rgba(96, 165, 250, 0.3);
        }

        .active-name {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 4px;
            color: #f8fafc;
        }

        .active-poli {
            font-size: 16px;
            color: #94a3b8;
            font-weight: 500;
        }

        /* Pulse Animation on Calling State */
        .pulse-effect {
            animation: pulse-glow 2s infinite;
        }

        @keyframes pulse-glow {
            0% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.4); }
            70% { box-shadow: 0 0 0 20px rgba(52, 211, 153, 0); }
            100% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0); }
        }

        .column-mandiri .pulse-effect {
            animation: pulse-glow-blue 2s infinite;
        }

        @keyframes pulse-glow-blue {
            0% { box-shadow: 0 0 0 0 rgba(96, 165, 250, 0.4); }
            70% { box-shadow: 0 0 0 20px rgba(96, 165, 250, 0); }
            100% { box-shadow: 0 0 0 0 rgba(96, 165, 250, 0); }
        }

        .waiting-list-card {
            background: rgba(15, 23, 42, 0.4);
            border: 1px solid #1e293b;
            border-radius: 20px;
            padding: 24px;
        }

        .waiting-list-card h4 {
            font-size: 16px;
            font-weight: 700;
            color: #94a3b8;
            margin-bottom: 16px;
            border-bottom: 1px solid #1e293b;
            padding-bottom: 8px;
        }

        .waiting-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 16px;
            background: #0f172a;
            border-radius: 12px;
            margin-bottom: 10px;
            border: 1px solid #1e293b;
        }

        .waiting-item:last-child {
            margin-bottom: 0;
        }

        .waiting-number {
            font-weight: 800;
            font-family: monospace;
            font-size: 18px;
        }

        .column-bpjs .waiting-number {
            color: #34d399;
        }

        .column-mandiri .waiting-number {
            color: #60a5fa;
        }

        .waiting-details {
            text-align: right;
        }

        .waiting-name {
            font-size: 14px;
            font-weight: 600;
            color: #f8fafc;
        }

        .waiting-poli {
            font-size: 12px;
            color: #64748b;
        }
    </style>

    <div class="monitor-container" wire:poll.2s>
        <!-- TTS Hidden Event Trigger -->
        <div id="tts-trigger"
             data-id="{{ $latestCalling?->id }}"
             data-called-at="{{ $latestCalling?->called_at?->timestamp }}"
             data-number="{{ $latestCalling?->queue_number }}"
             data-name="{{ $latestCalling?->patient_name }}"
             data-poli="{{ $latestCalling?->poliklinik }}"
             style="display: none;">
        </div>

        <!-- Header -->
        <div class="monitor-header">
            <h1>MONITOR ANTREAN UTAMA PUSKESMAS</h1>
            <p style="color: #64748b; font-size: 14px; font-weight: 500; margin-top: 4px;" id="current-time">
                {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
            </p>
        </div>

        <!-- Columns Grid -->
        <div class="monitor-grid">
            
            <!-- Left Column: BPJS -->
            <div class="column-bpjs">
                <div class="column-title">
                    <i data-lucide="shield-check" style="display: inline-block; vertical-align: middle; margin-right: 8px;"></i>
                    JALUR BPJS KESEHATAN
                </div>

                <!-- Calling -->
                <div class="active-card {{ $callingBPJS ? 'pulse-effect' : '' }}">
                    <h3>Sedang Dipanggil</h3>
                    @if($callingBPJS)
                        <div class="active-number">{{ $callingBPJS->queue_number }}</div>
                        <div class="active-name">{{ $callingBPJS->patient_name }}</div>
                        <div class="active-poli">{{ $callingBPJS->poliklinik }}</div>
                    @else
                        <div class="active-number" style="color: #475569; font-size: 48px; padding: 18px 0;">KOSONG</div>
                        <div class="active-name" style="color: #475569; font-size: 16px;">Tidak ada panggilan aktif</div>
                        <div class="active-poli">-</div>
                    @endif
                </div>

                <!-- Waiting List -->
                <div class="waiting-list-card">
                    <h4>Antrean Berikutnya</h4>
                    @if($pendingBPJS->isEmpty())
                        <div style="text-align: center; color: #475569; padding: 20px 0; font-size: 14px;">Tidak ada antrean menunggu</div>
                    @else
                        @foreach($pendingBPJS as $item)
                            <div class="waiting-item">
                                <div class="waiting-number">{{ $item->queue_number }}</div>
                                <div class="waiting-details">
                                    <div class="waiting-name">{{ $item->patient_name }}</div>
                                    <div class="waiting-poli">{{ $item->poliklinik }}</div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Right Column: Mandiri -->
            <div class="column-mandiri">
                <div class="column-title">
                    <i data-lucide="user-check" style="display: inline-block; vertical-align: middle; margin-right: 8px;"></i>
                    JALUR MANDIRI / UMUM
                </div>

                <!-- Calling -->
                <div class="active-card {{ $callingMandiri ? 'pulse-effect' : '' }}">
                    <h3>Sedang Dipanggil</h3>
                    @if($callingMandiri)
                        <div class="active-number">{{ $callingMandiri->queue_number }}</div>
                        <div class="active-name">{{ $callingMandiri->patient_name }}</div>
                        <div class="active-poli">{{ $callingMandiri->poliklinik }}</div>
                    @else
                        <div class="active-number" style="color: #475569; font-size: 48px; padding: 18px 0;">KOSONG</div>
                        <div class="active-name" style="color: #475569; font-size: 16px;">Tidak ada panggilan aktif</div>
                        <div class="active-poli">-</div>
                    @endif
                </div>

                <!-- Waiting List -->
                <div class="waiting-list-card">
                    <h4>Antrean Berikutnya</h4>
                    @if($pendingMandiri->isEmpty())
                        <div style="text-align: center; color: #475569; padding: 20px 0; font-size: 14px;">Tidak ada antrean menunggu</div>
                    @else
                        @foreach($pendingMandiri as $item)
                            <div class="waiting-item">
                                <div class="waiting-number">{{ $item->queue_number }}</div>
                                <div class="waiting-details">
                                    <div class="waiting-name">{{ $item->patient_name }}</div>
                                    <div class="waiting-poli">{{ $item->poliklinik }}</div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

    <!-- Text-To-Speech (TTS) Voice Engine JavaScript -->
    <script>
        let lastCalledId = null;
        let lastCalledTime = null;

        function runTtsEngine() {
            const trigger = document.getElementById('tts-trigger');
            if (!trigger) return;

            const id = trigger.getAttribute('data-id');
            const calledAt = trigger.getAttribute('data-called-at');
            const number = trigger.getAttribute('data-number');
            const name = trigger.getAttribute('data-name');
            const poli = trigger.getAttribute('data-poli');

            // If we have an active call, and it is new or recalled
            if (id && (id !== lastCalledId || calledAt !== lastCalledTime)) {
                lastCalledId = id;
                lastCalledTime = calledAt;
                
                speakQueueCallout(number, name, poli);
            }
        }

        function speakQueueCallout(number, name, poli) {
            if (!('speechSynthesis' in window)) {
                console.error('Speech Synthesis is not supported in this browser.');
                return;
            }

            // Stop any ongoing voice speech immediately
            window.speechSynthesis.cancel();

            // Spelling out queue number naturally
            // E.g., B-01 -> B, kosong satu. M-12 -> M, dua belas.
            let formattedNumber = number;
            
            // Extract letter and digits
            const match = number.match(/^([A-Z])-?(\d+)$/i);
            if (match) {
                const letter = match[1];
                let digits = parseInt(match[2], 10);
                
                // Keep zero spoken if single digit e.g. "kosong satu"
                let digitsSpoken = digits.toString();
                if (match[2].startsWith('0') && match[2].length > 1) {
                    digitsSpoken = "kosong, " + digits;
                }
                
                formattedNumber = `${letter}, ${digitsSpoken}`;
            }

            // Build natural Indonesian sentence
            let sentence = `Nomor antrean, ${formattedNumber}, atas nama, ${name}, silakan menuju ke, ${poli}`;
            
            let utterance = new SpeechSynthesisUtterance(sentence);
            utterance.lang = 'id-ID';
            utterance.rate = 0.85; // slightly slower for auditability
            utterance.pitch = 1.0;

            // Load Indonesian voice if available
            const voices = window.speechSynthesis.getVoices();
            const indVoice = voices.find(v => v.lang.includes('id') || v.lang.includes('ID'));
            if (indVoice) {
                utterance.voice = indVoice;
            }

            window.speechSynthesis.speak(utterance);
        }

        // Initialize polling checks for TTS trigger
        setInterval(runTtsEngine, 500);

        // Update Clock locally
        function updateClock() {
            const timeEl = document.getElementById('current-time');
            if (timeEl) {
                const now = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
                timeEl.innerText = now.toLocaleDateString('id-ID', options) + ' WIB';
            }
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</div>
