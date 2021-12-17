<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =\Faker\Factory::create();
        for ($i=0; $i < 50; $i++) { 
            DB::table('players')->insert([
                'player_name'=>$faker->name(),
                'age'=>$faker->numberBetween(18,40),
                'nationality'=>$faker->country(),
                'position'=> $faker->randomElement([
                    "G",
                    "F",
                    'C',
                ]),
            ]);
        }
    }
}
