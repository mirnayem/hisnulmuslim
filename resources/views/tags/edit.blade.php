@extends('layouts.app')

@section('title','Edit Dua')

@section('content')


 <div class="container pb-5">
    
         <h1 class="display-3">Edit Tag </h1>
  

     <div class="col-md-12">
         <form action= " {{route('tags.update', $tag->slug)}} " method="post" enctype="multipart/form-data"> 
            @method('PATCH')
            @csrf
            <div class="form-group">
               
               <input type="text" name="name" id="" class="form-control" class="@error('name') is-invalid @enderror" value="{{$tag->name}}">
               @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
             @enderror
           </div>

           <div class="form-group">
            <label for="photo">Image</label>
            <input type="file" name="photo" id="" class="form-control" class="@error('photo') is-invalid @enderror">
            @error('photo')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
            <div>
                <button type="submit" class="btn btn-success float-left">Edit Tag</button>
            </div>
         
         </form>


         {!! Form::open(['method'=>'DELETE' ,'action'=>[ 'TagController@destroy', $tag->slug],'files'=>true])
         !!}
        
         <div class="form-group">
             {!! Form::submit('Delete Tag',['class'=>'btn btn-danger col-sm-2 float-right']) !!}
         </div>
       
         {!! Form::close() !!}
     </div>


 </div>

@endsection