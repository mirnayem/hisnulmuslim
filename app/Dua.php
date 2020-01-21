<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dua extends Model
{
    protected $fillable = ['title','arabic','translation','transliteration','reference'];
}
