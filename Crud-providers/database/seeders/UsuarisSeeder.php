<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuaris')->insert([
            'name' => "Rafael",
            'apellidos' => "Andión",
            'email'=>'randion@cifpfbmoll.eu',
            'password' => Hash::make('secretos'),
            'remember_token' => Str::random(10),

        ]);
    }
}
