<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservasiModel extends Model
{
    protected $table = 'reservasi';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'reservation_date',
        'reservation_time',
        'guests',
        'paket',
        'message',
    ];
}

