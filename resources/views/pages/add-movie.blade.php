@extends('main')
@section('content')
    <h1 class="mt-4">Pridėti filmą</h1>
    <form action="" method="post">
        <div class="form-group m-1">
            <input type="text" name="title" class="form-control" placeholder="Filmo pavadinimas">
        </div>
        <div class="form-group m-1">
            <input type="text" name="title" class="form-control" placeholder="IMDB reitingas">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="director" placeholder="Režisierius">
        </div>
        <div class="form-group m-1">
            <select name="category" class="form-control">
                <option selected disabled>--Pasirinkite kategoriją</option>
                <option value="1">Veiksmo</option>
                <option value="1">Drama</option>
            </select>
        </div>
        <div class="form-group m-1">
            <textarea name="description" placeholder="Aprašymas" class="form-control"></textarea>
        </div>
        <div class="div-group m-1">
            <label>Plakatas</label>
            <input type="file" class="form-control">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection
