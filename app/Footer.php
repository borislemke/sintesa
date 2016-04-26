<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    //
    protected $table = 'footers';

    public function page()
    {
        return $this->belongsTo('App\Paper');
    }
}
