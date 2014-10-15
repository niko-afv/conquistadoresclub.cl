@extends('layouts.main')
@section('content')

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
                              <li><a href="index.html">Home</a></li>
                              <li><a href="#">Pages</a></li>
                              <li>Full Width Page</li>
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
                           <h3 class="title">Some text here</h3>
                           <div class="post-content">
                               <form>
                                   <div class="row_style_1">
                                        <label>
                                            Categoría
                                        </label>
                                       <select>
                                           <option>Seleccione la Categoría</option>
                                       </select>
                                   </div>
                                   
                                   <div class="row_style_1">
                                        <label>
                                            Institución de Origen
                                        </label>
                                       <select>
                                           <option>Seleccione la Institución</option>
                                       </select>
                                   </div>
                                   
                                   <div class="row_style_1">
                                        <label>
                                            Codigo
                                        </label>
                                        <input type="text" placeholder="ingrese Código"   />
                                   </div>

                               </form>
                           </div>
                        </article>
                     </div>
                     <!-- Left Section End -->
                  </div>
               </div>
@stop