<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    //Home 
    public function index(){
        return view('home',[
            "title" => "Home",
            "movies" => Movie::all(),
            "genres" => Genre::all()
        ]);
    }
    //Detail 
    public function show (Movie $movie){
        return view('detail',[
            "title" => "Detail",
            "movie" => $movie,
            $episodes = $movie->episodes()->paginate(3),
            "episodes" => $episodes
        ]);
   }
}
