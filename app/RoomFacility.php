<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    //
    protected $table = 'rooms_facility';

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
