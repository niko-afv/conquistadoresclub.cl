<?php

class Recurso extends Eloquent {

    protected $table = 'RECURSOS';
    public $primaryKey = 'ID';
    public $timestamps = false;
    
    public function tipo_recurso()
    {
        return $this->belongsTo('TipoRecurso','TIPO_RECURSO');
    }
}
