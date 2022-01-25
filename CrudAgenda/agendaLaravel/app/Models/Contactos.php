<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $fillable =['nombre','telefono','tipo'];

    public function getRouteKeyName()
    {
        return 'nombre';
    }

    public function phonebook()
    {
       return $this->belongsTo(Phonebook::class);
    }
}
