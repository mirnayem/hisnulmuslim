@extends('layouts.app')
@section('title',$dua->title)

@section('content')
 <div class="row">

    <div class="col-2 pt-3">
        <div>
            @foreach ($tags as $tag)
                <h5><a class="text-secondary" href=" {{route('duatag', $tag)}} "><span><img height="35px" width="35px" src="/images/tags/{{$tag->id}}.png"/></span>  {{$tag->name}} </a> </h5>
                <hr>
            @endforeach
        </div>
  </div>

  <div class="col-10 pt-3">
    <div class="d-flex justify-content-center py-1" >
        <h2>{{$dua->title}} </h2>
        
    </div>
    <div class="d-flex justify-content-center py-1" >
        @foreach ($dua->tags as $tag)
        <h4 class="p-2"> <span class="btn btn-primary btn-sm"> {{$tag->name}} </span> </h4>
        @endforeach
    </div>

    <div class="d-flex justify-content-center py-1">
        <h4> {{$dua->arabic}}  <span><a target="_blank" href="{{$dua->audio_url}}"><img src="https://img.icons8.com/flat_round/32/000000/high-volume--v1.png"/></a></span></h4>
    </div>

    <div class="d-flex justify-content-center py-1">
        <h4> {{$dua->translation}} </h4>
    </div>
  
    <div class="d-flex justify-content-center py-1">
        <p class="text-info">{{$dua->reference}} </p> 
    </div>
  </div>
 </div>
   @admin
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
            <a class="btn btn-success xs float-left" href=" {{route('duas.edit', $dua->id)}}  ">Edit</a>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <form action=" {{route('duas.destroy' ,$dua->id)}} " method="post" onclick="return confirm('Are you sure you want to delete this item?');">
                {{ method_field('delete') }}
                @csrf
             <button type="submit" class="btn btn-danger xs float-right">
                 Delete
             </button>
    
             
            </form>
        </div>
    </div>
    @endadmin
 

@endsection