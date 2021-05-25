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
            'name' => 'Arroz',
            'carbs' => '300.00',
            'fats' => '35.00',
            'proteins' => '50.00'
        ]);

        Food::create([
            'name' => 'Huevo',
            'carbs' => '10.00',
            'fats' => '352.00',
            'proteins' => '250.00'
        ]);

        Food::create([
            'name' => 'Frijol',
            'carbs' => '42.00',
            'fats' => '325.00',
            'proteins' => '501.00'
        ]);

        Food::create([
            'name' => 'Queso',
            'carbs' => '331.00',
            'fats' => '345.00',
            'proteins' => '54.00'
        ]);
    }
}
