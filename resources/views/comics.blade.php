@extends('template.base')

@section('title', 'Comics')

@section('content')
    <h1>Comics</h1>
    <div class="container comics-container">
        <div class="cards-container">
            @foreach ($comics as $comic)
                <div class="comic-card">
                    <div class="serie-thumb">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    <span class="serie-title">{{ $comic['series'] }}</span>
                </div>
            @endforeach
        </div>
        <button>Load More</button>
    </div>
@endsection
