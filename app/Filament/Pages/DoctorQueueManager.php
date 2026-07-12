<?php

namespace App\Filament\Pages;

use App\Models\Queue;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Livewire\Attributes\Url;

class DoctorQueueManager extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationLabel = 'Pemanggilan Antrean';

    protected static ?string $title = 'Pemanggilan Antrean';

    protected static string $view = 'filament.pages.doctor-queue-manager';

    #[Url]
    public ?string $poliklinik = 'Poli Umum';

    // Prescription Form State
    public array $selectedMedicines = [];
    public string $prescriptionNotes = '';

    public function mount(): void
    {
        // Authorize: only doctors and admins can access this page
        if (!in_array(auth()->user()->role, ['doctor', 'admin'])) {
            abort(403);
        }
        $this->resetPrescriptionForm();
    }

    public function getCallingPatientProperty()
    {
        return Queue::where('date', now()->toDateString())
            ->where('poliklinik', $this->poliklinik)
            ->where('status', 'calling')
            ->orderBy('called_at', 'desc')
            ->first();
    }

    public function getPendingPatientsProperty()
    {
        return Queue::where('date', now()->toDateString())
            ->where('poliklinik', $this->poliklinik)
            ->where('status', 'pending')
            ->orderBy('id', 'asc')
            ->get();
    }

    public function getHistoryPatientsProperty()
    {
        return Queue::where('date', now()->toDateString())
            ->where('poliklinik', $this->poliklinik)
            ->whereIn('status', ['completed', 'skipped'])
            ->orderBy('updated_at', 'desc')
            ->get();
    }

    public function callNext(): void
    {
        $this->resetPrescriptionForm();
        
        // Complete the current calling patient if exists
        $currentCalling = $this->callingPatient;
        if ($currentCalling) {
            $currentCalling->update(['status' => 'completed']);
        }

        // Get the next pending patient
        $next = Queue::where('date', now()->toDateString())
            ->where('poliklinik', $this->poliklinik)
            ->where('status', 'pending')
            ->orderBy('id', 'asc')
            ->first();

        if ($next) {
            $next->update([
                'status' => 'calling',
                'called_at' => now(),
            ]);
            
            $this->dispatch('patient-called');
            
            Notification::make()
                ->title('Pasien ' . $next->queue_number . ' dipanggil.')
                ->success()
                ->send();
        } else {
            Notification::make()
                ->title('Tidak ada pasien menunggu dalam antrean.')
                ->warning()
                ->send();
        }
    }

    public function recall(int $id): void
    {
        $queue = Queue::find($id);
        if ($queue && $queue->status === 'calling') {
            $queue->update([
                'called_at' => now(),
            ]);
            
            $this->dispatch('patient-called');
            
            Notification::make()
                ->title('Panggilan ulang pasien ' . $queue->queue_number . ' dikirim.')
                ->info()
                ->send();
        }
    }

    public function complete(int $id): void
    {
        $queue = Queue::find($id);
        if ($queue) {
            $queue->update(['status' => 'completed']);
            
            Notification::make()
                ->title('Pasien ' . $queue->queue_number . ' selesai diperiksa.')
                ->success()
                ->send();
        }
    }

    public function skip(int $id): void
    {
        $queue = Queue::find($id);
        if ($queue) {
            $queue->update(['status' => 'skipped']);
            
            Notification::make()
                ->title('Pasien ' . $queue->queue_number . ' dilewati.')
                ->danger()
                ->send();
        }
    }

    public function resetManual(): void
    {
        $queue = Queue::where('date', now()->toDateString())->delete();
        $this->resetPrescriptionForm();
        
        Notification::make()
            ->title('Seluruh antrean hari ini telah berhasil di-reset.')
            ->success()
            ->send();
    }

    // Prescription Helpers
    public function resetPrescriptionForm(): void
    {
        $this->selectedMedicines = [['medicine_id' => '', 'quantity' => 1, 'dosage' => '3x1']];
        $this->prescriptionNotes = '';
    }

    public function addMedicineRow(): void
    {
        $this->selectedMedicines[] = ['medicine_id' => '', 'quantity' => 1, 'dosage' => '3x1'];
    }

    public function removeMedicineRow(int $index): void
    {
        unset($this->selectedMedicines[$index]);
        $this->selectedMedicines = array_values($this->selectedMedicines);
    }

    public function savePrescription(): void
    {
        $activePatient = $this->callingPatient;
        if (!$activePatient) {
            Notification::make()
                ->title('Tidak ada pasien aktif yang sedang dipanggil.')
                ->danger()
                ->send();
            return;
        }

        // Validate at least one medicine is selected
        $validMedicines = [];
        foreach ($this->selectedMedicines as $item) {
            if (!empty($item['medicine_id'])) {
                $med = \App\Models\Medicine::find($item['medicine_id']);
                if ($med) {
                    $validMedicines[] = [
                        'medicine_id' => $med->id,
                        'name' => $med->name,
                        'quantity' => (int)$item['quantity'],
                        'dosage' => $item['dosage'] ?? '3x1',
                    ];
                }
            }
        }

        if (empty($validMedicines)) {
            Notification::make()
                ->title('Pilih setidaknya satu obat yang valid.')
                ->danger()
                ->send();
            return;
        }

        // Save Prescription
        \App\Models\Prescription::create([
            'queue_id' => $activePatient->id,
            'patient_nik' => $activePatient->patient_nik,
            'patient_name' => $activePatient->patient_name,
            'doctor_name' => auth()->user()->name,
            'status' => 'pending',
            'notes' => $this->prescriptionNotes,
            'medicines_data' => $validMedicines,
        ]);

        Notification::make()
            ->title('Resep obat berhasil dikirim ke Farmasi.')
            ->success()
            ->send();

        $this->resetPrescriptionForm();
    }

    public function getMedicinesProperty()
    {
        return \App\Models\Medicine::all();
    }
}
