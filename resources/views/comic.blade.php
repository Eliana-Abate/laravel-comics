@extends('layouts.main')

@section('title') {{$comic['series']}} @endsection

@section('content')
    <div class="container-stretch py-100">
        <div class="row">
            <div class="col-60">
                <h1 class="comic-title">{{$comic['title']}}</h1>
                <div class="row green-table">
                    <div class="col-65 bord-right">
                        <div class="row">
                            <h4>U.S. Price: </h4>
                            <h4> {{$comic['price']}} </h4>
                        </div>
                        <div>
                            <h4>AVAILABLE</h4>
                        </div>
                    </div>
                    <div class="col-35">
                       <h4>Check Availability</h4>
                       <i class="fas fa-sort-down"></i>
                    </div>
                </div>
                <p class="comic-text">{{$comic['description']}}</p>
            </div>
            <div class="col-40">
                <h4>ADVERTISEMENT</h4>
                <figure>
                    <img src="{{asset('images/adv.jpg')}}" alt="adv">
                </figure>

            </div>
        </div>
        
    </div>
    
@endsection