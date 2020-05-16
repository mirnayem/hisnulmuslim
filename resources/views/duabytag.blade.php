@extends('layouts.app')


@section('content')
@include('inc.add_dua_tag')
   
<div class="row">
 @include('inc.tagsidebar')

  <div class="duacontentbody">
    
    <h1 class="text-center pb-4"> <span id="singletagsvg"> {!! file_get_contents('images/tags/'.$tag->id.'.png') !!} </span> {{$tag->name}}</h1>
    @foreach ($duasbytag as $dua)
    
    
     <div class="duatitle">
       <a href=" {{route('duas.show', $dua->slug)}} ">{{$dua->title}}</a>
     </div>
    
  
  
    @endforeach
  </div>
</div>
    
   
  

@endsection