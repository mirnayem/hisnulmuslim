<?php

namespace App\Http\Controllers;

use App\Dua;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class DuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duas = Dua::where('status', 1)->get();

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

        // dd($request->all());
        $dua = new Dua();
        $dua->title = $request->title;
        $dua->arabic = $request->arabic;
        $dua->translation = $request->translation;
        $dua->transliteration = $request->transliteration;
        $dua->reference = $request->reference;
        $dua->audio_url = $request->audio_url;
        
        
        $dua->save();

        //image storage 

        $this->validate($request, [
            'image' => 'required|image|mimes:png|max:5000',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name =$dua->id.'.png';
            $destinationPath = public_path('/images/duas');
            $image->move($destinationPath, $name);
        }


        return redirect('duas');
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

        $input = $request->all();
        $dua = Dua::findOrFail($id);
        // $dua->status = $request->status;
        // $dua->title = $request->title;
        // $dua->arabic = $request->arabic;
        // $dua->translation = $request->translation;
        // $dua->transliteration = $request->transliteration;
        // $dua->reference = $request->reference;
        $dua->update($input);

         //image storage 

         $this->validate($request, [
            'image' => 'required|image|mimes:png|max:5000',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name =$dua->id.'.png';
            $destinationPath = public_path('/images/duas');
            $image->save($destinationPath, $name);
        }

        return redirect('duas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $dua = Dua::findOrFail($id);

    //     $dua->delete();

    //     return redirect('duas');
    // }



    // trashed duas 

    public function destroy($id){

        $dua = Dua::findOrFail($id);

        $dua->delete();

        return redirect('duas');
    }



    public function trash(){

        $trashedDuas = Dua::onlyTrashed()->get();

        return view('duas.trash',compact('trashedDuas'));
    }

    public function restore($id){

        $duasRestore = Dua::onlyTrashed()->findOrFail($id);

        $duasRestore->restore($duasRestore);

        return redirect('duas');
    }

    public function permanentDelete($id){
        
        $permanetDelete = Dua::onlyTrashed()->findOrFail($id);
    
        $permanetDelete->forceDelete($permanetDelete);

        $path = public_path()."/images/duas/".$permanetDelete->id.'.png';
        unlink($path);


        return redirect('duas');
    }
}
