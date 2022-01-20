@extends('layouts.main')

@section('head-title', "DC Comics | Comic Detail")
@section('main-content')
    <section class="comic-detail">
        <div class="jumbotron">
            <div class="cover container">
                <img src="{{$comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </section>
@endsection