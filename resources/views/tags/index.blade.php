@extends('layouts.app')
@section('content')
<div class="row">

   <div class="col-md-6">
        <h2>Add Tag</h2>
        <form action= " {{route('tags.store')}} " method="post" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group">
               
                <input type="text" name="name" id="" class="form-control" class="@error('name') is-invalid @enderror" value=" {{old('name')}} " >
                @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-success">Create Tag</button>
            </div>
           
         </form>
    </div>


    <div class="col-md-6">
       <?php $number = 1; ?>
       

        @if(Session::has('success'))
        <h3 class="alert-success">{{ Session::get('success') }}</h3>
        @endif


    
      <table class="container table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tags</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tags as $tag)
            
       
        <tr>
          <th scope="row">{{ $number++ }}</th>
          <td> <a class="text-dark" href="">  {{$tag->name}} </a> </td>
          <td> <a class="text-dark" href=" {{route('tags.edit', $tag->id)}} ">Edit </a> </td>
        </tr>
        @endforeach
      
      </tbody>
    </table>
    </div>
    
</div>

@endsection