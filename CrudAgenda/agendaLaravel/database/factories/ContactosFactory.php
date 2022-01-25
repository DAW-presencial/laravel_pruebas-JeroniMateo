<?php

namespace Database\Factories;

use App\Models\Contactos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Contactos::class, function (Faker $faker){
    return [
        'nombre' => $faker->name(),
        'phonebook_id'=>$faker->unique()->id,
        'telefono' => $faker->numerify('#########'),
        'tipo' => $faker->randomElement([
            "Movil",
            "Fijo"
          ])
    ];
});
