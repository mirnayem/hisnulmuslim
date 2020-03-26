<?php

namespace App\Http\Controllers;

use App\Dua;
use Illuminate\Http\Request;


class AdminController extends Controller
{

   public function __construct()
   {
       $this->middleware(['auth','admin']);
   }

    public function duas(){
        $publishedDuas = Dua::active()->get();
        $trashedDuas = Dua::inactive()->get();
        return view('admin.duas', compact('publishedDuas', 'trashedDuas'));
    }

    public function index(){
        return view('admin.index');
    }

}
