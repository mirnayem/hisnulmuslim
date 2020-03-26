@extends('layouts.app')

<?php $number = 1; ?>
@section('content')

@if(Session::has('success'))
<h3 class="alert-success">{{ Session::get('success') }}</h3>
@endif



    {{-- <table class=" container table table-striped table-dark"> --}}
      <table class="container table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Dua</th>
          <th scope="col">Status</th>
          <th scope="col">Created</th>
          <th scope="col">Updated</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($allduas as $dua)
            
       
        <tr>
          <th scope="row">{{ $number++ }}</th>
          <td> <a class="text-dark" href=" {{route('duas.show' ,$dua->slug)}} ">  {{$dua->title}} </a> </td>
          <td> {{$dua->status}} </td>
          <td> {{$dua->created_at->diffForHumans()}} </td>
          <td>{{$dua->updated_at->diffForHumans()}} </td>
          <td> <a class="text-dark" href=" {{route('duas.edit' ,$dua->id)}} "> Edit</a> </td>
        </tr>
        @endforeach
      
      </tbody>
    </table>
@endsection