@extends('layouts.app')


@section('content')
<div class="container w-50 text-center">
    <h3> {{$dua->title}} </h3>

    <p> {{$dua->arabic}} </p>

    <p> {{$dua->translation}} </p>
    <p> {{$dua->transliteration}} </p>
    <div> <img src="/images/duas/{{$dua->id}}.jpg" alt=""> </div>
    <blockquote class=" float-right"> {{$dua->reference}} </blockquote>

</div>
     
@endsection