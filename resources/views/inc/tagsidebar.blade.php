<div id="tagsidebar">
    
        @foreach ($tags as $tag)
        <a href=" {{route('duatag', $tag)}}">
        <div id="tagbox">
            <span><img class="rounded-circle" height="35px" width="35px" src="/images/tags/{{$tag->id}}.png"/></span> <p>{{$tag->name}}   </p>
        </div>   
        </a>  
        @endforeach

</div>