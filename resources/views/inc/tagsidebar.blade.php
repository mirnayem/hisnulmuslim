<div class="col-4 pt-3">
    <div>
        @foreach ($tags as $tag)
        <a href=" {{route('duatag', $tag)}}">
        <div id="tagbox">
            <h5><span class="pr-5"><img height="35px" width="35px" src="/images/tags/{{$tag->id}}.png"/></span> <p class="pl-5 float-right"> {{$tag->name}}   </p> </h5>
        </div>   
        </a>  
        @endforeach
    </div>
</div>