@extends('layouts.app')

@section('content')


 <div class="container pb-5">
    
         <h1 class="display-3">Edit Dua </h1>
  

     <div class="col-md-12">
         <form action= " {{route('duas.update', $dua->id)}} " method="post" enctype="multipart/form-data"> 

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

            <div class="form-group">
               <label for="status">Status</label>
               <select class="form-control" name="status">
                <option value="1" >Active</option>
                <option value="0">Inactive</option>
                
              </select>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="">
            </div>
        
            <div>
                <button type="submit" class="btn btn-success float-left">Edit Dua</button>
            </div>
           
         </form>


         <form action=" {{route('duas.destroy' ,$dua->id)}} " method="post">
            {{ method_field('delete') }}
            @csrf
         <button type="submit" class="btn btn-danger xs float-right">
             Delete
         </button>
        </form>
     </div>


 </div>

@endsection