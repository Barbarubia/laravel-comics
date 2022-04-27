@extends('template.base')

@section('title', 'Comics')

@section('content')
    <h1>Comics</h1>
    <div class="container cards-container">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                <h3>{{ $comic['series'] }}</h3>
            </div>
        @endforeach
    </div>
@endsection
