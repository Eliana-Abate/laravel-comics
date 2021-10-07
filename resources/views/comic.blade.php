@extends('layouts.main')

@section('title') {{$comic['series']}} @endsection

@section('content')
    <div class="blue-spacer">
        <div class="container-stretch">
            <div class="comic-poster">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <div class="gallery-text">VIEW GALLERY</div>
            </div>
        </div>
        
        
    </div>

    <div class="container-stretch">
        <div class="row pt-50 pb-80">

            <div class="col-65 row-2 pt-70">
                <h1 class="comic-title">{{$comic['title']}}</h1>
                <div class="row green-table">
                    <div class="col-65 bord-right row-1">
                        <div class="row">
                            <h4 class="light-text mg-right-10">U.S. Price: </h4>
                            <h4> {{$comic['price']}} </h4>
                        </div>
                        <div>
                            <h4 class="light-text">AVAILABLE</h4>
                        </div>
                    </div>

                    <div class="col-35 row-center">
                       <h4 class="mg-right-10">Check Availability</h4>
                       <i class="fas fa-sort-down"></i>
                    </div>
                </div>
                <p class="comic-text">{{$comic['description']}}</p>
            </div>

            <div class="col-35 special-row-4">
                <figure>
                    <h4>ADVERTISEMENT</h4>
                    <img src="{{asset('images/adv.jpg')}}" alt="adv">
                </figure>
            </div>
        </div>  
    </div>

    <div class="grey-box py-50">
        <div class="container-stretch pb-80">
            <div class="flex">
                <div class="col-50 mg-rigth-40">
                    <h2>Talent</h2>
                    <div class="grey-box flex">
                        <div class="col-35">
                            <span>Art by:</span>
                        </div>

                        <div class="g-box-text col-65">
                            <span>
                                @php
                                    echo implode(', ', $comic['artists']);
                                @endphp
                            </span>
                        </div>
                    </div>

                    <div class="grey-box flex">
                        <div class="col-35">
                            <span>Written by:</span>
                        </div>

                        <div class="g-box-text col-65">
                            <span>
                                @php
                                    echo implode(', ', $comic['writers']);
                                @endphp
                            </span>
                            
                        </div>
                    </div>
                    
                    
                    <div class="grey-hr"></div>

                </div>
                <div class="col-50 mg-left-40">
                    <h2>Specs</h2>
                    <div class="grey-box flex">
                        <div class="col-35">
                            <span>Series:</span>
                        </div>

                        <div class="g-box-text col-65">
                            <span class="up-text">{{$comic['series']}} </span>
                        </div>
                    </div>

                    <div class="grey-box flex">
                        <div class="col-35">
                            <span>U.S. Price:</span>
                        </div>

                        <div class="g-box-text col-65">
                            <span class="grey-text">{{$comic['price']}} </span>
                        </div>
                    </div>

                    <div class="grey-box flex">
                        <div class="col-35">
                            <span>On Sale Date:</span>
                        </div>

                        <div class="g-box-text col-65">
                            
                            <span class="grey-text">{{$comic['sale_date']}} </span>
                           
                        </div>
                    </div>
                    <div class="grey-hr"></div>

                </div>
            </div>
        </div>
    </div> 
@endsection