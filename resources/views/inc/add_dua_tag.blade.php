@admin
  <div class="row pb-4">

    <div class="col-9">
      <form action= " {{route('tags.store')}} " method="post" enctype="multipart/form-data"> 
        @csrf
      <div class="d-flex  bd-highlight">
        
        <div class="bd-highlight">
            <input type="text" name="name" id="" class="form-control" class="@error('name') is-invalid @enderror" value=" {{old('name')}} " >
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="pl-1 bd-highlight">
          <button type="submit" class="btn btn-success">Add Tag</button>
        </div>
       
      </div>

      </form>
      
    </div>
    <div class="col-3">
      <a class="btn btn-success xs" href=" {{route('duas.create')}}  ">Add Dua</a>
    </div>
  
  </div>
  @endadmin