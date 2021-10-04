@extends('layouts.main')

@section('title') {{$comic['series']}} @endsection

@section('content')
    <div class="container-stretch">
        <div class="row pb-70">

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
    
@endsection