<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DashboardRecursosController
 *
 * @author nks
 */
class DashboardRecursosController extends BaseController {
    
    public function ver($id = 1)
    {
        /*header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");*/
        
        $oRecurso = Recurso::find($id)->toArray();
        $oTipoRecurso = Recurso::find($id)->tipo_recurso()->get()->toArray();
        $nombre_dir = $this->convert_string($oTipoRecurso[0]['NOMBRE']) . "/" . $this->convert_string($oRecurso['NOMBRE']);
        $nombre_dir_portada = $nombre_dir . "/portada";

        return View::make('backend/recursos_view',array(
            'id_recurso'                => $oRecurso['ID'],
            'nombre_recurso'            => $oRecurso['NOMBRE'],
            'autor_recurso'             => $oRecurso['AUTOR'],
            'descripcion_recurso'       => $oRecurso['DESCRIPCION'],
            'facilitador_por_recurso'   => $oRecurso['FACILITADO_POR'],
            'fecha_recurso'             => $oRecurso['FECHA'],
            'tipo_recurso'              => $oTipoRecurso[0]['NOMBRE'],
            'tipo_archivo_recurso'      => $oRecurso['TIPO_ARCHIVO'],
            'ubicacion_recurso'         => $oRecurso['UBICACION'],
            'nombre_dir'                => $nombre_dir,
            'nombre_dir_portada'        => $nombre_dir_portada,
            'datosCarga'                => $this->datosCarga()
        ));
    }
        
    public function crear()
    {            
        $tiposRecursos  = TipoRecurso::all()->toArray();
            
        return View::make('backend/recursos_form',array(
            'tipos_recursos' => $tiposRecursos
        ));
    }
    
    public function listar(){
        $oRecursos = Recurso::All();

        return View::make('backend/recursos_list',array(
            'recursos' => $oRecursos
        ));
    }
    
    public function guardar(){
            try{
                $array = Input::get();
            
                $oRecurso = new Recurso();
                
                $oRecurso->NOMBRE          = (count($array['nombre'])>0)?$array['nombre']:NULL;
                $oRecurso->AUTOR           = (count($array['autor'])>0)?$array['autor']:NULL;
                $oRecurso->FACILITADO_POR = (count($array['facilitado_por'])>0)?$array['facilitado_por']:NULL;
                $oRecurso->DESCRIPCION     = (count($array['descripcion'])>0)?$array['descripcion']:NULL;
                $oRecurso->TIPO_RECURSO    = ($array['tipo_recurso']>0)?$array['tipo_recurso']:NULL;
                $oRecurso->TIPO_ARCHIVO    = (count($array['tipo_archivo'])>0)?$array['tipo_archivo']:NULL;

                $result = $oRecurso->save();

                $messege = "El recurso se ha creado con exito";
                $codigo = 200;
                
            } catch (Exception $ex) {
                //$messege = "Ha Ocurrido un Error Interno";
                $messege = $ex->getMessage();
                $codigo = 500;
                return Redirect::to('/admin/recursos/crear')->with('error', $messege);
            }
            return Redirect::to('/admin/recursos/ver/'.$oRecurso->ID)->with('success', $messege);
        }
        
        
        public function cargarImg(){
            try{
                $upload_dir = "/home/nicfre14/conquistadoresclub.nicolasfredes.cl/public/uploads/recursos/".Input::get('dir');
                
                if(!file_exists($upload_dir)){
                    mkdir($upload_dir);
                    chmod($upload_dir, 0777);
                }
                
                $file = Input::file('file');
                $uploadSuccess = $file->move($upload_dir,$this->convert_string($file->getClientOriginalName()));
                
                $oRecurso = Recurso::find(Input::get('id'));
                
                $db_path = str_replace("/home/nicfre14/conquistadoresclub.nicolasfredes.cl/public", "", $uploadSuccess->getRealPath());
                
                if(strstr(Input::get('dir'),"portada")){
                    $oRecurso->PORTADA = $db_path;
                    
                }else{
                    $oRecurso->UBICACION = $db_path;
                }
                $oRecurso->save();
            
                return Response::json('success', 200);
                
            } catch (Exception $ex) {
                return Response::json($ex->getMessage(), 400);
            }
        }
        
        function convert_string($str) {
            $str = strtolower($str);
            $str = str_replace(array('á','Á','é','É','í','Í','ó','Ó','ú','Ú'), array('a','A','e','E','i','I','o','O','u','U'), $str);
            $str = str_replace(array(';',':'), "", $str);
            $str = str_replace(" ", "_", $str);
            return $str;
        }
        
        
        function datosCarga(){
 
            // User configured fields
            $access_key = 'iAq86QBo1_j2hpCyDnfZ';
            $secret_key = 'Dwjc80dQhDRbQK-0OMuE2eQ8VeBuIFDV-Ihx7vDg'; 
            $bucket = 'conquistadoresclub'; 
            $acl = 'public-read'; // if you prefer you can use 'private'  
            $success_action_redirect = 'http://conquistadoresclub.nicolasfredes.cl/admin/recursos/listar';

            // Create the timestamp we will call it $expire
            $now = strtotime(date("Y-m-d\TG:i:s")); 
            $expire = gmdate('Y-m-d\TG:i:s\Z', strtotime('+ 10 minutes', $now)); // credentials valid 10 minutes from now 

            $url = 'http://files.conquistadoresclub.nicolasfredes.cl/'; 
            $policy_document='
            {"expiration": "'.$expire.'",
              "conditions": [
                {"bucket": "'.$bucket.'"},
                ["starts-with", "$key", "uploads/"],
                {"acl": "'.$acl.'"},
                {"success_action_redirect": "'.$success_action_redirect.'"},
                ["starts-with", "$Content-Type", ""]
              ]
            }';

            // create policy
            $policy = base64_encode($policy_document); 

            // create signature
            $signature = base64_encode(hash_hmac("sha1", $policy, $secret_key, $raw_output = true));
            
            
            return array(
                'acl'                       =>  $acl,
                'url'                       =>  $url,
                'policy'                    =>  $policy,
                'signature'                 =>  $signature,
                'access_key'                =>  $access_key,
                'success_action_redirect'   =>  $success_action_redirect
            );
 
        }
    
}
