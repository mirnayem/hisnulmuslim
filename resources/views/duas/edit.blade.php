@extends('layouts.app')

@section('title','Edit Dua')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('content')


 <div class="container pb-5">
    
         <h1 class="display-3">Edit Dua </h1>
  

     <div class="col-md-12">
         <form action= " {{route('duas.update', $dua->id)}} " method="post" enctype="multipart/form-data"> 

            {{-- {{method_field('PATCH')}} --}}
            @method('PATCH')
            @csrf
             <div class="form-group">
                 <label for="title">Title</label>
                 <textarea name="title" id="" cols="30" rows="4" class="form-control"> {{$dua->title}} </textarea>
             </div>

             <div class="form-group {{ $errors->has('tags') ? 'has-error' : ''}}">
                {!! Form::label('tags','Tags:') !!}

                <select class="form-control" id="addtag" multiple="multiple" name="tags[]" >
                    @foreach($tags as $tag)
  
                    <option value="{{$tag->id}}"> {{$tag->name}} </option>
                
                    
                    @endforeach
                  
                </select>
                {!! $errors->first('tags', '<p class="help-block text-danger ">:message</p>') !!}
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
                <option value="1" {{$dua->status == 'Active' ? 'selected' : ''}} >Active</option>
                <option value="0" {{$dua->status == 'Inactive' ? 'selected' : ''}} >Inactive</option>
                
              </select>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="" class="form-control" class="@error('image') is-invalid @enderror">
                @error('image')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <label for="sound">Audio</label>
                <input type="file" name="sound" id="" class="form-control" class="@error('sound') is-invalid @enderror">
                @error('sound')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <label for="audio_url">Audio</label>
            <input type="text" name="audio_url" id="" class="form-control" value="{{$dua->audio_url}}">
            </div>
          
            <div>
                <button type="submit" class="btn btn-success float-left">Edit Dua</button>
            </div>
         
         </form>


         {!! Form::open(['method'=>'DELETE' ,'action'=>[ 'DuaController@destroy', $dua->id],'files'=>true])
         !!}
        
         <div class="form-group">
             {!! Form::submit('Delete Dua',['class'=>'btn btn-danger col-sm-2 float-right']) !!}
         </div>
       
         {!! Form::close() !!}
     </div>


 </div>
 @section('js')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>


 <script>
 
 $(document).ready(function() {
   $('#addtag').select2({
       tags:true
   });
   });
 </script>
 @endsection

@endsection