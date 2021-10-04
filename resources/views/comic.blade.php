@extends('layouts.main')

@section('title') {{$comic['series']}} @endsection

@section('content')
    <div class="container-stretch">
        <div class="row">
            <div class="col-60">
                <h1>{{$comic['title']}}</h1>
                <div class="row">
                    <div>{{$comic['price']}}</div>
                    <div></div>
                </div>
                <p>{{$comic['description']}}</p>
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