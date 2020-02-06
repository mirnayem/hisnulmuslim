@extends('layouts.app')

@section('content')


 <div class="container">
    
         <h1 class="display-3">Create New Dua </h1>
  

     <div class="col-md-12">
         <form action= " {{route('duas.store')}} " method="post" enctype="multipart/form-data"> 
            @csrf
             <div class="form-group">
                 <label for="title">Title</label>
                 <textarea name="title" id="" cols="30" rows="4" class="form-control"></textarea>
             </div>
             <div class="form-group">
                <label for="arabic">Arabic</label>
               <textarea name="arabic" id="" cols="30" rows="6" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="translation">Translation</label>
               <textarea name="translation" id="" cols="30" rows="6" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="transliteration">Transliteration</label>
               <textarea name="transliteration" id="" cols="30" rows="6" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="reference">Reference</label>
               <textarea name="reference" id="" cols="30" rows="4" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="audio_url">Audio</label>
                <input type="text" name="audio_url" id="" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-success">Create Dua</button>
            </div>
           
         </form>
     </div>


 </div>

@endsection