<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'user_id',
        'place_id',
        'reservation_time',
        'number_of_people',
        'special_requests',
    ];

    // Relasi ke User (User yang membuat reservasi)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Place (Restaurant tempat reservasi)
    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function reservations()
{
    return $this->hasMany(Reservation::class);
}

}
