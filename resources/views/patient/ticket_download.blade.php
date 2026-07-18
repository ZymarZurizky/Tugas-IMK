<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tiket Antrean - {{ $queue->queue_number }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }
        .ticket-card {
            background-color: #ffffff;
            border-radius: 24px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .ticket-header {
            background-color: #006c49;
            color: #ffffff;
            padding: 24px;
            text-align: center;
            position: relative;
        }
        .ticket-header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
        }
        .ticket-header p {
            margin: 4px 0 0 0;
            font-size: 13px;
            opacity: 0.9;
        }
        .ticket-body {
            padding: 24px;
        }
        .queue-focus {
            text-align: center;
            margin-bottom: 24px;
        }
        .queue-number {
            font-size: 64px;
            font-weight: 800;
            color: #006c49;
            margin: 0;
            line-height: 1;
            letter-spacing: -2px;
        }
        .queue-label {
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            color: #64748b;
            letter-spacing: 1px;
            margin-top: 8px;
            display: block;
        }
        .divider {
            border: none;
            border-top: 2px dashed #e2e8f0;
            margin: 20px 0;
            position: relative;
        }
        .divider::before, .divider::after {
            content: '';
            position: absolute;
            top: -10px;
            width: 20px;
            height: 20px;
            background-color: #f1f5f9;
            border-radius: 50%;
        }
        .divider::before {
            left: -35px;
        }
        .divider::after {
            right: -35px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }
        .info-item label {
            font-size: 11px;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            display: block;
            margin-bottom: 2px;
        }
        .info-item span {
            font-size: 14px;
            font-weight: 700;
            color: #1e293b;
        }
        .qr-section {
            text-align: center;
            margin-top: 24px;
        }
        .qr-code {
            width: 140px;
            height: 140px;
            margin: 0 auto;
            border: 4px solid #f8fafc;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .qr-label {
            font-size: 11px;
            color: #64748b;
            margin-top: 8px;
            font-style: italic;
        }
        .ticket-footer {
            background-color: #f8fafc;
            padding: 16px;
            text-align: center;
            border-top: 1px solid #f1f5f9;
            font-size: 11px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="ticket-card">
        <div class="ticket-header">
            <h1>E-TIKET ANTREAN</h1>
            <p>Puskesmas Sejahtera</p>
        </div>
        <div class="ticket-body">
            <div class="queue-focus">
                <h2 class="queue-number">{{ $queue->queue_number }}</h2>
                <span class="queue-label">Nomor Antrean Anda</span>
            </div>
            
            <div class="divider"></div>
            
            <div class="info-grid">
                <div class="info-item" style="grid-column: span 2;">
                    <label>Nama Pasien</label>
                    <span>{{ $queue->patient_name }}</span>
                </div>
                <div class="info-item">
                    <label>Poliklinik</label>
                    <span>{{ $queue->poliklinik }}</span>
                </div>
                <div class="info-item">
                    <label>Sesi Waktu</label>
                    <span>{{ $queue->session }} ({{ $queue->session === 'Pagi' ? '08:00 - 11:00' : '13:00 - 15:00' }})</span>
                </div>
                <div class="info-item">
                    <label>Tanggal Kunjungan</label>
                    <span>{{ \Carbon\Carbon::parse($queue->date)->isoFormat('D MMM Y') }}</span>
                </div>
                <div class="info-item">
                    <label>Metode/Jalur</label>
                    <span>{{ $queue->patient_type }}</span>
                </div>
            </div>
            
            <div class="divider"></div>
            
            <div class="qr-section">
                <img class="qr-code" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode(route('queues.download-ticket', ['id' => $queue->id])) }}" alt="Barcode Antrean">
                <p class="qr-label">Scan QR Code ini untuk mengunduh e-tiket kembali.</p>
            </div>
        </div>
        <div class="ticket-footer">
            Harap datang 15 menit sebelum sesi dimulai. Tunjukkan e-tiket ini di loket atau mesin check-in.
        </div>
    </div>
</body>
</html>
