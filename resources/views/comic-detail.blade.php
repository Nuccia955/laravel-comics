@extends('layouts.main')

@section('head-title', "DC Comics | Comic Detail")
@section('main-content')
    <section class="comic-detail">
        <div class="jumbotron">
            <div class="cover container">
                <img src="{{$comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
        <div class="comic">
            <div class="container">
                <div class="text">
                    <h1 class="title">
                        {{ $comic['title'] }}
                    </h1>
                    <div class="wrapper">
                        <div class="details">
                            <span>
                                U.S. price: <strong>{{ $comic['price'] }}</strong>
                            </span>
                            <span>
                                AVAILABLE
                            </span>
                        </div>
                        <div class="menu-check">
                            Check Availability
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $comic['description']}}
                        </p>
                    </div>
                </div>

                <div class="adv">
                    <span>ADVERTISEMENT</span>
                    <a href="">
                        <img src="{{ asset('images/adv.jpg') }}" alt="adv superman">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection