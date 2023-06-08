<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'DNI',
        'name',
        'email',
        'phone',
        'reservation_date',
        'user_id',
        'event_id'
    ];
}
