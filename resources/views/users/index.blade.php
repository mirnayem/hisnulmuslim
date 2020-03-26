@extends('layouts.app')

<?php $number = 1; ?>
@section('content')

@if(Session::has('success'))
<h3 class="alert-success">{{ Session::get('success') }}</h3>
@endif

@if(Session::has('deleted_user'))
<h3 class="alert-success">{{ Session::get('deleted_user') }}</h3>
@endif



    {{-- <table class=" container table table-striped table-dark"> --}}
      <table class="container table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Status</th>
          <th scope="col">Created</th>
          <th scope="col">Updated</th>
         
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
            
       
        <tr>
          <th scope="row">{{ $number++ }}</th>
          <td> <a class="text-dark" href=" {{route('users.edit', $user->id)}} ">  {{$user->name}} </a> </td>
          <td> {{$user->email}} </td>
          <td> {{ $user->role? $user->role->name:'user has no role'}} </td>
          <td> {{$user->is_active == 1 ? 'Active': 'Not Active'}} </td>
          <td> {{$user->created_at->diffForHumans()}} </td>
          <td>{{$user->updated_at->diffForHumans()}} </td>
        
        </tr>
        @endforeach
      
      </tbody>
    </table>
@endsection