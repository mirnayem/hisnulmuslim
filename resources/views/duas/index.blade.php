@extends('layouts.app')


@section('content')
    <div class="container">
        @foreach ($duas as $dua)
            <p> {{$dua->title}} </p>
        @endforeach
    </div>
@endsection