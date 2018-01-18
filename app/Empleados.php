<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //tabla Empleado

    protected $table = 'trabajador';
    public $timestamps = false;//tiempo by default

    /*
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    */
}
