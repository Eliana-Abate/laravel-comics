<section id="current-series" class="container h-100">
    <div id="series-btn">
        <h3>CURRENT SERIES</h3>
    </div> 

    <div class="series-grid">
        @foreach ($comics as $comic)
            <section class="card">
        
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <p>{{$comic['series']}}</p>
            </section>  
        @endforeach  
    </div>

    <div id="load-btn">
        <h4>LOAD MORE</h4>
    </div> 
</section>

