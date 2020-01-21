<?php

namespace App\Http\Controllers;

use App\Dua;
use Illuminate\Http\Request;

class DuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duas = Dua::all();

       return view('duas.index', compact('duas'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('duas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dua = new Dua();

        $dua->title = $request->title;
        $dua->arabic = $request->arabic;
        $dua->translation = $request->translation;
        $dua->transliteration = $request->transliteration;
        $dua->reference = $request->reference;
        
        
        $dua->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dua = Dua::findOrFail($id);
        return view('duas.show',compact('dua'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dua = Dua::findOrFail($id);

        return view('duas.edit',compact('dua')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        $dua = Dua::findOrFail($id);

        $dua->title = $request->title;
        $dua->arabic = $request->arabic;
        $dua->translation = $request->translation;
        $dua->transliteration = $request->transliteration;
        $dua->reference = $request->reference;

        $dua->update();

        return redirect('duas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dua $dua)
    {
        //
    }
}
