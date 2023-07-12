<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MainController extends Controller
{

    public function index()
    {
        $movies = Movie::all();

        return view('home', compact('$movie'));
    }
}
