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
        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->string('queue_number');
            $table->string('patient_type'); // 'BPJS' atau 'Mandiri'
            $table->string('patient_name');
            $table->string('patient_nik', 16);
            $table->string('poliklinik');
            $table->string('session'); // 'Pagi' atau 'Siang'
            $table->date('date');
            $table->text('complaint')->nullable();
            $table->string('status')->default('pending'); // pending, calling, completed, skipped
            $table->timestamp('called_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queues');
    }
};
