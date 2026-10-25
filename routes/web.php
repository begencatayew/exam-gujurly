<?php

use App\Models\Sportsmen;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sportsmens = Sportsmen::all();
    return view('home', compact('sportsmens'));
});
