@extends('layouts.main')

@section('main-content')
    <ul class="card-list container">
        @foreach ($comics as $comic)
            <li class="card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h4>
                    {{ $comic['series'] }}
                </h4>
            </li>
        @endforeach
    </ul>
@endsection