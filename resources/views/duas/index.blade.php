@extends('layouts.app')

<?php $number = 1; ?>
@section('content')

    {{-- <table class=" container table table-striped table-dark"> --}}
      <table class="container table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Dua</th>
          <th scope="col">Created</th>
          <th scope="col">Updated</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($duas as $dua)
            
       
        <tr>
          <th scope="row">{{ $number++ }}</th>
          <td> <a class="text-dark" href=" {{route('duas.show' ,$dua->id)}} ">  {{$dua->title}} </a> </td>
          <td> {{$dua->created_at->diffForHumans()}} </td>
          <td>{{$dua->updated_at->diffForHumans()}} </td>
          <td> <a class="text-dark" href=" {{route('duas.edit' ,$dua->id)}} "> Edit</a> </td>
        </tr>
        @endforeach
      
      </tbody>
    </table>
@endsection