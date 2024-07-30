<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_id', 'fee_id', 'payment_date', 'amount_paid', 'payment_method',
    ];
}
