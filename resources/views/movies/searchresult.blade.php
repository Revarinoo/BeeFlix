@extends('layouts.layout')

@section('content')


    <div class="container-fluid" id="containerHome">

        @if(sizeof($movies)>0)
            <div class="row">
                @foreach($movies as $movie)
                    <div class="col-lg-3 cardHomePosition">
                        <div class="card mb-5">
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

        {{$movies->links()}}

            @else
            <div class="result">
                <h1>Film Tidak Dapat Ditemukan</h1>
                <div class="icon-cancel">
                    <img src="/images/close.svg" alt="" class="icon-x-1">
                    <img src="/images/close.svg" alt="" class="icon-x-23">
                    <img src="/images/close.svg" alt="" class="icon-x-23">
                </div>
            </div>
        @endif
    </div>

@endsection
