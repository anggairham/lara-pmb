<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'fee_id', 'student_id', 'fee_type', 'amount', 'due_date', 'payment_status',
    ];
}
