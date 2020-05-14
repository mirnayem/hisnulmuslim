@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    @foreach ($tags as $tag)
      
    <a href=" {{route('duatag', $tag)}} ">
    
        <div id="duatagbox" >

           <div id="tagsvg">
            {!! file_get_contents('images/tags/'.$tag->id.'.png') !!}
           </div>
           
           <p> {{$tag->name}} </p> 
           
        </div>
    </a>
    
    @endforeach
</div>
@endsection