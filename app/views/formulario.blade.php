@extends('layouts.main')
@section('content')


<?php //echo phpinfo();?>
    <!-- Title, Breadcrumb Start-->
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Crear Nueva Especialidad</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are here:</li>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Formularios</a></li>
                                <li>Crear Nueva Especialidad</li>
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
                            <h3 class="title">Llene los Campos</h3>
                            <div class="post-content">
                                <form id="especialidadForm">
                                    <div class="row">
                                        
                                        <div class="col-xs-4">
                                            <label>
                                                Nombre
                                            </label>
                                            <br/>
                                            <input type="text" placeholder="Ej: Gato" class="form-control" name="nombre" id="nombre"    />
                                        </div>
                                        
                                        <div class="col-xs-4">
                                            <label>
                                                Categoría
                                            </label>
                                            <br/>
                                            <select class="form-control" name="categoria" id="categoria">
                                                <option>Seleccione la Categoría</option>
                                                <?php foreach($categorias as $item => $val){ ?>
                                                <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        
                                        <div class="col-xs-4">
                                            <label>
                                                Institución de Orígen
                                            </label>
                                            <br/>
                                            <select class="form-control" name="institucion" id="institucion">
                                                <option>Seleccione una Institución</option>
                                                <?php foreach($instituciones as $item => $val){ ?>
                                                <option value="<?php echo ($val['ID']);?>"><?php echo ($val['NOMBRE']);?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    
                                   
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>
                                                Codigo
                                            </label>
                                            <br/>
                                            <input type="text" placeholder="Ej: 001" class="form-control" name="codigo" id="codigo" />
                                        </div>
                                        
                                        <div class="col-xs-4">
                                            <label>
                                                Nivel
                                            </label>
                                            <br/>
                                            <input type="text" placeholder="Ej: 1" class="form-control" name="nivel" id="nivel" />
                                        </div>
                                        
                                        <div class="col-xs-4">
                                            <label>
                                                Año
                                            </label>
                                            <br/>
                                            <input type="text" placeholder="Ej: 2012" class="form-control" name="año" id="año"  />
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label>
                                                Parche
                                            </label>
                                            <br/>
                                            <input type="file" class="form-control" name="parche" id="parche"  />
                                        </div>
                                        <div class="col-xs-8">
                                            <button type="button" id="saveEspecialidad" class="button-label">Agregar Especialidad</button>
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