<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Reservasi extends Model
{
    protected $table = 'reservasi'; // Menentukan nama tabel
    
    protected $fillable = [
        'name',
        'email', 
        'phone',
        'reservation_date',
        'reservation_time',
        'guests',
        'paket',
        'message'
    ];

    protected $dates = [
        'reservation_date',
        'created_at',
        'updated_at'
    ];
}