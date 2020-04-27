<div class="col-2 pt-3">
    <div>
        @foreach ($tags as $tag)
    <h5><a class="text-secondary" href=" {{route('duatag', $tag)}} "><span><img height="35px" width="35px" src="/images/tags/{{$tag->id}}.png"/></span> {{$tag->name}} </a> </h5>
            <hr>
        @endforeach
    </div>
</div>