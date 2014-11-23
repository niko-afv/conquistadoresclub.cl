<?php

class DashboardEspecialidadesController extends BaseController {

	public function ver($id = 1)
	{
            $oEspecialidad = Especialidad::find($id)->toArray();            
            $oCategoria = Especialidad::find($id)->categoria()->get()->toArray();
            $nombre_dir = $this->convert_string($oCategoria[0]['NOMBRE']);
            $oInstitucion = Especialidad::find($id)->institucion()->get()->toArray();
            $requisitos = Especialidad::find($id)->requisitos()->get()->toArray();
            
            return View::make('backend/especialidad_view',array(
                'id_especialidad'           => $oEspecialidad['ID'],
                'nombre_especialidad'           => $oEspecialidad['NOMBRE'],
                'codigo_especialidad'           => $oEspecialidad['CODIGO'],
                'nivel_especialidad'            => $oEspecialidad['NIVEL'],
                'año_especialidad'              => $oEspecialidad['AÑO'],
                'parche_especialidad'           => $oEspecialidad['PARCHE'],
                'categoria_especialidad'        => $oCategoria[0]['NOMBRE'],
                'institucion_especialidad'      => (isset($oInstitucion[0]))?$oInstitucion[0]['NOMBRE']:NULL,
                'requisitos_especialidad'       => $requisitos,
                'nombre_dir'                    => $nombre_dir
            ));
	}

        public function crear()
	{            
            $categorias     =   Categoria::all()->toArray();
            $instituciones  =   Institucion::all()->toArray();
            
            return View::make('backend/especialidad_form',array(
                'categorias' => $categorias,
                'instituciones'=>$instituciones
            ));
	}
        
        public function listar(){
            $oEspecialidades = Especialidad::All();
            
            return View::make('backend/especialidad_list',array(
                'especialidades' => $oEspecialidades
            ));
        }
        
        public function guardar(){
            try{
                $array = Input::get();
            
                $oEspecialidad = new Especialidad();
            
                $oEspecialidad->CODIGO = (count($array['codigo'])>0)?$array['codigo']:NULL;
                $oEspecialidad->NOMBRE = (count($array['nombre'])>0)?$array['nombre']:NULL;
                $oEspecialidad->AÑO = (count($array['año'])>0)?$array['año']:NULL;
                $oEspecialidad->NIVEL = ($array['nivel']>0)?$array['nivel']:NULL;
                $oEspecialidad->CATEGORIA = ($array['categoria']>0)?$array['categoria']:NULL;
                $oEspecialidad->INSTITUCIÓN_ORIGEN = ($array['institucion']>0)?$array['institucion']:NULL;

                $result = $oEspecialidad->save();

                /*$response = array(
                    'result'    => $result,
                    'id'        => $oEspecialidad->id
                );*/
                $messege = "La especialidad de ha creado con exito";
                $codigo = 200;
                
            } catch (Exception $ex) {
                /*$response = array(
                    'error' => $ex->getMessage()
                );*/
                $messege = "Ha Ocurrido un Error Interno";
                $codigo = 500;
                return Redirect::to('/admin/especialidad/crear')->with('error', $messege);
            }
            /*return Response::json(
                    $response,
                    $codigo,
                    [],
                    JSON_PRETTY_PRINT
                );*/
            return Redirect::to('/admin/especialidad/ver/'.$oEspecialidad->ID)->with('success', $messege);
        }
        
        public function cargarImg(){
            try{
                //$upload_dir = "/home/nicfre14/conquistadoresclub.nicolasfredes.cl/public/uploads/especialidades/".Input::get('dir');
                $upload_dir = "/home/nicfre14/conquistadoresclub.nicolasfredes.cl/public/uploads/tipos_recursos/";
                if(!file_exists($upload_dir)){
                    mkdir($upload_dir);
                    chmod($upload_dir, 0777);
                }
                
                $file = Input::file('file');
                $uploadSuccess = $file->move($upload_dir,$this->convert_string($file->getClientOriginalName()));
                
                /*$especialidad = Especialidad::find(Input::get('id'));
                $especialidad->PARCHE = $uploadSuccess->getRealPath();
                $especialidad->save();*/
            
                return Response::json('success', 200);
                
            } catch (Exception $ex) {
                return Response::json($ex->getMessage(), 400);
            }
        }
        
        public function guardarRequisito($id_especialidad){
            try{
                $array = Input::get();
            
                $oRequisito = new Requisito();
                /*@TODO: QUITAR TILDES EN NUMERACIÓN Y DESCRIPCIÓN*/
                $oRequisito->ESPECIALIDAD    =   $id_especialidad;
                $oRequisito->NUMERACIÓN      =   $array['numero'];
                $oRequisito->DESCRIPCIÓN     =   $array['descripcion'];

                $result = $oRequisito->save();

                /*$response = array(
                    'result'    => $result,
                    'id'        => $oEspecialidad->id
                );*/
                $messege = "El requisito se ha agregado con exito";
                $codigo = 200;
                
            } catch (Exception $ex) {
                /*$response = array(
                    'error' => $ex->getMessage()
                );*/
                $messege = "Ha Ocurrido un Error Interno";
                $codigo = 500;
                return Redirect::to('/admin/especialidad/ver/'.$id_especialidad)->with('error', $messege);
            }
            /*return Response::json(
                    $response,
                    $codigo,
                    [],
                    JSON_PRETTY_PRINT
                );*/
            return Redirect::to('/admin/especialidad/ver/'.$id_especialidad)->with('success', $messege);
        }
                
        function convert_string($str) {
            $str = strtolower($str);
            $str = str_replace(array('á','Á','é','É','í','Í','ó','Ó','ú','Ú'), array('a','A','e','E','i','I','o','O','u','U'), $str);
            $str = str_replace(array(';',':'), "", $str);
            $str = str_replace(" ", "_", $str);
            return $str;
        }
}
