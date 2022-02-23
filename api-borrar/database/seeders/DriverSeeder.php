<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'fname'=>'Lewis',
            'lname'=>'Hamilton',
            'driverteam'=>'Mercedes'
        ]); 
        DB::table('drivers')->insert([
            'fname'=>'Valtteri',
            'lname'=>'Bottas',
            'driverteam'=>'Mercedes'
        ]); 
    }
}
