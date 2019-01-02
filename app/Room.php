<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = [
        'name',
        'price',
        'pic',
    ];
    public function bookings()
    {
        return $this->belongsTo('App\Booking');
    }
}
