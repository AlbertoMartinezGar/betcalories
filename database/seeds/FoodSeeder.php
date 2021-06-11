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
        Food::create([
            'name' => 'Frijoles pintos',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Frijoles negros',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Frijoles bayos',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);
        
        Food::create([
            'name' => 'Pechuga de pollo',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Huevo',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Arroz',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Chuleta de cerdo',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Leche',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Pan integral',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);

        Food::create([
            'name' => 'Jamon',
            'carbs' => rand(10, 80),
            'fats' => rand(10, 80),
            'proteins' => rand(10, 80),
            'totalCalories' => rand(100, 300)
        ]);
    }
}
