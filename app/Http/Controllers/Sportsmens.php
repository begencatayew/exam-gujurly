<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sportsmen;

class Sportsmens extends Controller
{
    public function index() {
        $sportsmens = Sportsmen::all();

        return view('home', compact('sportsmens'));

    }
}
