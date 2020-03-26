@extends('layouts.app')

@section('title','Create Dua')

@section('content')


 <div class="container">
    
         <h1 class="display-3">Create New Dua </h1>
  

     <div class="col-md-12">
         <form action= " {{route('duas.store')}} " method="post" enctype="multipart/form-data"> 
            @csrf
             <div class="form-group">
                 <label for="title">Title</label>
                 <textarea name="title" id="" cols="30" rows="4" class="form-control" class="@error('title') is-invalid @enderror"> {{old('title')}} </textarea>
                 @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="form-group">
                <label for="arabic">Arabic</label>
               <textarea name="arabic" id="" cols="30" rows="6" class="form-control" class="@error('arabic') is-invalid @enderror"> {{old('arabic')}} </textarea>
               @error('arabic')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
                <label for="translation">Translation</label>
               <textarea name="translation" id="" cols="30" rows="6" class="form-control" class="@error('translation') is-invalid @enderror"> {{old('translation')}} </textarea>
               @error('translation')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <label for="transliteration">Transliteration</label>
               <textarea name="transliteration" id="" cols="30" rows="6" class="form-control" class="@error('transliteration') is-invalid @enderror">  {{old('transliteration')}} </textarea>
               @error('transliteration')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <label for="reference">Reference</label>
               <textarea name="reference" id="" cols="30" rows="4" class="form-control" class="@error('reference') is-invalid @enderror">  {{old('reference')}} </textarea>
               @error('reference')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="" class="form-control" class="@error('image') is-invalid @enderror">
                @error('image')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <label for="audio_url">Audio</label>
                <input type="text" name="audio_url" id="" class="form-control" value="{{old('audio_url')}}" class="@error('audio_url') is-invalid @enderror">
                @error('audio_url')
               <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-success">Create Dua</button>
            </div>
           
         </form>
     </div>


 </div>

@endsection