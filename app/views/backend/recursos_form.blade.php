@extends('backend.layouts.main')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Basic Form</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">Home</a>
                </li>
                <li>
                    <a>Forms</a>
                </li>
                <li class="active">
                    <strong>Basic Form</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Recursos <small> Crear un nuevo recurso </small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        
                        <div class="row">
                            <div class="col-xs-6">
                                
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
                        <form role="form" method="POST" action="/admin/recursos/guardar">
                            <div class="row">
                                <div class="col-sm-6 b-r">

                                        <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Ej: Meditación para J.A" class="form-control" name="nombre" id="nombre"></div>

                                        <div class="form-group">
                                            <label>Tipo de Recurso</label>
                                            <select class="form-control" name="tipo_recurso" id="tipo_recurso">
                                                <option value="0">Seleccionar Tipo de Recurso</option>
                                                <?php foreach($tipos_recursos as $item => $val){ ?>
                                                <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                                <?php }?>
                                            </select>
                                        </div>

                                        <div class="form-group"><label>Autor / Origen</label> <input type="text" placeholder="Ej: Pastor X" class="form-control" name="autor" id="autor"></div>

                                </div>

                                <div class="col-sm-6 b-r">

                                    <div class="form-group"><label>Facilitado Por </label> <input type="text" placeholder="Ej: AMCH" class="form-control" name="facilitado_por" id="facilitado_por"></div>

                                    <div class="form-group">
                                            <label>Tipo de Archivo</label>
                                            <select class="form-control" name="tipo_archivo" id="tipo_archivo">
                                                <option value="0">Seleccionar Tipo de Archivo</option>
                                                <option value="ppt/pptx">Power Point</option>
                                                <option value="doc/docx">Word</option>
                                                <option value="pdf">PDF</option>
                                                <option value="xls/xlsx">Excel</option>
                                                <option value="jpg/png/jpeg">Imagen</option>
                                            </select>
                                        </div>
                                    
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion" rows="2" placeholder="Meditación para un cluto J.A o Club de  . . . ."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <br/>
                            </div><!--End row-->

                            <div class="row">
                                <div class="col-sm-4">

                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary m-t-n-xs form-control" type="submit"><strong>Crear</strong></button>            
                                    </div>
                                </div>
                            </div><!--End row-->
                        
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
@stop