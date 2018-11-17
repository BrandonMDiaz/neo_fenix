<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_anual extends Model
{
    protected $fillable = ['fecha', 'estado', 'docencia_id','investigacion_id',
    'sup_academica_id', 'tutoria_id', 'gestion_id', 'difusion_id', 'comentario_id', 'user_id'];
}
