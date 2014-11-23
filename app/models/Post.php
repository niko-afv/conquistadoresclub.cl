<?php

class Post extends Eloquent {

    protected $table = 'BLOG_POSTS';
    public $primaryKey = 'ID';
    public $timestamps = false;
    
    /*public function tipo_recurso()
    {
        return $this->belongsTo('TipoRecurso','TIPO_RECURSO');
    }*/
}
