<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencias extends Model
{
    protected $fillable = [
        'Institucion',
        'Zona',
        'Telefono'
    ];
}
