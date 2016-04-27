<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function galleries()
    {
        return $this->belongsToMany('App\Media', 'rooms_gallery');
    }

    public function facilities()
    {
        return $this->hasMany('App\RoomFacility');
    }
}
