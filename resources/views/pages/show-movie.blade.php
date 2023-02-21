@extends('main')
@section('content')
    <div class="card mt-5">
        <h1 class="mt-4">{{$movie->title}}</h1>
        <p>{{$movie->description}}</p>
        <h3>Kita informacija apie filmą:</h3>
        <ul>
            <li>Režisierius: {{$movie->director}}</li>
            <li>IMDB reitingas: {{$movie->imdb}}</li>
            <li>Filmas sukurtas:{{$movie->created}}</li>
        </ul>
        <h4>Veiksmai:</h4>
        <ul>
            <li><a href="/movie/edit/{{$movie->id}}">Redaguoti</a></li>
            <li><a href="/movie/delete/{{$movie->id}}">Šalinti</a></li>
        </ul>
    </div>



@endsection
