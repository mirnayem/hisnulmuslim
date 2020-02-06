<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dua extends Model
{

  
    use SoftDeletes;
    protected $fillable = ['status','title','arabic','translation','transliteration','reference','audio_url'];

    protected $dates = ['deleted_at'];
}
