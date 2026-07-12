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
                        <div style="display: flex; justify-content: space-between; margin-top: 4px;">
                            <span>Sesi Waktu:</span>
                            <strong>{{ session('ticket')->session }}</strong>
                        </div>
                    </div>
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
