<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $albums = Album::limit(6)->get();

        return view('home', compact('albums'));
    }
}
