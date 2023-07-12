<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MainController extends Controller
{

    public function index()
    {
        $z = Movie::where('original_title', 'like', 'Gravity');

        return view('home', compact('$z'));
    }
}
