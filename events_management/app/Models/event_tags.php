<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_tags extends Model
{
    use HasFactory;
    protected $fillabele = [
        'event_id',
        'tag_id',
    ];
}
