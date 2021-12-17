<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker =\Faker\Factory::create();

        for ($i=0; $i <20 ; $i++) { 
            DB::table('games')->insert([
                'match' => $faker->date(),
                'local' => $faker->randomElement([
                    "Clippers",
                    "Lakers",
                    "Warriors",
                    "Suns",
                    "Spurs"
                ]),

                'visitant' => $faker->randomElement([
                    "Nets",
                    "Bucks",
                    "76ers",
                    "Celtics",
                    "Heat"
                ]), 
            ]);
            }   
    }
}
