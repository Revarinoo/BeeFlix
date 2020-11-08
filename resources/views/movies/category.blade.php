@extends('layouts.layout')

@section('content')

    <div class="container-fluid" id="containerHome">
            @foreach($movies as $movie)
            @endforeach
                <h3 class="home-title">{{$movie->genre->name}}</h3>
                <div class="row">
                    @foreach($movies as $movie)
                        <div class="col-lg-3 cardHomePosition">
                            <div class="card">
                                <img src="/images/{{$movie->photo ? $movie->photo : 'http://placehold.it/100x100'}}" class="card-img-top photo-position" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movie->title}}</h5>
                                    <form action="{{route('movies.show',$movie->id)}}" method="POST"></form>
                                    <a href="{{route('movies.show',$movie->id)}}" class="btn btn-dark d-lg-block btnLihatFilm">LIHAT FILM</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    </div>

@endsection
