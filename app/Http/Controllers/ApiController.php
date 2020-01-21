<?php

namespace App\Http\Controllers;

use App\Dua;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllDua(){
        $allDua = Dua::all();

        return $allDua;
    }


    public function getOneDua(Dua $dua){

       $dua  = Dua::findOrFail($dua);

       return $dua;
    }
}
