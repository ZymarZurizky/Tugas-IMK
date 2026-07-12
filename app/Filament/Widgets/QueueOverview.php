<?php

namespace App\Filament\Widgets;

use App\Models\Queue;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class QueueOverview extends BaseWidget
{
    // Poll stats every 5 seconds to keep it live
    protected static ?string $pollingInterval = '5s';

    protected function getStats(): array
    {
        $today = now()->toDateString();
        
        $bpjsCount = Queue::where('date', $today)->where('patient_type', 'BPJS')->count();
        $mandiriCount = Queue::where('date', $today)->where('patient_type', 'Mandiri')->count();
        $pendingCount = Queue::where('date', $today)->where('status', 'pending')->count();
        $completedCount = Queue::where('date', $today)->whereIn('status', ['completed', 'skipped'])->count();

        return [
            Stat::make('Antrean BPJS Hari Ini', $bpjsCount)
                ->description('Total pendaftar BPJS')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
            Stat::make('Antrean Mandiri Hari Ini', $mandiriCount)
                ->description('Total pendaftar Mandiri')
                ->descriptionIcon('heroicon-m-credit-card')
                ->color('info'),
            Stat::make('Pasien Menunggu', $pendingCount)
                ->description('Belum dilayani')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
            Stat::make('Selesai / Terlewati', $completedCount)
                ->description('Selesai diperiksa / dilewati')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
        ];
    }
}
