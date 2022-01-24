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
            'nombre' => 'Jeroni',
            'phonebook_id'=>1,
            'telefono' => '123456789',
            'tipo' => 'Movil'
            
        ]);
        DB::table('contactos')->insert([
            'nombre' => 'Rafael',
            'phonebook_id'=>2,
            'telefono' => '987654321',
            'tipo' => 'Fijo'
        ]);
        DB::table('contactos')->insert([
            'nombre' => 'Toni',
            'phonebook_id'=>1,
            'telefono' => '342340123',
            'tipo' => 'Movil'
        ]);
    }
}
