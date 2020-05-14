@extends('layouts.app')


@section('content')

@include('inc.add_dua_tag')
   
<div class="row">
 @include('inc.tagsidebar')

  <div class="duacontentbody">
    <h1 class="text-center pb-4">সব দো‘আ</h1>
    @foreach ($duas as $dua)
  
    
     <div class="duatitle">
       <h3> <a href=" {{route('duas.show', $dua->slug)}} ">{{$dua->title}}</a></h3>
     </div>
  
    @endforeach
  </div>

</div>  
   
  

@endsection