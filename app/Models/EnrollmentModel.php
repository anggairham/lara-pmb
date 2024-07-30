<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'enrollments_id', 'student_id', 'class_id', 'enrollment_date',
    ];
}
