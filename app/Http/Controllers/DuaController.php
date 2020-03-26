<?php

namespace App\Http\Controllers;

use App\Dua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
class DuaController extends Controller
{
   
    public function index()
    {
        $allduas = Dua::all();

       return view('duas.index', compact('allduas'));

       
    }

  
    public function create()
    {
        return view('duas.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required ',
            'arabic' => 'required',
            'translation' =>'required',
            'transliteration' => 'required',
            'reference' => 'required',
            'image' => 'required|image|mimes:png|max:5000',
            'audio_url' => 'required | url',
        ]);
     
    
        $dua = new Dua();
        $dua->title = $request->title;
        $dua->arabic = $request->arabic;
        $dua->translation = $request->translation;
        $dua->transliteration = $request->transliteration;
        $dua->reference = $request->reference;
        $dua->audio_url = $request->audio_url;
        $str = strtolower($request->title);
        $dua->slug = preg_replace('/\s+/', '-', $str);
        
        $dua->save();

        //image storage 

      
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name =$dua->id.'.png';
            $destinationPath = public_path('/images/duas');
            $image->move($destinationPath, $name);
        }


        return redirect('duas');
    }

  
    public function show($slug)
    {
        $dua = Dua::where('slug', $slug)->first();
        return view('duas.show' ,compact('dua'));
    }

    public function edit($id)
    {
        $dua = Dua::findOrFail($id);

        return view('duas.edit',compact('dua')); 
    }

   
    public function update(Request $request, Dua $dua)
    {
        
        // $this->validate($request, [
        //     'title' => 'alpha | alpha_num',
        //     'status' => 'required',
        //     'arabic' => 'alpha | alpha_num',
        //     'translation' =>'alpha | alpha_num',
        //     'transliteration' => 'alpha | alpha_num',
        //     'reference' => 'alpha | alpha_num',
        //     'image' => 'image|mimes:png|max:5000',
        //     'audio_url' => 'url',
        //     'slug' => 'alpha | alpha_num'
        // ]);
    
        $dua->title = $request->title;
        $dua->arabic = $request->arabic;
        $dua->translation = $request->translation;
        $dua->transliteration = $request->transliteration;
        $dua->reference = $request->reference;
        $dua->audio_url = $request->audio_url;
        if($request->has('title')){
            $dua->slug = preg_replace('/\s+/', '-', strtolower($request->title));
        }
        $dua->update();

         //image storage 
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name =$dua->id.'.png';
            $destinationPath = public_path('/images/duas');
            $image->move($destinationPath, $name);
        }
        Session::flash('success', 'Data has been updated successfully');
        return redirect('/admin/duas');
    }

 



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
