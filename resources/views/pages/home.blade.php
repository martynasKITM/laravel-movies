@extends('main')
@section('content')
    <h1 class="mt-4">Movies</h1>
    <div class="row">
       @foreach($movies as $movie)
           <div class="col-4">
               <ul>
                   <li>{{$movie->title}}</li>
                   <li>{{$movie->director}}</li>
                   <li>{{$movie->imdb}}</li>
                   <li><a href="/movie/{{$movie->id}}">Plačiau...</a></li>
               </ul>
           </div>
           @endforeach
    </div>
@endsection
