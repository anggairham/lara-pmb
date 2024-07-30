<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id', 'student_id', 'first_name', 'last_name', 'relationship', 'phone_number', 'email', 'address',
   ];
}
