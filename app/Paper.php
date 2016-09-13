<?php

namespace App;

use Htmldom;
use File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paper extends Model
{
    protected $table = 'pages';
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function footer()
    {
        return $this->hasOne('App\Footer', 'id');
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

        static::created(function($paper) {

            $dom = new Htmldom();

            // $page = $dom->file_get_html('http://sintesa.dev/render/' . $paper->url);

            // File::put(storage_path('rendered/' . $paper->url . '.html'), $page);
        });

        static::updated(function($page) {

        });

        static::deleted(function($page) {

        });
    }
}
