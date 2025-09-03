<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interesado extends Model
{
    use HasFactory;

    protected $table = 'interesados';

    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'autorizaContacto',
    ];
}
