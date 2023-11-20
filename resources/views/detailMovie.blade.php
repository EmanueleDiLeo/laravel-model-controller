@extends('layouts.main')


@section('content')
<div class="container mt-5">

    <h1 class="text-center ">{{$movie->title}}</h1>
    <div class="row justify-content-center mt-4">
            <div class="col-4 mb-4">
                <div class="card ">
                    <div class="card-body">
                    <h5 class="card-title">Titolo Originale: {{$movie->original_title}}</h5>
                    <p class="card-text">Nazione: {{$movie->nationality}}</p>
                    <p class="card-text">Data di uscita: {{$movie->date}}</p>
                    <p class="card-text">Voto: {{$movie->vote}}</p>
                    <a href="{{route("home")}}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection

@section('title')
    | Dettagli Film
@endsection
