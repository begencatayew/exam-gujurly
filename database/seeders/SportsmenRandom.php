<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SportsmenRandom as RandomModel;

class SportsmenRandom extends Seeder
{
    public function run(): void
    {
        RandomModel::factory()->count(20)->create();
    }
}
