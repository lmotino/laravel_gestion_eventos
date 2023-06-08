<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'reservation_id',
        'deposit',
        'pending_payment',
        'payment_date'
    ];
}
