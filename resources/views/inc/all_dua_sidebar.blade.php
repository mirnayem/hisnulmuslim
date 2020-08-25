<div id="tagsidebar">
    
    @foreach ($duas as $dua)
    
    <a href="{{route('duas.show', $dua->slug)}}">

    <div class="tagbox dua_sidebar">
        <h6> {{$dua->title}} </h6>
    </div>   

    </a>  
   
    @endforeach

</div>