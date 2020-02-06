<?php

namespace App\Http\Controllers;

use App\Dua;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function duas(){
        $publishedDuas = Dua::where('status', 1)->get();
        $trashedDuas = Dua::where('status', 0)->get();

        return view('admin.duas', compact('publishedDuas', 'trashedDuas'));
    }

    public function index(){
        return view('admin.index');
    }
}
