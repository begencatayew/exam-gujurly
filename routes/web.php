<?php
use App\Http\Controllers\SportsmenRandom;
use App\Models\Sportsmen;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sportsmens = Sportsmen::all();
    return view('home', compact('sportsmens'));
})->name('home');

Route::get('/sportsmens', [SportsmenRandom::class, 'index'])
    ->name('sportsmens');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

