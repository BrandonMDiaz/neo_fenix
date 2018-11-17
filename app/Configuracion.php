<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $fillable = ['logo', 'periodo', 'horas', 'fecha_inicio_p',
    'fecha_fin_p', 'fecha_inicio_i', 'fecha_fin_i'];
}
