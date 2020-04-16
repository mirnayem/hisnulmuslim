<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    protected $hidden = [
        'pivot',
    ];

    public function getRouteKeyName()
{
    return 'slug';
}

    public function duas()
    {
        return $this->belongsToMany(Dua::class);
    }
}
