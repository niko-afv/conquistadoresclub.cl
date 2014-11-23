<?php

class CrearEspecialidadesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
            $categorias     =   Categoria::all()->toArray();
            $instituciones  =   Institucion::all()->toArray();
            
            return View::make('formulario',array(
                'categorias' => $categorias,
                'instituciones'=>$instituciones
            ));
	}
        
        public function guardar()
	{
            try{
                $array = Input::get();
            
                $oEspecialidad = new Especialidad();
            
                $oEspecialidad->CODIGO = $array['codigo'];
                $oEspecialidad->NOMBRE = $array['nombre'];
                $oEspecialidad->AÑO = $array['año'];
                $oEspecialidad->NIVEL = $array['nivel'];
                $oEspecialidad->CATEGORIA = $array['categoria'];
                $oEspecialidad->INSTITUCIÓN_ORIGEN = $array['institucion'];

                $result = $oEspecialidad->save();

                $response = array(
                    'result'    => $result,
                    'id'        => $oEspecialidad->id
                );
                $codigo = 200;
                
            } catch (Exception $ex) {
                $response = array(
                    'error' => $ex->getMessage()
                );
                $codigo = 500;
            }
            return Response::json(
                    $response,
                    $codigo,
                    [],
                    JSON_PRETTY_PRINT
                );
	}
        
        public function index2(){
            $especialidades     = Especialidad::orderBy("NOMBRE")->get()->toArray();
            
            return View::make('formulario2',array(
                'especialidades' => $especialidades,
            ));
        }
        
        
        public function guardar2()
	{            
            try{
                $array = Input::get();
            
                $oRequisito = new Requisito();
                /*@TODO: QUITAR TILDES EN NUMERACIÓN Y DESCRIPCIÓN*/
                $oRequisito->ESPECIALIDAD    =   $array['especialidad'];
                $oRequisito->NUMERACIÓN          =   $array['numero'];
                $oRequisito->DESCRIPCIÓN     =   $array['descripcion'];

                $result = $oRequisito->save();

                $response = array(
                    'result'    => $result,
                    'requisitos'        => Especialidad::find($array['especialidad'])->requisitos()->count()
                );
                $codigo = 200;
                
            } catch (Exception $ex) {
                $response = array(
                    'error' => $ex->getMessage()
                );
                $codigo = 500;
            }
            return Response::json(
                    $response,
                    $codigo,
                    [],
                    JSON_PRETTY_PRINT
                );
	}
        public function get_requisitos(){
            try{
                $get = Input::get();
                $requisitos = Especialidad::find($get['especialidad'])->requisitos()->count();
                
                $response = array(
                    'respuesta' => $requisitos
                );
                $codigo = 200;
            } catch (Exception $ex) {
                $response = array(
                    'error' => $ex->getMessage()
                );
                $codigo = 500;
            }
            
            return Response::json(
                $response,
                $codigo,
                [],
                JSON_PRETTY_PRINT
            );
        }

}
