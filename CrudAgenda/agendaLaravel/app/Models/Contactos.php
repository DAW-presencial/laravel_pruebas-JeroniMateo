<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $fillable =['nombre','telefono'];

    public function getRouteKeyName(){
        return 'nombre';
    }
}
