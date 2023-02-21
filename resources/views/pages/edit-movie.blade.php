@extends('main')
@section('content')
    <h1 class="mt-4">Redaguoti informaciją apie filmą</h1>
    @include('_partials/errors')
    <form action="/update/{{$movie->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="title" class="form-control" value="{{$movie->title}}">
        </div>
        <div class="form-group m-1">
            <input type="text" name="imdb" class="form-control" value="{{$movie->imdb}}">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="director" value="{{$movie->director}}">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="created" value="{{$movie->created}}">
        </div>
        <div class="form-group m-1">
            <textarea name="description" placeholder="Aprašymas" class="form-control">{{$movie->description}}</textarea>
        </div>
        <div class="div-group m-1">
            <label>Plakatas</label>
            <input type="file" class="form-control" name="poster">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection
