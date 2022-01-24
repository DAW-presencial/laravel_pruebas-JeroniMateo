<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phonebooks')->insert([
            'name' => 'MateoPhoneBook'
        ]);
        DB::table('phonebooks')->insert([
            'name' => 'AndionPhoneBook'
        ]);
    }
}
