@extends('layouts.app')


@section('content')
    


<div class="container">
    <div class="row">

   
   @foreach ($duas as $dua)
   <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      <img src="/images/duas/{{$dua->id}}.png" class="img-fluid img-thumbnail" alt="" style="width:100%; height:300px">
      
      <div class="card-body">
        <p class="card-text">{{$dua->title}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary"><a class="text-dark" href=" {{route('duas.show',$dua->id)}} ">View</a></button>
            <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="text-dark" href=" {{route('duas.edit',$dua->id)}} ">Edit</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
   @endforeach
</div>
</div>



@endsection