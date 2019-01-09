<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tripdetail extends Model
{
    protected $table = 'tripdetails';
    protected $fillable = [
        'trips_id',
        'name',
        'pic',
        'introduced1',
        'introduced2',
        'introduced3',
        'introduced4',
        'introduced5',
    ];
    public function trip()
    {
        return $this->belongsTo('App\Trip');
    }
    public function view()
    {
        return $this->hasMany('App\View');
    }
}
