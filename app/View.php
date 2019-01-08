<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $table = 'views';
    protected $fillable = [
        'tripdetails_id',
        'name',
        'pic',
    ];
    public function tripdetail()
    {
        return $this->belongsTo('App\Tripdetail');
    }
}
