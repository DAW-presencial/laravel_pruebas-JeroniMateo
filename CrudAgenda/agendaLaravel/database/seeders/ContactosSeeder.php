<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
            'nombre'=>'Jeroni',
            'telefono'=>'123456789'
        ]);
        DB::table('contactos')->insert([
            'nombre'=>'Rafael',
            'telefono'=>'987654321'
        ]);
    }
}
