@extends('layouts.app')


@section('content')
    <div class="container">
        @foreach ($duas as $dua)
          <a href=" {{route('duas.show' ,$dua->id)}} ">  <h3 class="text-center"> {{$dua->title}} </h3> </a>
        @endforeach
    </div>
@endsection