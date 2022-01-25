<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    public function contactos($value='')
    {
        return $this->hasMany(Contactos::class);
    }
}
