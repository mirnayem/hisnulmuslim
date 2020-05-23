<?php

namespace App\Http\Controllers;

use App\Dua;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function getAllDua(){
        $allDua = Dua::all();

        return $allDua;
    }


    public function getOneDua($id){

       $dua  = Dua::findOrFail($id);

       return $dua;
    }


    public function getAllTag()
    {
        $allTag = Tag::all();
        return $allTag;
    }

    public function getOneTag($id)
    {
        $tag = Tag::findOrFail($id);
        return  $tag;
    }

    public function storeTag(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name);
        $tag->save();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name =$tag->id.'.png';
            $destinationPath = public_path('/images/tags');
            $image->move($destinationPath, $name);
        }
    }

    public function updateTag(Request $request, $id)
    {
        $tag =Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name);
        $tag->update();
    }

    public function deleteTag($id)
    {
        $tag = Tag::findOrFail($id);

        $tag->delete($tag);
    }




    public function all_data()
    {
         $tags = Tag::all();
         $duas = Dua::all();
         
         $data = [
           'tags' => $tags,
           'duas' => $duas,
         ];

         return $data;
    }

    public function store_data()
    {
         $tags = Tag::all();
         $duas = Dua::all();
         
         $data = [
           'tags' => $tags,
           'duas' => $duas,
         ];

         Storage::disk('public')->put('duas.json', json_encode($data));
    }

    public function download_data()
    {
       
         $file= public_path("/storage/"). "duas.json";

         $headers = array(
                   'Content-Type: application/json',
                 );
     
         return response()->download($file, 'dua.json', $headers);

    
    }


}
