<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_id', 'student_id', 'admission_date', 'status',
    ];
}
