@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    @foreach ($tags as $tag)
      
    <a href=" {{route('duatag', $tag)}} ">
    
        <div id="duatagbox" >

            <img class="rounded-circle" height="105px" width="105px" src="/images/tags/{{$tag->id}}.png"/>
           
           <p> {{$tag->name}} </p> 
           
        </div>
    </a>
    
    @endforeach
</div>
@endsection