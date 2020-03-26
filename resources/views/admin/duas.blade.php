@extends('layouts.app')

@section('title','Manage Dua')

@section('content')

<div class="container">
    <h3 class="text-center pb-5">Manage Duas</h3>
    <div class="row pt-5">

        <div class="col-md-6">
             <h3>Published</h3>
             <hr>
             <div class="pt-4">
             @foreach ($publishedDuas as $dua)
             <h2> <a href=" {{route("duas.show", $dua->id)}} ">{{$dua->title}}</a> </h2>

            
            {!! Form::open(['action' => ['DuaController@update', $dua->id] , 'method' => 'PATCH' , 'files' => true]) !!}
            {!! Form::hidden('status', 0) !!}

            <div class="form-group">
                {!! Form::submit('Save as Draft',['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}

             @endforeach
             </div>
        </div>

        <div class="col-md-6">
            <h3>Unpublished</h3>
            <hr>
            <div class="pt-4">
            @foreach ($trashedDuas as $dua)
            <h2> <a href=" {{route("duas.show", $dua->slug)}} ">{{$dua->title}}</a> </h2>
           
            {!! Form::open(['action' => ['DuaController@updateStatus', $dua->id] , 'method' => 'PATCH' , 'files' => true]) !!}
     
            {!! Form::hidden('status', 1) !!}

            <div class="form-group">
                {!! Form::submit('Save as Draft',['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}

            @endforeach

            </div>
        </div>
    </div>
</div>

@endsection