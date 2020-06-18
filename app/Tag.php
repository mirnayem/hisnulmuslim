<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];


    public function getRouteKeyName()
{
    return 'slug';
}

    public function duas()
    {
        return $this->belongsToMany(Dua::class);
    }


    public function parent()
        {
            return $this->belongsTo('App\Tag','parent_id')->where('parent_id',0)->with('parent');
        }

    public function children()
        {
            return $this->hasMany('App\Tag','parent_id')->with('children');
        }
}
