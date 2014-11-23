<?php

class RecursosViewController extends BaseController {

	public function index()
	{
            return View::make('recursos', array(
                'tipos_recursos' => $this->tipos_recursos,
            ));
	}
        
        public function showRecursos($id_tipo_recurso)
	{
            $labels = "";
            $recursos = Recurso::where("TIPO_RECURSO", "=",$id_tipo_recurso)->get()->toArray();
            
            return View::make('recursos_especialidades_desarrolladas',array(
                'especialidades'    =>  $recursos,
                'labels'            =>  $labels,
                'tipos_recursos'    =>  $this->tipos_recursos
            ));
	}
        
        public function showSingleRecurso($id_recurso)
	{
            $labels = "";
            $recurso = Recurso::find($id_recurso)->toArray();
            $etiquetas = explode(",",$recurso['ETIQUETAS']);
            
            return View::make('recursos_single',array(
                'recurso'           =>  $recurso,
                'labels'            =>  $labels,
                'tipos_recursos'    =>  $this->tipos_recursos,
                'etiquetas'         =>  $etiquetas
            ));
	}

}
