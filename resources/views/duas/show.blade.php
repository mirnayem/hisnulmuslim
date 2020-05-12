@extends('layouts.app')
@section('title',$dua->title)

@section('content')
 <div class="row">

 @include('inc.tagsidebar')

  <div class="col-md-8  mt-5 duabodycontent">
    <div class="navigation-wrap justify-content-between d-flex">
        <div class="float-left">
            @if (isset($previous))
            <a class="prev" href="{{route('duas.show',$previous->slug)}} "> <i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i> </a>
            @endif
        </div>
        <div class='float-right'>
            @if(isset($next))
            <a class="next" href="{{route('duas.show',$next->slug)}} "><i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i></a>
            @endif
        </div>
    </div>


    <div class="d-flex justify-content-center p-2" >
        <p class="dua_title"> {{$dua->title}} </p>
        
    </div>
    {{-- <div class="d-flex justify-content-center py-1" >
        @foreach ($dua->tags as $tag)
        <h4 class="p-2"> <span class="btn btn-primary btn-sm"> {{$tag->name}} </span> </h4>
        @endforeach
    </div> --}}

    <div class="d-flex justify-content-center p-2">
        <div class="duaarabic"> {{$dua->arabic}}  </div>
    </div>

    <div class="d-flex justify-content-center p-2">
        <p class="duatranslation"> {{$dua->translation}} </p>
    </div>

    <div class="d-flex justify-content-center p-2">
        <p class="duatransliteration"> {{$dua->transliteration}} </p>
    </div>
  
    <div class="d-flex justify-content-center p-2">
        <p class="duareference">{{$dua->reference}} </p> 
    </div>

    <div id="fixedbutton">
        <i class="fa fa-play-circle fa-3x" aria-hidden="true"></i>
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