<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	#especificas el nombre de la tabla, el lo hace automatico, solo es en caso que lo hayas cambiado
    #protected $table = '';
    #creates a way to save to the db
    
    protected $fillable = ['cumplimiento', 'observaciones'];
    
}
