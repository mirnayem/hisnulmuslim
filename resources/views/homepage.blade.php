@extends('layouts.app')


@section('content')

@include('inc.add_dua_tag')
   
<div class="row">
 @include('inc.tagsidebar')

  <div class="col-md-8 pt-4">
    <h1 class="text-center pb-4">All Duas</h1>
    @foreach ($duas as $dua)
    <div class="col-12">
    
     <div class="duatitle">
       <h3 class="card-title"> <a href=" {{route('duas.show', $dua->slug)}} ">{{$dua->title}}</a></h3>
     </div>
    
   </div>
  
    @endforeach
  </div>
</div>
    
   
  

@endsection