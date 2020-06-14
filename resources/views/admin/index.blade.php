@extends('layouts.app')

@section('title','Admin Dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="p-2">
            <a name="" id="" class="btn btn-warning mr-2 " href=" {{route('admin.duas')}} " role="button">Manage Duas</a>
        </div>
        <div class="p-2">
            <a name="" id="" class="btn btn-primary mr-2 " href=" {{route('duas.index')}} " role="button">All Duas</a>
        </div>
        <div class="p-2">
            <a name="" id="" class="btn btn-success mr-2" href=" {{route('duas.create')}} " role="button">Create Dua</a>
        </div>
        <div class="p-2">
            <a name="" id="" class="btn btn-danger mr-2" href=" {{route('duas.trash')}} " role="button">Trashed Duas</a>
        </div>
        <div class="p-2">
            <a name="" id="" class="btn btn-success mr-2" href=" {{route('users.index')}} " role="button">All Users</a>
        </div>
        <div class="p-2">

            <a name="" id="" class="btn btn-info mr-2" href=" {{route('users.create')}} " role="button">Create User</a>
        </div>

        <div class="p-2">

            <a name="" id="" class="btn btn-success mr-2" href=" {{route('tags.index')}} " role="button">All Tags</a>
        </div>


        <div class="p-2">

            <a name="" id="" class="btn btn-secondary mr-2" href="/api/storedata" role="button">Store Duas</a>
        </div>


        <div class="p-2">

            <a name="" id="" class="btn btn-secondary mr-2" href="/api/downloaddata" role="button">Download Duas</a>
        </div>
        
        </div>
</div>

@endsection