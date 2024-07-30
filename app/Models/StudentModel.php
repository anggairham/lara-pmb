<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id','first_name','last_name','date_of_birth','gender','address','phone_number','email','admission_date','religion',
    ];
}
