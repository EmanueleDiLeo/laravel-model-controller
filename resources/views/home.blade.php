@extends('layouts.main')

@section('content')

    <div class="container">

        <h1 class="text-center ">MOVIES</h1>
        <div class="row mt-5">

            @foreach ($movies as $movie)
                <div class="col-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                        <h4 class="card-title">Titolo: {{$movie->title}}</h4>
                        <h5 class="card-title">Titolo Originale: {{$movie->original_title}}</h5>
                        <p class="card-text">Nazione: {{$movie->nationality}}</p>
                        <p class="card-text">Data di uscita: {{$movie->date}}</p>
                        <p class="card-text">Voto: {{$movie->vote}}</p>
                        <a href="{{ route("detail",  ["id"=>$movie->id ])}}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
             @endforeach

        </div>
    </div>

@endsection

@section('title')
    | Homepage
@endsection
