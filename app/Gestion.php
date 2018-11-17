<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $fillable = ['gestion_academica', 'trabajo_colectivo','gestion_colectiva',
	'gestion_personal', 'actividad_apoyo', 'horas'];
    //
}
