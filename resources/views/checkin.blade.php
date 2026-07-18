@extends('layouts.app')

@section('title', 'Mesin Check-In Mandiri')

@section('content')
<div class="checkin-layout">
    <div class="checkin-card card">
        <div class="checkin-icon-big">🏥</div>
        <h2>Mesin Mandiri Check-In Puskesmas</h2>
        <p style="color: var(--gray-500); font-size: 14px; margin-top: 6px;">
            Tunjukkan QR Code e-tiket Anda ke scanner atau masukkan nomor antrean di bawah ini setibanya Anda di Puskesmas.
        </p>

        @if(session('success'))
            <div class="form-success mt-4" style="text-align: left;">
                <div style="font-weight: 700; margin-bottom: 4px;">Berhasil Valid!</div>
                {{ session('success') }}
                @if(session('ticket'))
                    <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid rgba(0,0,0,0.05); font-size: 13px;">
                        <div style="display: flex; justify-content: space-between;">
                            <span>Nama Pasien:</span>
                            <strong>{{ session('ticket')->patient_name }}</strong>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-top: 4px;">
                            <span>Poliklinik:</span>
                            <strong>{{ session('ticket')->poliklinik }}</strong>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-top: 4px; margin-bottom: 12px;">
                            <span>Sesi Waktu:</span>
                            <strong>{{ session('ticket')->session }}</strong>
                        </div>
                        <button type="button" onclick="printCheckinTicket()" class="btn btn-secondary btn-sm" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 6px;">
                            🖨️ Cetak Tiket Antrean
                        </button>
                    </div>

                    <!-- Hidden Check-in Ticket for Printing -->
                    <div id="print-checkin-ticket-content" class="hidden" style="display: none;">
                        <h2 style="font-size: 18px; margin: 5px 0; font-weight: bold; text-align: center;">Puskesmas Sejahtera</h2>
                        <p style="font-size: 11px; color: #666; text-align: center; margin: 0 0 10px 0;">E-Tiket Kunjungan Antrean</p>
                        <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                        <h1 style="font-size: 40px; margin: 10px 0; font-weight: 800; text-align: center; color: #006c49;">{{ session('ticket')->queue_number }}</h1>
                        <p style="font-size: 14px; font-weight: bold; text-align: center; margin: 5px 0;">{{ session('ticket')->poliklinik }}</p>
                        <p style="font-size: 12px; margin: 4px 0;">Pasien: {{ session('ticket')->patient_name }}</p>
                        <p style="font-size: 12px; margin: 4px 0;">NIK: {{ session('ticket')->patient_nik }}</p>
                        <p style="font-size: 12px; margin: 4px 0;">Tanggal: {{ \Carbon\Carbon::parse(session('ticket')->date)->isoFormat('dddd, D MMM Y') }}</p>
                        <p style="font-size: 12px; margin: 4px 0;">Sesi: {{ session('ticket')->session }} ({{ session('ticket')->session === 'Pagi' ? '08:00-11:00' : '13:00-15:00' }})</p>
                        <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                        <div style="text-align: center; margin: 15px 0;">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data={{ urlencode(route('queues.download-ticket', ['id' => session('ticket')->id])) }}" style="width: 120px; height: 120px; border: 1px solid #ccc; padding: 4px; border-radius: 6px;" alt="QR Code">
                            <p style="font-size: 9px; color: #777; margin-top: 5px; line-height: 1.2;">Scan QR Code di atas menggunakan kamera HP Anda untuk mengunduh E-Tiket ini secara otomatis ke galeri internal Anda.</p>
                        </div>
                        <hr style="border: none; border-top: 1px dashed #000; margin: 10px 0;" />
                        <p style="font-size: 10px; color: #666; text-align: center;">Harap datang 15 menit sebelum sesi dimulai. Semoga sehat selalu.</p>
                    </div>

                    <script>
                        function printCheckinTicket() {
                            const printContent = document.getElementById('print-checkin-ticket-content').innerHTML;
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
                @endif
            </div>
        @endif

        @if(session('error'))
            <div class="form-alert mt-4" style="text-align: left;">
                <div style="font-weight: 700; margin-bottom: 4px;">Perhatian</div>
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('queues.checkin') }}" method="POST">
            @csrf
            <div class="checkin-input-box">
                <input 
                    type="text" 
                    name="queue_number" 
                    placeholder="Contoh: B-01 atau M-02"
                    style="text-transform: uppercase;"
                    required
                    autofocus
                >
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px;">
                Check-in Sekarang
            </button>
        </form>
    </div>
</div>
@endsection
