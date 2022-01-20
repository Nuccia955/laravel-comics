@extends('layouts.main')

@section('main-content')
    <ul class="card-list container">
        @foreach ($comics as $index => $comic)
            <li class="card">
                <a href="{{route('comic-detail', ['id' => $index])}}">
                    <div class="cover">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="text">
                        <h4>
                            {{ $comic['series'] }}
                        </h4>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
    <div>
        <a href="" class="button">Load More</a>
    </div>
@endsection