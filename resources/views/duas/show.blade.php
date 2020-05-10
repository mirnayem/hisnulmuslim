@extends('layouts.app')
@section('title',$dua->title)

@section('content')
 <div class="row">

 @include('inc.tagsidebar')

  <div class="col-8 mt-5">
    <div class="navigation-wrap justify-content-between d-flex">
        <div class="float-left">
            @if (isset($previous))
            <a class="prev" href="{{route('duas.show',$previous->slug)}} "> <img src="https://img.icons8.com/ios-filled/50/000000/chevron-left.png"/>  </a>
            @endif
        </div>
        <div class='float-right'>
            @if(isset($next))
            <a class="next" href="{{route('duas.show',$next->slug)}} "><img src="https://img.icons8.com/ios-filled/50/000000/chevron-right.png"/></a>
            @endif
        </div>
    </div>


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
        <p>{{$dua->reference}} </p> 
    </div>

    @admin
     <div class="row px-5">
    <div class="col-6 ">
        <a class="btn btn-success xs float-left" href=" {{route('duas.edit', $dua->id)}}  ">Edit</a>
    </div>
    <div class="col-6">
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
  </div>
       

 

 </div>
 


 

@endsection