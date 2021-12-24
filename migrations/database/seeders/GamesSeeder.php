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

        for ($i=0; $i <82 ; $i++) { 
            DB::table('games')->insert([
                'match' => $faker->date(),
                'local' => $faker->randomElement([
                  "Suns",
                  "Warriors",
                  "Jazz",
                  "Grizzlies",
                  "Clippers",
                  "Lakers",
                  "Nuggets",
                  "Mavericks",
                  "Timberwolves",
                  "Trail Blazers",
                  "Spurs",
                  "Kings",
                  "Thunder",
                  "Pelicans",
                  "Rockets"
                ]),

                'visitant' => $faker->randomElement([
                    "Nets",
                    "Bulls",
                    "Bucks",
                    "Cavaliers",
                    "Heat",
                    "Wizards",
                    "76ers",
                    "Celtics",
                    "Hornets",
                    "Raptors",
                    "Hawks",
                    "Knicks",
                    "Pacers",
                    "Magic",
                    "Pistons"
                   
                ]), 
            ]);
            }   
    }
}
