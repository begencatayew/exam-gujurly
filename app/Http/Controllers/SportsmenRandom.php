<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SportsmenRandom as RandomModel; // random model edenimin sevabi garysdyrmaz yaly seederlerin ady den gelya shol sevapli

class SportsmenRandom extends Controller
{
    public function index()
    {
       $sportsmen = RandomModel::all();

    return view('sportsmens', compact('sportsmen'));
    }
}
