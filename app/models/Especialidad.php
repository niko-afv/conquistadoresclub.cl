<?php

class Especialidad extends Eloquent {

    protected $table = 'ESPECIALIDADES';
    public $primaryKey = 'ID';
    public $timestamps = false;
        
    public function requisitos()
    {
        return $this->hasMany('Requisito','ESPECIALIDAD');
    }
    
    public function categoria()
    {
        return $this->belongsTo('Categoria','CATEGORIA');
    }
    
    public function institucion()
    {
        return $this->belongsTo('Institucion','INSTITUCIÓN_ORIGEN');
    }

}
