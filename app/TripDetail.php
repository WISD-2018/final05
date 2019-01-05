<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripDetail extends Model
{
    protected $table = 'trip_details';
    protected $fillable = [
        'trips_id',
        'name',
        'content',
        'pic'
    ];
    public function trips(){
        return $this->belongsTo('App\Trip');
    }
}
