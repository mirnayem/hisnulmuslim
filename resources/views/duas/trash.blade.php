@extends('layouts.app')

@section('title','Restore Dua')
@section('content')


<div class="container">

    <div class="jumbotron">
        <h1>Trashed Duas</h1>
    </div>
    <div class="col-md-12">

        @foreach ($trashedDuas as $dua)

        <h2>{{$dua->title}} </h2>

     <form action=" {{route('duas.restore' ,$dua->id)}} " method="get">

        @csrf
     <button type="submit" class="btn btn-success xs ">
         Restore
     </button>
    </form>

    <form action=" {{route('duas.permanent_delete' ,$dua->id)}} " method="delete">

        @csrf
     <button type="submit" class="btn btn-danger xs float-right">
         Delete Permanently
     </button>
    </form>
    
    @endforeach
    </div>
</div>

@endsection