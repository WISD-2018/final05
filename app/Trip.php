<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = [
        'name'
    ];
    public function trips_detail(){
        return $this->hasMany('App\TripDetail');
    }
}
