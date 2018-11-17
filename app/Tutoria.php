<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutoria extends Model
{
    protected $fillable = ['ayuda', 'participacion', 'act_retencion', 'grupos', ' act_reprobatoria', 'asesorias', 'proyectos', 'horas'];
}
