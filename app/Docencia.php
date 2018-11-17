<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docencia extends Model
{
    protected $fillable = ['materia', 'act_apoyo', 'formacion_personal', 'horas'];
}
