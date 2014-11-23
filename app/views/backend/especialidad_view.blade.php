@extends('backend.layouts.main')
@section('content')
        
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Especialidad : </h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Estas en</a>
                </li>
                <li class="active">
                    <strong>Especialidad</strong>
                </li>
            </ol>
        </div>
    </div>
            
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Detalle de la Especialidad</h5>
                    </div>                            

                    <div class="ibox-content">
                        <div class="col-md-5 b-r" style="text-align: center;">
                            <?php if($parche_especialidad){ ?>
                                <img src="<?php echo str_replace("/home/nicfre14/conquistadoresclub.nicolasfredes.cl/public", "http://conquistadoresclub.nicolasfredes.cl/", $parche_especialidad);?>"    />
                            <?php }else{?>
                                <form id="my-awesome-dropzone" class="dropzone" action="/admin/especialidad/cargarImg" method="post" enctype="multipart/form-data">
                                    <div class="fallback"><input name="file" type="file" multiple /></div>
                                    <div class="dropzone-previews"></div>
                                    <input  type="hidden" name="dir" value="<?php echo $nombre_dir;?>">
                                    <input  type="hidden" name="id" value="<?php echo $id_especialidad;?>">
                                </form>
                            <?php }?>
                        </div>

                        <div class="col-md-5">        

                            <div class="form-group">
                                <h4>
                                    <strong><?php echo $nombre_especialidad;?></strong>
                                </h4>
                            </div>

                            <div class="form-group">
                                <p>
                                    <label>Código </label>
                                    <span><?php echo $codigo_especialidad;?></span>
                                </p>
                            </div>

                            <div class="form-group">
                                <p>
                                    <label>Nivel :</label>
                                    <span><?php echo $nivel_especialidad;?></span>
                                </p>
                            </div>

                            <div class="form-group">
                                <p>
                                    <label>Año :</label>
                                    <span><?php echo $año_especialidad;?></span>
                                </p>
                                
                            </div>

                            <div class="form-group">
                                <label>Categoria :</label>
                                <span><?php echo $categoria_especialidad;?></span>
                            </div>

                            <div class="form-group">
                                <label>Institución de Origen :</label>
                                <span><?php echo $institucion_especialidad;?></span>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="row">                            
            <div class="col-sm-6 ">
                <?php
                    $error = Session::get('error');
                    $success = Session::get('success');
                ?>

                <?php if(count($error)>0){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error;?>
                </div>
                <?php }?>

                <?php if(count($success)>0){?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success;?>
                </div>
                <?php }?>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Requisitos</h5>
                        </div>
                        <div class="ibox-content no-padding">
                            <ul class="list-group">
                                <?php
                                    foreach($requisitos_especialidad as $item => $val){
                                ?>                                    
                                <li class="list-group-item">
                                    <label><?php echo $val['NUMERACIÓN'];?> .- </label>
                                    <?php echo $val['DESCRIPCIÓN'];?>
                                </li>
                                <?php
                                    }
                                ?>
                                <li class="list-group-item">
                                    <a data-toggle="modal" href="#requisitos-form" title="Agregar Requisito"><i class="fa fa-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>


<div id="requisitos-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-10 b-r">
                        <h3 class="m-t-none m-b">Agregar un Requisito</h3>
                        
                        <form role="form" method="POST" action="/admin/especialidad/<?php echo $id_especialidad;?>/requisito/guardar">
                            <div class="form-group">
                                <label>Numeración</label>
                                <input type="text" class="form-control" name="numero"  />
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea cols="35" rows="8" id="descripcion" class="form-control" name="descripcion"></textarea>
                            </div>
                            <div class="form-group">            
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Guardar</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@stop


@section('customjs')
    <!-- DROPZONE -->
    <script src="/backend/js/plugins/dropzone/dropzone.js"></script>
    <script>
        $(document).ready(function(){

            Dropzone.options.myAwesomeDropzone = {
                autoProcessQueue: false,
                uploadMultiple: false,
                parallelUploads: 1,
                maxFiles: 1

                // Dropzone settings
                init: function() {
                    var myDropzone = this;
                    this.on("success", function(file, response) {
                        alert("Archivo subido");
                        console.log(file);
                        console.log(response);
                    });
                }
            }

        });
    </script>
@stop