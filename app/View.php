<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $table = 'views';
    protected $fillable = [
        'name',
        'pic'
    ];
    public function trips_detail(){
        return $this->hasMany('App\TripDetail');
    }
}
