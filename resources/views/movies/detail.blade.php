@extends('layouts.layout')

@section('content')

    <div class="container-fluid" id="containerHome">
        <div class="d-flex justify-content-around">
            <img src="/images/{{$movies->photo}}" alt="" class="detail-photo-position">
            <div class="mid-content">
                <h3 id="detail-title">{{$movies->title}}</h3>
                @for($i=0; $i<$movies->rating;$i++)
                    <img class="star" src="/images/star.svg" alt="">
                @endfor
                @for($i=0; $i<(5-$movies->rating);$i++)
                    <img class="star" src="/images/empty-star.svg" alt="">
                @endfor
                <p class="text-justify">{{$movies->description}}</p>
                @method('POST')
                <p>Kategori : <a href="{{route('movies.category',$movies->genre->name)}}">{{$movies->genre->name}}</a></p>
            </div>
            <div class="detail-table-position">
                <h5 style="font-weight: 700; margin-bottom: 30px;">EPISODE</h5>
                <table class="table table-striped" >
                    <thead>
                    <tr>
                        <th scope="col">episode</th>
                        <th scope="col">judul</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($episodes as $episode)
                        <tr>
                            <td>episode {{$episode->episode}}</td>
                            <td>: {{$episode->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$episodes->links()}}
            </div>
        </div>
    </div>

@endsection
