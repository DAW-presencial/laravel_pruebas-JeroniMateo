<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =\Faker\Factory::create();
                    DB::table('teams')->insert([
                'team_name' => "Pistons",
                'foundation' => $faker->numberBetween(1946,1980),
            ]);
    }
}
