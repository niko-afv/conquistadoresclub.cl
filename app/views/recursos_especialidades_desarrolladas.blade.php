@extends('layouts.main')
@section('content')
            <!-- Title, Breadcrumb Start-->
            <div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Especialidades Desarrolladas</h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                           <ul>
                              <li>Estas Aquí:</li>
                              <li><a href="/">Home</a></li>
                              <li><a href="/recursos">Recursos</a></li>
                              <li>Especialidades Desarrolladas</li>
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
                     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                        <div id="options">
                           <ul id="filters" class="option-set clearfix" data-option-key="filter">
                              <li><a href="#filter" data-option-value="*" class="selected">Todas</a></li>
                              <li><a href="#filter" data-option-value=".ad">AD</a></li>
                              <li><a href="#filter" data-option-value=".hm">HM</a></li>
                              <li><a href="#filter" data-option-value=".aa">AA</a></li>
                              <li><a href="#filter" data-option-value=".am">AM</a></li>
                              <li><a href="#filter" data-option-value=".ap">AP</a></li>
                              <li><a href="#filter" data-option-value=".ar">AR</a></li>
                              <li><a href="#filter" data-option-value=".cs">CS</a></li>
                              <li><a href="#filter" data-option-value=".en">EN</a></li>
                              <li><a href="#filter" data-option-value=".hd">HD</a></li>
                              <li><a href="#filter" data-option-value=".me">ME</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 portfolio-wrap">
                        <div class="row">
                           <div class="portfolio">
                              
                               <?php foreach($especialidades as $item => $val){?>
                               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 item <?php echo $val['ETIQUETAS'];?>">
                                    <div class="portfolio-item" style="text-align: center">
                                        <a href="/recursos/ver_recurso/<?php echo $val['ID'];?>" class="portfolio-item-link">
                                            <span class="portfolio-item-hover"></span>
                                            <span class="fullscreen"><i class="fa fa-search"></i></span>
                                            <div class="" style="color: #777;height: 200px">
                                                <i class="fa fa-file-pdf-o" style="font-size: 8em; margin-top: 40px;"></i>
                                            </div>
                                        </a>
                                        <div class="portfolio-item-title">
                                           <a href="single-project.html"><?php echo $val['NOMBRE'];?></a>
                                           <p>
                                              <?php echo $val['TIPO_ARCHIVO'];?>
                                           </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <?php }?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Main Content end-->
         @stop