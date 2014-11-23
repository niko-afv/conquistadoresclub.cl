@extends('backend.layouts.main')
@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Recurso : </h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Estas en</a>
                </li>
                <li class="active">
                    <strong>Recrusos</strong>
                </li>
            </ol>
        </div>
    </div>
            
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Detalle del Recurso</h5>
                    </div>                            

                    <div class="ibox-content">
                        <div class="col-md-6 b-r" style="text-align: center;">
                            <?php if($ubicacion_post){ ?>
                            <img src="{{ $ubicacion_post }}" width="490" />
                            <?php }else{?>
                                <form id="my-awesome-dropzone" class="dropzone" action="/admin/blog/cargarImg">
                                <!--<form id="my-awesome-dropzone" class="dropzone" action="<?php /*echo $datosCarga['url'];?>">
                                    <!--<input type="hidden" name="key" value="uploads/${filename}">
                                    <input type="hidden" name="AWSAccessKeyId" value="<?php echo $datosCarga['access_key']; ?>">
                                    <input type="hidden" name="acl" value="<?php echo $datosCarga['acl']; ?>"> 
                                    <input type="hidden" name="success_action_redirect" value="<?php echo $datosCarga['success_action_redirect']; ?>">
                                    <input type="hidden" name="policy" value="<?php echo $datosCarga['policy']; ?>">
                                    <input type="hidden" name="signature" value="<?php echo $datosCarga['signature']; */?>">
                                    <input type="hidden" name="Content-Type" value="">-->
                                    
                                    <div class="dropzone-previews"></div>
                                    <input  type="hidden" name="dir" value="<?php echo $nombre_dir;?>">
                                    <input  type="hidden" name="id" value="<?php echo $id_post;?>">
                                </form>
                            <?php }?>
                        </div>

                        <div class="col-md-4">        

                            <div class="form-group">
                                <h4>
                                    <strong><?php echo $nombre_post;?></strong>
                                </h4>
                            </div>

                            <div class="form-group">
                                <p>
                                    <label>Autor / Origen</label>
                                    <span><?php echo $autor_post;?></span>
                                </p>
                            </div>

                            <div class="form-group">
                                <p>
                                    <label>Fecha :</label>
                                    <span><?php echo $fecha_post;?></span>
                                </p>
                                
                            </div>

                        </div>
                        
                        
                        <?php if($ubicacion_post){ ?>
                        <a data-toggle="modal" href="#portada-form" title="Agregar Portada">
                            <i class="fa fa-plus"></i>
                            Agregar Portada
                        </a>
                        <?php }?>
                        
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
                            <h5>Descripcion</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="col-md-12">
                                <p><?php echo $descripcion_post?></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>



<div id="portada-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-10 b-r">
                        <h3 class="m-t-none m-b">Agregar una Portada</h3>
                        
                        <form id="my-awesome-dropzone" class="dropzone" action="/admin/posts/cargarImg">
                            <div class="dropzone-previews"></div>
                            <input  type="hidden" name="dir" value="<?php echo $nombre_dir_portada;?>">
                            <input  type="hidden" name="id" value="<?php echo $id_post;?>">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

@stop


@section('customjs')
<!--<style>
    #my-awesome-dropzone {
        border: 1px solid #555;
        height: 300px;
        width: 300px;
    }
</style>-->
    <!-- DROPZONE -->
    <script src="/backend/js/plugins/dropzone/dropzone.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            Dropzone.options.myAwesomeDropzone = {
                maxFilesize: 100, // MB
                autoProcessQueue: true,
                uploadMultiple: false,
                parallelUploads: 1,
                maxFiles: 1,
                //acceptedFiles: ".pdf, .doc, .docx, .ppt, .pptx, .xls, .xlsx",
                addRemoveLinks: true,
                init: function() {
                    this.on("error", function(file, message) { alert("Error: " + message); });
                }
            };
        });
    </script>
@stop