<?php

use Illuminate\Database\Seeder;
use App\Day;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actualDate = date("Y-m-d");
        $dateMenos1 = date("Y-m-d", strtotime($actualDate."- 1 days"));
        $dateMenos2 = date("Y-m-d", strtotime($actualDate."- 2 days"));

        Day::create([
            'date' => $actualDate,
            'user_id' => '2'
        ]);

        Day::create([
            'date' => $dateMenos1,
            'user_id' => '2'
        ]);

        Day::create([
            'date' => $dateMenos2,
            'user_id' => '2'
        ]);
    }
}
