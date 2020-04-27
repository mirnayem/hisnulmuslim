@extends('layouts.app')


@section('content')

@include('inc.add_dua_tag')
   
<div class="row">
 @include('inc.tagsidebar')

  <div class="col-10">
    @foreach ($duas as $dua)
    <div class="col-12">
    
     <div class="card-body">
       <h3 class="card-title"> <a class="text-secondary" href=" {{route('duas.show', $dua->slug)}} ">{{$dua->title}}</a></h3>
       <h5 class="card-text">{{$dua->arabic}}</h5>
     </div>
    
   </div>
   <hr>
    @endforeach
  </div>
</div>
    
   
  

@endsection