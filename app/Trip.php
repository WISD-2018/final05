<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = [
        'name',
        'pic1',
        'pic2',
        'pic3',
        'pic4',
        'pic5',
    ];
}
