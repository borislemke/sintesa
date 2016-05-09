<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

class Media extends Model
{
    //
    protected $table = 'media';
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public static function boot()
    {
        parent::boot();
        static::creating(function($file) {

        });

        static::updating(function($file) {
            
        });

        static::deleting(function($file) {
            $trash_name = base64_encode($file->url);
            $file->trash_name = $trash_name;
            $file->save();
            File::move(public_path("media/$file->url"), storage_path("trashed_files/$trash_name"));
        });

        static::created(function($file) {

        });

        static::updated(function($file) {

        });

        static::deleted(function($file) {
        });
    }
}
