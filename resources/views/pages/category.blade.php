@extends('main')
@section('content')
    <div class="card mt-5">
      <h1>{{$category->title}}</h1>
        <div class="row">
            @foreach($category->movies as $movie)
                <div class="card">
                    <ul>
                        <li>Filmo pavadinimas:{{$movie->title}}</li>
                        <li>IMDB: reitingas:{{$movie->imdb}}</li>
                        <li>{{$movie->description}}</li>
                        <li><a href="/movie/{{$movie->id}}">Plačiau...</a></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
