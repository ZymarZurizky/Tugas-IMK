<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrescriptionResource\Pages;
use App\Models\Prescription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PrescriptionResource extends Resource
{
    protected static ?string $model = Prescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';
    
    protected static ?string $navigationGroup = 'Logistics & Pharmacy';
    
    protected static ?string $navigationLabel = 'Pharmacy (Resep)';
    
    protected static ?string $modelLabel = 'Resep Obat';
    
    protected static ?string $pluralModelLabel = 'Pharmacy (Resep)';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('patient_name')
                    ->required()
                    ->disabled()
                    ->label('Nama Pasien'),
                Forms\Components\TextInput::make('patient_nik')
                    ->required()
                    ->disabled()
                    ->label('NIK Pasien'),
                Forms\Components\TextInput::make('doctor_name')
                    ->required()
                    ->disabled()
                    ->label('Dokter'),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'pending' => 'Menunggu',
                        'completed' => 'Selesai',
                    ])
                    ->label('Status'),
                Forms\Components\Textarea::make('notes')
                    ->disabled()
                    ->label('Catatan Dokter'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->label('Tanggal/Waktu'),
                Tables\Columns\TextColumn::make('patient_name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Pasien'),
                Tables\Columns\TextColumn::make('patient_nik')
                    ->searchable()
                    ->label('NIK Pasien'),
                Tables\Columns\TextColumn::make('doctor_name')
                    ->searchable()
                    ->label('Dokter'),
                Tables\Columns\TextColumn::make('medicines_data')
                    ->label('Resep Obat')
                    ->formatStateUsing(function ($state) {
                        if (!is_array($state)) return '-';
                        return collect($state)->map(fn ($item) => "• {$item['name']} ({$item['dosage']}) × {$item['quantity']}")->join("\n");
                    })
                    ->wrap(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'completed' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'Menunggu',
                        'completed' => 'Selesai',
                        default => $state,
                    })
                    ->sortable()
                    ->label('Status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('complete')
                    ->label('Serahkan Obat')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn ($record) => $record->status === 'pending')
                    ->action(function ($record) {
                        // Deduct stocks
                        if (is_array($record->medicines_data)) {
                            foreach ($record->medicines_data as $item) {
                                $med = \App\Models\Medicine::find($item['medicine_id']);
                                if ($med) {
                                    $med->decrement('stock', $item['quantity']);
                                }
                            }
                        }
                        $record->update(['status' => 'completed']);
                        
                        \Filament\Notifications\Notification::make()
                            ->title('Resep selesai diproses dan obat telah diserahkan.')
                            ->success()
                            ->send();
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrescriptions::route('/'),
        ];
    }
}
