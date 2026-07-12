<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['queue_number', 'patient_type', 'patient_name', 'patient_nik', 'poliklinik', 'session', 'date', 'complaint', 'status', 'called_at'])]
class Queue extends Model
{
    //
}
