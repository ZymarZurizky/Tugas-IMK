<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed default Doctor
        User::updateOrCreate(
            ['nik' => '1234567890123456'],
            [
                'name' => 'dr. Budi Santoso',
                'email' => 'doctor@puskesmas.com',
                'phone' => '081234567890',
                'password' => Hash::make('dokter123'),
                'role' => 'doctor'
            ]
        );

        // Seed default Admin
        User::updateOrCreate(
            ['nik' => '9999999999999999'],
            [
                'name' => 'Admin Utama Puskesmas',
                'email' => 'admin@gmail.com',
                'phone' => '089999999999',
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ]
        );

        // Seed default Medicines (Logistics)
        $medicines = [
            ['name' => 'Paracetamol 500mg', 'stock' => 150, 'unit' => 'tablet', 'price' => 1500],
            ['name' => 'Amoxicillin 500mg', 'stock' => 100, 'unit' => 'tablet', 'price' => 3000],
            ['name' => 'Ibuprofen 400mg', 'stock' => 80, 'unit' => 'tablet', 'price' => 2500],
            ['name' => 'Cetirizine 10mg', 'stock' => 120, 'unit' => 'tablet', 'price' => 2000],
            ['name' => 'OBH Sirup 100ml', 'stock' => 50, 'unit' => 'botol', 'price' => 15000],
            ['name' => 'Decolgen Tablet', 'stock' => 200, 'unit' => 'tablet', 'price' => 1000],
            ['name' => 'Vitamin C 500mg', 'stock' => 300, 'unit' => 'tablet', 'price' => 800],
        ];

        foreach ($medicines as $med) {
            \App\Models\Medicine::updateOrCreate(
                ['name' => $med['name']],
                $med
            );
        }
    }
}
