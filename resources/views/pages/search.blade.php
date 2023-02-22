@extends('main')
@section('content')
    <div class="card mt-5">
        <h1 class="mt-4">Paieška</h1>
 @if(isset($results))
            <h1 class="mt-4">Paieškos rezultatai</h1>
        @foreach($results as $movie)
            <div class="col-4">
                <ul>
                    <li>{{$movie->title}}</li>
                    <li><a href="/movie/{{$movie->id}}">Plačiau...</a></li>
                </ul>
            </div>
        @endforeach
     @endif
    </div>

@endsection
