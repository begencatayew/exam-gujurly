<?php

use App\Models\Sportsmen;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sportsmens = Sportsmen::all();
    return view('home', compact('sportsmens'));
})->name('home');

Route::get('/sportsmens', function () {
    return view('sportsmens');
})->name('sportsmens');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

