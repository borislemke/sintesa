<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conf extends Model
{
    //
    protected $table = 'config';

    public function group()
    {
        return $this->belongsTo('App\ConfGroup');
    }
}
