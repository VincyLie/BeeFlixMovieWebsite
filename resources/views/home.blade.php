@include('navbar')
@extends('master')
@section('container')
        <div class="row justify-content-center">
            @foreach ($genres as $genre)
            <h5 class="text-center">{{ $genre->name }}</h5>
                @foreach ($movies as $movie)
                    @if ($movie->genre_id == $genre->id)
                        <div class="card m-2 p-1 bg-light text-dark pt-2" style="width: 14rem; height:25rem">
                            <img src="/assets/{{ $movie->photo }}" class="card-img-top" style="height: 18rem;">
                            <div class="card-body">
                                <h6 style="height: 2rem">{{ $movie->title }}</h6>
                                <a href="/detail/{{ $movie->id }}" class="btn btn-success text-light">LIHAT FILM</a>
                            </div>
                        </div>                      
                    @endif
                @endforeach
            @endforeach
        </div>
@endsection