<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =\Faker\Factory::create();

        for ($i=0; $i < 30; $i++) { 
            DB::table('stadiums')->insert([
                'stadium_name'=> $faker->city(),
                'capacity'=>$faker ->numberBetween(20000,100000),
            ]);
        };
    }
}
