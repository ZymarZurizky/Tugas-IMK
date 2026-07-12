<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('stock')->default(0);
            $table->string('unit')->default('tablet'); // tablet, botol, kapsul, strip, dll
            $table->integer('price')->default(0); // harga per unit
            $table->timestamps();
        });

        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('queue_id')->nullable()->constrained('queues')->onDelete('set null');
            $table->string('patient_nik', 16);
            $table->string('patient_name');
            $table->string('doctor_name');
            $table->string('status')->default('pending'); // pending, completed
            $table->text('notes')->nullable();
            $table->json('medicines_data')->nullable(); // format: [{"medicine_id": 1, "name": "Obat A", "quantity": 5, "dosage": "3x1"}]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
        Schema::dropIfExists('medicines');
    }
};
