@extends('layouts.main')
@section('content')

    <!-- Title, Breadcrumb Start-->
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Recursos</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are here:</li>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Recursos</a></li>
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
                    <div class="clearfix"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="portfolio two-column">
                          
                                    <?php foreach($tipos_recursos as $item => $val){?>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  item">
                                            <div class="portfolio-item">
                                                <a href="/recursos/<?php echo $val['ID']?>" class="portfolio-item-link">
                                                    <span class="portfolio-item-hover"></span>
                                                    <span class="fullscreen"><i class="fa fa-eye"></i></span><img src="<?php echo $val['COVER'];?>" alt=" "/>
                                                </a>
                                                <div class="portfolio-item-title">
                                                    <a href="single-project.html"><?php echo $val['NOMBRE']?></a>
                                                    <p>
                                                        <?php echo $val['DESCRIPCION']?>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    <?php }?>
                         <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 item">
                            <div class="portfolio-item">
                               <a href="img/Cursos_Liderazgo.png" class="portfolio-item-link" data-rel="prettyPhoto" >
                               <span class="portfolio-item-hover"></span>
                               <span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/Cursos_Liderazgo.png" alt=" "/>
                               </a>
                               <div class="portfolio-item-title">
                                  <a href="single-project.html">Cursos de Liderazgo</a>
                                  <p>
                                     J.A, Conquistadores, Aventureros, etc.
                                  </p>
                               </div>
                               <div class="clearfix"></div>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 item">
                            <div class="portfolio-item">
                               <a href="img/Especialidades-desarrolladas.png" class="portfolio-item-link" data-rel="prettyPhoto" >
                               <span class="portfolio-item-hover"></span>
                               <span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/Especialidades-desarrolladas.png" alt=" "/>
                               </a>
                               <div class="portfolio-item-title">
                                  <a href="single-project.html">Especialidades Desarrolladas</a>
                                  <p>
                                     ADRA, Ciencia y Salud, Habilidades Domésticas, etc.
                                  </p>
                               </div>
                               <div class="clearfix"></div>
                            </div>
                         </div>-->
                         
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- Main Content end-->
@stop