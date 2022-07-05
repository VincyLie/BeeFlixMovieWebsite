@include('navbar')
@extends('master')
@section('container')
        <div class="row justify-content-center">
            <div class="d-flex flex-row justify-content-center" style="height:25rem">
                <div class="container m-2" style="width: 16rem;">
                    <img src="/assets/{{ $movie->photo }}" alt="" style="width: 15rem;height: 24rem">
                </div>
                <div class="container m-2"style="width:30rem;">
                    <h5>{{ $movie->title }}</h5>
                    @for($i=0;$i<$movie->rating;$i++)
                        <span class="fa fa-star checked" style="color: orange;">★</span>
                    @endfor
                    <br>
                    <small style="mb-2">
                        {{ $movie->description }}
                    </small>
                    <br>
                    <br>
                    @if($movie->genre_id=='1')
                        <small>kategori: <a href="/genre/{{ $movie->genre_id }}">Drama</a></small>
                    @elseif($movie->genre_id=='2')
                        <small>kategori: <a href="/genre/{{ $movie->genre_id }}">Kids</a></small>
                    @else
                        <small>kategori: <a href="/genre/{{ $movie->genre_id }}">TV Show</a></small>
                    @endif
                </div>
                    <div>
                        <h6>EPISODE</h6>
                        <table class="table text-light">
                            <thead class="table-success text-dark">
                              <tr>
                                <th>episode</th>
                                <th>judul</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($episodes as $episode)
                                  <tr>  
                                    <th>episode {{ $episode->episode }}</th>
                                    <th>{{ $episode->title }}</th>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$episodes->links()}}
                    </div>
            </div>
        </div>
@endsection