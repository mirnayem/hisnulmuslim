{{-- @extends('layouts.app')

@section('title',$dua->title)

@section('content')




<div class="container w-50 text-center">
   <div class="row">
   <div>
    <h3>{{$dua->title}} </h3>
   </div>

    <div>
        <p> {{$dua->arabic}} <span><a target="_blank" href="{{$dua->audio_url}}"><img src="https://img.icons8.com/flat_round/32/000000/high-volume--v1.png"/></a></span> </p>
    </div>

    <div>
        <p> {{$dua->translation}} </p>
    </div>

    <div>
        <p> {{$dua->transliteration}} </p>
    </div>
   
    <div> 
        <img class="img-fluid w-100" src="/images/duas/{{$dua->id}}.png" alt="">
    </div>

    <div>
        <p class="">{{$dua->reference}} </p> 
    <div>
        @foreach ($dua->tags as $tag)
        <span class="btn btn-primary btn-sm"> {{$tag->name}} </span>
       @endforeach
    </div>

    </div>
<div class="row">
    @admin
    <div class="col">
    <a class="btn btn-success xs float-left" href=" {{route('duas.edit', $dua->id)}}  ">Edit</a>
    </div>

  

    <div class="col">
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

@endsection --}}

@extends('layouts.app')
@section('title',$dua->title)

@section('content')
 <div>
    <div class="d-flex justify-content-center py-1" >
        <h3>{{$dua->title}} </h3>
        
    </div>
    <div class="d-flex justify-content-center py-1" >
        @foreach ($dua->tags as $tag)
        <p class="p-2"> <span class="btn btn-primary btn-sm"> {{$tag->name}} </span> </p>
        @endforeach
    </div>

    <div class="d-flex justify-content-center py-1" >
        <p> {{$dua->arabic}} <span><a target="_blank" href="{{$dua->audio_url}}"><img src="https://img.icons8.com/flat_round/32/000000/high-volume--v1.png"/></a></span> </p>
    </div>

    <div class="d-flex justify-content-center py-1">
        <p> {{$dua->translation}} </p>
    </div>
    <div class="d-flex justify-content-center py-1">
        <img class="img-fluid w-75" src="/images/duas/{{$dua->id}}.png" alt="">
    </div>
    <div class="d-flex justify-content-center py-1">
        <p class="">{{$dua->reference}} </p> 
    </div>

    
   @admin
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
            <a class="btn btn-success xs float-left" href=" {{route('duas.edit', $dua->id)}}  ">Edit</a>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
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

@endsection