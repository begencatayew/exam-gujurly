<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SportsmenRandom as RandomModel; // random model edenimin sevabi garysdyrmaz yaly seederlerin ady den gelya shol sevapli

class SportsmenRandom extends Seeder
{
    public function run(): void
    {
        RandomModel::factory()->count(20)->create();
    }
}
