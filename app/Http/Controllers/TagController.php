<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TagController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','admin']);
    // }
    public function index(Tag $tag)
    {
        $tags = Tag::all();

        return view('tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => "required|unique:tags|min:3 ",
            'photo' => "image|mimes:png|max:512"
          
        ]); 

        $tag = new Tag();

        $tag->name = $request->name;
        $str = strtolower($request->name);
        $tag->slug = preg_replace('/\s+/', '-', $str);
        $tag->save();

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name =$tag->id.'.png';
            $destinationPath = public_path('/images/tags');
            $image->move($destinationPath, $name);
        }

       

        return redirect('/');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, [
            'name' =>"min:3 ",
            'photo' => "image|mimes:png|max:512"
          
        ]); 

        $tag->name = $request->name;
        if($request->has('name')){
            $tag->slug = preg_replace('/\s+/', '-', strtolower($request->name));
        }
        $tag->update();

        Storage::delete('images/tags/'.$tag->id.'.png');

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name =$tag->id.'.png';
            $destinationPath = public_path('/images/tags');
            $image->move($destinationPath, $name);
        }

        

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect('/');
    }


    public function dua_by_tag(Tag $tag)
    {  
        
        $duasbytag = $tag->duas;

       return view('duabytag', compact('duasbytag'));
    }
}
