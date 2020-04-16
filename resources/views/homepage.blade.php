@extends('layouts.app')


@section('content')
@admin
  <div class="row">
    <div class="col-3">
      <a class="btn btn-success xs " href=" {{route('duas.create')}}  ">Add Dua</a>
    </div>
    <div class="col-9">
      <form action= " {{route('tags.store')}} " method="post" enctype="multipart/form-data"> 
        @csrf
      <div class="d-flex flex-row-reverse bd-highlight">
        <div class="pl-1 bd-highlight">
          <button type="submit" class="btn btn-success">Add Tag</button>
        </div>
        <div class="bd-highlight">
            <input type="text" name="name" id="" class="form-control" class="@error('name') is-invalid @enderror" value=" {{old('name')}} " >
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
       
      </div>

      </form>
      
    </div>
  </div>
  @endadmin
   
<div class="row">
  <div class="col-2 pt-3">
        <div>
            @foreach ($tags as $tag)
                <h5><a class="text-secondary" href=" {{route('duatag', $tag->slug)}} "> {{$tag->name}} </a> </h5>
                <hr>
            @endforeach
        </div>
  </div>

  <div class="col-10">
    @foreach ($duas as $dua)
    <div class="col-12">
    
     <div class="card-body">
       <h3 class="card-title"> <a class="text-secondary" href=" {{route('duas.show', $dua->slug)}} ">{{$dua->title}}</a></h3>
       <h5 class="card-text">{{$dua->arabic}}</h5>
     </div>
    
   </div>
   <hr>
    @endforeach
  </div>
</div>
    
   
  

@endsection