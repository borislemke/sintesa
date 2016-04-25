<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $table = 'hotels';

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
