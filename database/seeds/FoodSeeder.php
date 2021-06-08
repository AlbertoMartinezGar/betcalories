<?php


use Illuminate\Database\Seeder;
use App\Food;
use Illuminate\Support\Str;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrays = range(0, 50);
        foreach ($arrays as $valor) {
          Food::create([
            'name' => Str::random(10),
            'carbs' => rand(10, 30),
            'fats' => rand(10, 30),
            'proteins' => rand(10, 30),
            'totalCalories' => rand(100, 200)
            ]);
        }
    }
}
