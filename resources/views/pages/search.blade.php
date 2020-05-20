@extends('layouts.app')


@section('content')

@include('inc.add_dua_tag')
   
<div class="row">
 @include('inc.tagsidebar')

 <div class="duacontentbody">
  @foreach ($duasearch as $dua)
  <div class="col-12">
  <a href=" {{route('duas.show', $dua->slug)}} ">
   <div class="duatitle">
      {{$dua->title}}
   </div>
  </a>
 </div>

  @endforeach
</div>
</div>
    
   
  

@endsection