<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        $dati =config("data");

        $movie = Movie::all();

        $datas = [
            "dati" => $dati,
            "movie" => $movie,
        ];

        return view('home', $datas);
    }
}
