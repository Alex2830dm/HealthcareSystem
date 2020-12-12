<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    protected $fillable = [
        'Nombre', 'Apellidos', 'Cedula', 'Especialidad',
    ];
    public function Users(){
        return $this->belongsToMany(Users::class, 'citas', 'id_doctor', 'id_usuario');
    }
}
