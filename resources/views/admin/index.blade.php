@extends('layouts.app')

@section('title','Admin Dashboard')
@section('content')

<div class="container">
    <div class="row">
        <a name="" id="" class="btn btn-warning mr-2 " href=" {{route('admin.duas')}} " role="button">Manage Duas</a>
        <a name="" id="" class="btn btn-primary mr-2 " href=" {{route('duas.index')}} " role="button">All Duas</a>
        <a name="" id="" class="btn btn-success mr-2" href=" {{route('duas.create')}} " role="button">Create Dua</a>
        <a name="" id="" class="btn btn-danger mr-2" href=" {{route('duas.trash')}} " role="button">Trashed Duas</a>
        <a name="" id="" class="btn btn-success mr-2" href=" {{route('users.index')}} " role="button">All Users</a>
        <a name="" id="" class="btn btn-info mr-2" href=" {{route('users.create')}} " role="button">Create User</a>
        </div>
</div>

@endsection