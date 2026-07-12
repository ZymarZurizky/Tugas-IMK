<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'queue_id',
        'patient_nik',
        'patient_name',
        'doctor_name',
        'status',
        'notes',
        'medicines_data',
    ];

    protected $casts = [
        'medicines_data' => 'array',
    ];

    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}
