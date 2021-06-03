<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\User;
use App\Food;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FoodSeeder::class);
        $this->call(UserSeeder::class);
    }
}
