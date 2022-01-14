<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Jeroni',
            'email'=>'jmateo@cifpfbmoll.eu',
            'email_verified_at' => now(),
            'password' => Hash::make('secretos'),
            'remember_token' => Str::random(10),
        ]);
    }
}