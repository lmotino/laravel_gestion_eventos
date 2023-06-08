<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_resources extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'resource_id',
    ];
}
