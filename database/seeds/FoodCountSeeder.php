<?php

use Illuminate\Database\Seeder;
use App\FoodTo;

class FoodCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creación de alimentos para el dia 1 (hoy)
        FoodTo::create([
            'quantity' => '45.2',
            'food_id' => '2',
            'day_id' => '1'
        ]);

        FoodTo::create([
            'quantity' => '62.8',
            'food_id' => '1',
            'day_id' => '1'
        ]);

        FoodTo::create([
            'quantity' => '41.9',
            'food_id' => '3',
            'day_id' => '1'
        ]);

        //Creación de alimentos para el dia 2 (ayer)
        FoodTo::create([
            'quantity' => '44.2',
            'food_id' => '5',
            'day_id' => '2'
        ]);

        FoodTo::create([
            'quantity' => '112.8',
            'food_id' => '8',
            'day_id' => '2'
        ]);

        FoodTo::create([
            'quantity' => '21.9',
            'food_id' => '1',
            'day_id' => '2'
        ]);

        //Creación de alimentos para el dia 3 (antier)
        FoodTo::create([
            'quantity' => '78.2',
            'food_id' => '3',
            'day_id' => '3'
        ]);

        FoodTo::create([
            'quantity' => '125.8',
            'food_id' => '10',
            'day_id' => '3'
        ]);

        FoodTo::create([
            'quantity' => '101.93',
            'food_id' => '1',
            'day_id' => '3'
        ]);
    }
}
