<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    //
    protected $table = 'notifications';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
