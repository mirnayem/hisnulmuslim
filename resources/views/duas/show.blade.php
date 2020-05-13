@extends('layouts.app')
@section('title',$dua->title)

@section('content')
 <div class="row">

 @include('inc.tagsidebar')

  <div class="duacontentbody">


    <div class="text-center" >
        <p class="dua_title"> {{$dua->title}} </p>
        
    </div>

    <div class="text-center">
        <div class="duaarabic"> {{$dua->arabic}}  </div>
    </div>

    <div class="text-center">
        <p class="duatranslation"> {{$dua->translation}} </p>
    </div>

    <div class="text-center">
        <p class="duatransliteration"> {{$dua->transliteration}} </p>
    </div>
  
    <div class="text-center">
        <p class="duareference">{{$dua->reference}} </p> 
    </div>

    <div id="fixedbutton">
        <i class="fa fa-play-circle fa-3x" aria-hidden="true"></i>
    </div>

    <div class="previousdua">
        @if (isset($previous))
        <a href="{{route('duas.show',$previous->slug)}} "> <i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i> </a>
        @endif
    </div>
    <div class='nextdua'>
        @if(isset($next))
        <a href="{{route('duas.show',$next->slug)}} "><i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i></a>
        @endif
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