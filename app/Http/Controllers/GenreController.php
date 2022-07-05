<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //Genre
    public function index(Genre $genre){
        return view('genre',[
            "name" => $genre->name,
            "movies" => $genre->movies
        ]);
    }
}
