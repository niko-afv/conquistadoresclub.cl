@extends('layouts.main')
@section('content')
    <!-- Title, Breadcrumb Start-->
    <div class="breadcrumb-wrapper">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                <h2 class="title"><?php echo $recurso['NOMBRE'];?></h2>
             </div>
             <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                <div class="breadcrumbs pull-right">
                   <ul>
                      <li>You are here:</li>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="#">Recursos</a></li>
                      <li><?php echo $recurso['NOMBRE'];?></li>
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
                    <!-- Recent work start-->
                    <div class="recentwork_wrapper">
                        <div class="post-image">
                            <?php if($recurso['PORTADA']){
                                $portada = str_replace("/home/nicfre14/conquistadoresclub.nicolasfredes.cl/public", "http://conquistadoresclub.nicolasfredes.cl/", $recurso['PORTADA']);
                            }else{
                                $portada = "http://conquistadoresclub.nicolasfredes.cl/img/no_portada.png";
                            }
                            ?>
                            <a href="<?php echo $portada;?>" data-rel="prettyPhoto">
                                <span class="img-hover"></span>
                                <span class="fullscreen"><i class="fa fa-search"></i></span>
                                <img src="<?php echo $portada;?>" alt="">
                            </a>
                            
                        </div>
                    </div>
                    <!-- Recent work end-->
                </div>
            </div>
            <!-- Left Section End -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sidebar">
                    <div class="widget">
                        <h3 class="title">Descripción</h3>
                        <p>
                            <?php echo $recurso['DESCRIPCION'];?>
                        </p>
                    </div>
                    <!-- Project Description End -->  
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sidebar">
                    <!-- Project Details Start -->
                    <div class="widget project_details">
                        <h3 class="title">Detalles del Recurso</h3>
                        <div class="details-content">
                            <span>
                                <strong>Fecha</strong>
                                <em>
                                    {{ $recurso['FECHA'] }}
                                </em>
                            </span>
                            <span>
                                <strong>Categoria (s)</strong>
                                <em>
                                    <?php foreach ($etiquetas as $item => $val){?>
                                    <a href="#">
                                        <?php echo $val;?>
                                    </a>
                                    <?php }?>
                                </em>
                            </span>
                            <span>
                                <strong>Autor</strong>
                                <em>{{ $recurso['AUTOR'] }}</em>
                            </span>
                            
                            <span>
                                <strong>Facilitador por</strong>
                                <em>{{ $recurso['FACILITADO_POR'] }}</em>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sidebar">
                    <h3 class="title">Descarga / Comparte</h3>
                    
                    <div class="widget">
                        <a href="{{ $recurso['UBICACION'] }}" class="btn-normal btn-color" target="_blank"><i class="fa fa-hand-right icon-large"></i>  ¡Descargar Archivo!    </a>
                    </div>
                    
                    
                    <!--<div class="widget">
                        <div class="favourite">
                            <a class="btn-special btn-grey" href="#"><strong><i class="fa fa-heart"></i> Add to Favorites</strong></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>-->
                    
                    
                    <div class="widget">
                        <div class="member-social dark">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                            <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <!-- Content End -->
        </div>
    </div>
@stop