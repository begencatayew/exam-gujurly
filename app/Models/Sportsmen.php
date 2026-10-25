<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sportsmen extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'age',
        'bio',
    ];
}
