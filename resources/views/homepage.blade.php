@extends('layouts.app')


@section('content')

{{-- @include('inc.add_dua_tag') --}}
   
<div class="row">
 @include('inc.tagsidebar')

  <div class="duacontentbody">
    <h1 class="text-center pb-4">সব দো‘আ</h1>
    @foreach ($duas as $dua)
  
    
      <a href=" {{route('duas.show', $dua->slug)}} ">
     <div class="duatitle">
    
        {{$dua->title}}
    
     </div>
     </a>
  
    @endforeach
  </div>

</div>  
   
  

@endsection