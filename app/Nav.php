<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    //
    protected $table = 'navigation';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function children()
    {
        return $this->hasMany('App\Nav', 'parent');
    }
}
