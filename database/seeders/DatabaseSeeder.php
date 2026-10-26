<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SportsmenRandom::class,  // php artisan db:seed edilende SportsmenRandom seeder cagirilya eger de shu funksiyonu gosmadyk bolsodym onno ozum php artisan db:seed --class=SportsmanRandom diyip cagyrmaly bolordym
        ]);
    }
}
