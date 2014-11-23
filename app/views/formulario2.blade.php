@extends('layouts.main')
@section('content')


<?php //echo phpinfo();?>
    <!-- Title, Breadcrumb Start-->
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Crear nuevo Requisito</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are here:</li>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Formularios</a></li>
                                <li>Crear nuevo Requisito</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title, Breadcrumb End-->
        <!-- Main Content start-->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <article>
                            <h3 class="title">LLene todos los campos</h3>
                            <div class="post-content">
                                <form id="especialidadForm">
                                    <div class="row">
                                        
                                        <div class="col-xs-4">
                                            <label>
                                                Especialidad
                                            </label>
                                            <br/>
                                            <select class="form-control" name="especialidad" id="especialidad">
                                                <option value="0">Seleccione la Especialidad</option>
                                                <?php foreach($especialidades as $item => $val){ ?>
                                                <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        
                                        <div class="col-xs-4">
                                            <p class="own_hidden" id="text">
                                                Esta espcialidad tiene ingresados, ya la cantidad de:
                                                <strong>
                                                    <span id="count_requisitos"></span>
                                                </strong>
                                                Requisitos
                                            </p>
                                        </div>
                                    </div>
                                   
                                    
                                   
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>
                                                Número
                                            </label>
                                            <br/>
                                            <input type="text" placeholder="Ej: 1" class="form-control" name="numero" id="numero"   />
                                        </div>
                                        
                                        <div class="col-xs-4">
                                            <label>
                                                Descripción
                                            </label>
                                            <br/>
                                            <textarea cols="50" rows="8" id="descripcion"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <p class="alert-success alert own_hidden" id="success">
                                                La especialidad ya tiene <span id="req_count"></span> requisitos!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <button type="button" id="saveRequisito" class="button-label">Agregar Requisito</button>
                                        </div>
                                    </div>
                                    
                               </form>
                           </div>
                        </article>
                     </div>
                     <!-- Left Section End -->
                  </div>
               </div>
@stop