<?php

class Requisito extends Eloquent {

    protected $table = 'REQUISITOS';
    public $timestamps = false;
        
    public function especialidad()
    {
        return $this->belongsTo('Especialidad');
    }

}
