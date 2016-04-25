<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    //
    protected $table = 'users_log';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
