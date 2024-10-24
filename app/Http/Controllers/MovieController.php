<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // Recupero tutti i movies dal database
        $movies = Movie::all();
        // @dd($movies);

        return view('pages.home', compact('movies'));
    }
}
