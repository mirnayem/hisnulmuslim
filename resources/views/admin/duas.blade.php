@extends('layouts.app')


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


             <form action= " {{route('duas.update', $dua->id)}} " method="post"> 

                {{ method_field('patch')}}

                @csrf

                <input type="hidden" name="status" value="0">
                <button type="submit" class="btn btn-success btn-sm">Save as Draft</button>
            </form>

             @endforeach
             </div>
        </div>

        <div class="col-md-6">
            <h3>Unpublished</h3>
            <hr>
            <div class="pt-4">
            @foreach ($trashedDuas as $dua)
            <h2> <a href=" {{route("duas.show", $dua->id)}} ">{{$dua->title}}</a> </h2>
        


            <form action= " {{route('duas.update', $dua->id)}} " method="post"> 

                {{ method_field('patch')}}
                   
                    @csrf
    
                    <input type="hidden" name="status" value="1">
                    <button type="submit" class="btn btn-success btn-sm">Save as Published</button>
                </form>
            @endforeach

            </div>
        </div>
    </div>
</div>

@endsection