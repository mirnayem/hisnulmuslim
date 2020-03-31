<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dua extends Model
{

  
    use SoftDeletes;

    // Fillable Example

    protected $fillable = ['status','title','slug','arabic','translation','transliteration','reference','audio_url'];

    // Guarded Example

    // protected $guarded = [];

    protected $dates = ['deleted_at'];

    // Accessors 

    public function getStatusAttribute($attribute){
        return [
            0 => 'Inactive',
            1 => 'Active',
        ][$attribute];

    }

    // Eloquent scope for active duas

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    // Eloquent scope for inactive duas

    public function scopeInactive($query){
        return $query->where('status', 0);
    }

    public function user()
    {

        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }


}
