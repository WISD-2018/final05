<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = [
        'name',
    ];
    public function tripdetails()
    {
        return $this->hasMany('App\Tripdetail');
    }
}
