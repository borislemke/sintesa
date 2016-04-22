<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paper extends Model
{
    protected $table = 'pages';
    use SoftDeletes;

    //
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    // Listens to database changes
    public static function boot()
    {
        parent::boot();
        static::creating(function($page) {

        });

        static::updating(function($page) {
        });

        static::deleting(function($page) {

        });

        static::created(function($page) {

        });

        static::updated(function($page) {

        });

        static::deleted(function($page) {

        });
    }
}
