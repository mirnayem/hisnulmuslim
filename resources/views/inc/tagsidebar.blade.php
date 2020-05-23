<div id="tagsidebar">
    
        @foreach ($tags as $tag)
        
        <a href=" {{route('duatag', $tag)}}">
   
        <div class="tagbox">
            <span id="tagboxsvg">{!! file_get_contents('images/tags/'.$tag->id.'.png') !!}</span> <p>{{$tag->name}}   </p>
        </div>   
    
        </a>  
       
        @endforeach

</div>