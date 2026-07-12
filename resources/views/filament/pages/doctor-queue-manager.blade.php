<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Poli Selector and Active Patient -->
        <div class="md:col-span-2 space-y-6">
            <!-- Poli Selector Card -->
            <div class="p-6 bg-white rounded-xl border border-gray-100 shadow-sm dark:bg-gray-900 dark:border-gray-800">
                <h3 class="text-lg font-bold mb-4">Poliklinik Bertugas</h3>
                <div class="flex gap-4">
                    <select wire:model.live="poliklinik" class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                        <option value="Poli Umum">Poli Umum</option>
                        <option value="Poli Gigi">Poli Gigi</option>
                        <option value="Poli KIA">Poli KIA (Kesehatan Ibu & Anak)</option>
                        <option value="Poli Anak">Poli Anak</option>
                    </select>
                </div>
            </div>

            <!-- Active Called Patient Card -->
            <div class="p-6 bg-white rounded-xl border border-gray-100 shadow-sm dark:bg-gray-900 dark:border-gray-800">
                <h3 class="text-lg font-bold mb-4">Pasien Sedang Dipanggil</h3>
                
                @if($this->callingPatient)
                    <div class="flex flex-col items-center justify-center p-8 bg-emerald-50 rounded-xl border border-emerald-100 text-center dark:bg-emerald-950/20 dark:border-emerald-900/30">
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-800 text-sm font-semibold rounded-full dark:bg-emerald-900 dark:text-emerald-200 mb-4">
                            Jalur {{ $this->callingPatient->patient_type }}
                        </span>
                        <h1 class="text-6xl font-extrabold text-emerald-900 dark:text-emerald-400 mb-2">{{ $this->callingPatient->queue_number }}</h1>
                        <p class="text-xl font-semibold mb-1 dark:text-white">{{ $this->callingPatient->patient_name }}</p>
                        <p class="text-gray-500 text-sm mb-6">NIK: {{ $this->callingPatient->patient_nik }}</p>
                        
                        <div class="flex gap-3">
                            <x-filament::button wire:click="recall({{ $this->callingPatient->id }})" color="warning" icon="heroicon-o-arrow-path">
                                Panggil Ulang
                            </x-filament::button>
                            <x-filament::button wire:click="complete({{ $this->callingPatient->id }})" color="success" icon="heroicon-o-check-circle">
                                Selesai Periksa
                            </x-filament::button>
                            <x-filament::button wire:click="skip({{ $this->callingPatient->id }})" color="danger" icon="heroicon-o-x-circle">
                                Lewati
                            </x-filament::button>
                        </div>
                    </div>

                    <!-- Prescription Section -->
                    <div class="mt-8 pt-8 border-t border-gray-100 dark:border-gray-800">
                        <h4 class="text-md font-bold mb-4 flex items-center gap-2 dark:text-white">
                            <span class="material-symbols-outlined text-primary text-[20px]">description</span>
                            Input Resep Obat (Pharmacy)
                        </h4>
                        
                        <div class="space-y-4">
                            @foreach($selectedMedicines as $index => $item)
                                <div class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-end">
                                    <div class="sm:col-span-5">
                                        <label class="block text-xs font-bold text-gray-500 mb-1">Nama Obat</label>
                                        <select wire:model="selectedMedicines.{{ $index }}.medicine_id" class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                            <option value="">-- Pilih Obat --</option>
                                            @foreach($this->medicines as $med)
                                                <option value="{{ $med->id }}">{{ $med->name }} (Stok: {{ $med->stock }} {{ $med->unit }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label class="block text-xs font-bold text-gray-500 mb-1">Jumlah</label>
                                        <input type="number" wire:model="selectedMedicines.{{ $index }}.quantity" min="1" class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white"/>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label class="block text-xs font-bold text-gray-500 mb-1">Aturan Pakai</label>
                                        <input type="text" wire:model="selectedMedicines.{{ $index }}.dosage" placeholder="3x1, 2x1, dll" class="w-full bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white"/>
                                    </div>
                                    <div class="sm:col-span-2 flex justify-end">
                                        @if(count($selectedMedicines) > 1)
                                            <x-filament::button wire:click="removeMedicineRow({{ $index }})" color="danger" icon="heroicon-o-trash" class="w-full justify-center">
                                                Hapus
                                            </x-filament::button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            
                            <div class="flex justify-start">
                                <x-filament::button wire:click="addMedicineRow" color="gray" icon="heroicon-o-plus" size="sm">
                                    Tambah Obat
                                </x-filament::button>
                            </div>
                            
                            <div class="space-y-2 mt-4">
                                <label class="block text-xs font-bold text-gray-500">Catatan Medis & Keterangan Resep</label>
                                <textarea wire:model="prescriptionNotes" rows="3" placeholder="Masukkan keterangan resep atau catatan medis pasien di sini..." class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 text-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white"></textarea>
                            </div>
                            
                            <div class="flex justify-end pt-4">
                                <x-filament::button wire:click="savePrescription" color="primary" size="lg" icon="heroicon-o-paper-airplane">
                                    Kirim Resep ke Farmasi
                                </x-filament::button>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="p-8 text-center text-gray-500 border-2 border-dashed border-gray-200 rounded-xl dark:border-gray-700">
                        Tidak ada pasien yang sedang dipanggil.
                        <div class="mt-4">
                            <x-filament::button wire:click="callNext" size="lg" color="primary">
                                Panggil Antrean Pertama
                            </x-filament::button>
                        </div>
                    </div>
                @endif
            </div>
            
            <!-- Pending / Waiting List -->
            <div class="p-6 bg-white rounded-xl border border-gray-100 shadow-sm dark:bg-gray-900 dark:border-gray-800">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold">Daftar Antrean Menunggu</h3>
                    <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-lg text-xs font-bold dark:bg-gray-800 dark:text-gray-200">
                        {{ $this->pendingPatients->count() }} Pasien
                    </span>
                </div>
                
                @if($this->pendingPatients->isEmpty())
                    <p class="text-gray-500 text-center py-6">Belum ada antrean masuk.</p>
                @else
                    <div class="divide-y divide-gray-100 dark:divide-gray-800">
                        @foreach($this->pendingPatients as $patient)
                            <div class="flex justify-between items-center py-3">
                                <div>
                                    <span class="font-mono font-bold text-gray-900 dark:text-white mr-3">{{ $patient->queue_number }}</span>
                                    <span class="font-medium dark:text-white">{{ $patient->patient_name }}</span>
                                    <span class="text-xs text-gray-500 ml-2">({{ $patient->patient_type }})</span>
                                </div>
                                <x-filament::button wire:click="callNext" size="xs">
                                    Panggil
                                </x-filament::button>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- History/Completed Column -->
        <div class="space-y-6">
            <!-- Reset Button for Testing -->
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <x-filament::button wire:click="resetManual" color="danger" outline class="w-full">
                    Reset Seluruh Antrean Hari Ini
                </x-filament::button>
            </div>

            <div class="p-6 bg-white rounded-xl border border-gray-100 shadow-sm dark:bg-gray-900 dark:border-gray-800">
                <h3 class="text-lg font-bold mb-4">Riwayat Hari Ini</h3>
                
                @if($this->historyPatients->isEmpty())
                    <p class="text-gray-500 text-center py-6">Belum ada riwayat pemeriksaan.</p>
                @else
                    <div class="space-y-3">
                        @foreach($this->historyPatients as $history)
                            <div class="p-3 bg-gray-50 rounded-lg dark:bg-gray-800/50 flex justify-between items-center">
                                <div class="min-w-0 flex-1">
                                    <p class="font-bold font-mono text-sm leading-tight dark:text-white">{{ $history->queue_number }}</p>
                                    <p class="text-xs text-gray-500 truncate max-w-[120px]">{{ $history->patient_name }}</p>
                                </div>
                                <span class="px-2 py-0.5 text-xs font-bold rounded {{ $history->status === 'completed' ? 'bg-success-100 text-success-800 dark:bg-success-950/30 dark:text-success-400' : 'bg-danger-100 text-danger-800 dark:bg-danger-950/30 dark:text-danger-400' }}">
                                    {{ $history->status === 'completed' ? 'Selesai' : 'Lewat' }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-filament-panels::page>
