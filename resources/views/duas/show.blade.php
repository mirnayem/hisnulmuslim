@extends('layouts.app')

@section('title',$dua->title)

@section('content')

<div class="row">


<div class=" container w-50 text-center">

    <h3>{{$dua->title}} </h3>

    <p> {{$dua->arabic}} </p>

    <p> {{$dua->translation}} </p>
    <p> {{$dua->transliteration}} </p>
    <div> <img class="img-fluid w-100" src="/images/duas/{{$dua->id}}.png" alt=""> </div>
    <blockquote class=" float-right"> {{$dua->reference}} </blockquote>

    <h4>
        <a target="_blank" href="{{$dua->audio_url}}">Listen Audio</a>
    </h4>
</div>

</div>

<div class="container w-50 py-5">


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


@endsection