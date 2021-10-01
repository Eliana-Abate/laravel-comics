<header>
    <section id="main-header">
        <div class="container h-100">
            <div class="row h-100">

                <div id="header-logo" class="col-40 row">
                    <img src="{{asset('images/dc-logo.png')}}" alt="dc-logo">
                </div>

                <div class="col-60">
                    <nav>
                        <ul class="row">
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('comics')}}">Comics</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> 
        </div>
    </section>
</header>