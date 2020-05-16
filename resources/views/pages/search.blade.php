@extends('layouts.app')


@section('content')

@include('inc.add_dua_tag')
   
<div class="row">
 @include('inc.tagsidebar')

 <div class="duacontentbody">
  @foreach ($duasearch as $dua)
  <div class="col-12">
  
   <div class="duatitle">
      <a href=" {{route('duas.show', $dua->slug)}} ">{{$dua->title}}</a>
   </div>
  
 </div>

  @endforeach
</div>
</div>
    
   
  

@endsection