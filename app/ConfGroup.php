<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfGroup extends Model
{
    //
    protected $table = 'config_group';

    public function configs()
    {
        return $this->hasMany('App\Conf');
    }
}
