@extends('layouts.app')

@section('content')


 <div class="container">
    
         <h1 class="display-3">Edit Dua </h1>
  

     <div class="col-md-12">
         <form action= " {{route('duas.update', $dua->id)}} " method="post"> 

            {{ method_field('patch')}}
            @csrf
             <div class="form-group">
                 <label for="title">Title</label>
                 <textarea name="title" id="" cols="30" rows="4" class="form-control"> {{$dua->title}} </textarea>
             </div>
             <div class="form-group">
                <label for="arabic">Arabic</label>
               <textarea name="arabic" id="" cols="30" rows="6" class="form-control"> {{$dua->arabic}} </textarea>
            </div>
            <div class="form-group">
                <label for="translation">Translation</label>
               <textarea name="translation" id="" cols="30" rows="6" class="form-control"> {{$dua->translation}} </textarea>
            </div>

            <div class="form-group">
                <label for="transliteration">Transliteration</label>
               <textarea name="transliteration" id="" cols="30" rows="6" class="form-control"> {{$dua->transliteration}} </textarea>
            </div>

            <div class="form-group">
                <label for="reference">Reference</label>
               <textarea name="reference" id="" cols="30" rows="4" class="form-control"> {{$dua->reference}} </textarea>
            </div>

        
            <div>
                <button type="submit" class="btn btn-success">Edit Dua</button>
            </div>
           
         </form>
     </div>


 </div>

@endsection