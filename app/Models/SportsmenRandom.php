<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class SportsmenRandom extends Model
{
    use HasFactory;

    protected $table = 'random_sportsmen';


    protected $fillable = [
        'name',
        'surname',
        'age',
        'bio',
        'image',
    ];
}
