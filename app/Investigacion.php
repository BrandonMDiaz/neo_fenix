<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    protected $fillable = ['linea_id', 'proyectos', 'actividades', 'otras_act', 'avance_1', 'avance_2', 'avance_3', 'avance_4', 'avance_5', 'horas'];
}
