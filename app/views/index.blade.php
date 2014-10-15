@extends('layouts.main')
@section('content')



            <!-- Slider Start-->
            <div class="fullwidthbanner-container">
               <div class="fullwidthbanner rslider">
                  <ul>
                     <!-- THE FIRST SLIDE -->
                     <li data-delay="6000" data-masterspeed="300" data-transition="fade">
                        <div class="slotholder"><img src="img/1.png" data-fullwidthcentering="on" alt="Pixma"></div>
                        <div class="caption modern_big_bluebg h1 lft tp-caption start"
                           data-x="40"
                           data-y="85"
                           data-speed="700"
                           data-endspeed="800"
                           data-start="1000"
                           data-easing="easeOutQuint"
                           data-endeasing="easeOutQuint">
                           <h3>ConquistadoresClub.cl</h3>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1400" 
                           data-speed="1050" 
                           data-y="180" 
                           data-x="40">
                           <div class="list-slide">
                              <i style="float: left;" class="fa fa-download slide-icon"></i>
                              <h5 style="float: left;" class=""> Cursos de Liderazgo </h5>
                              <div style="clear: both;"> </div>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1800" 
                           data-speed="1200" 
                           data-y="220" 
                           data-x="40">
                           <div class="list-slide">
                              <i class="fa fa-search slide-icon"></i>
                              <h5 class=""> Lo que buscabas para tu club, J.A, etc. </h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2200" 
                           data-speed="1350" 
                           data-y="260" 
                           data-x="40">
                           <div class="list-slide">
                              <i class="fa fa-check-square slide-icon"></i>
                              <h5 class=""> Manuales Oficiales de la DSA </h5>
                           </div>
                        </div>
                        <div class="caption lfb caption_button_1 fadeout tp-caption start"
                           data-x="40"
                           data-y="330"
                           data-speed="900"
                           data-endspeed="300"
                           data-start="2700"
                           data-hoffset="-70"
                           data-easing="easeOutExpo">
                           <a class="btn-special hidden-xs btn-grey" href="#">Saber Más!</a>
                        </div>
                        <!--<div class="caption lfb caption_button_2 fadeout tp-caption start"
                           data-x="210"
                           data-y="330"
                           data-speed="800"
                           data-endspeed="300"
                           data-start="2900"
                           data-hoffset="70"
                           data-easing="easeOutExpo">
                           <a class="btn-special hidden-xs btn-color" href="#">Buy Now</a>
                        </div>-->
                     </li>
                     <!-- THE RESPONSIVE SLIDE -->
                     <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                        <img src="img/logo conquistadoresclub.cl.png" data-fullwidthcentering="on" alt="">
                        <div class="caption large_text sft modern_big_bluebg"
                           data-x="660"
                           data-y="54"
                           data-speed="300"
                           data-start="800"
                           data-easing="easeOutExpo"  >Nuevo Sitio Web</div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1400" 
                           data-speed="1050" 
                           data-y="180" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-eye slide-icon"></i>
                              <h5> Retina Ready </h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="1800" 
                           data-speed="1200" 
                           data-y="220" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-table slide-icon"></i>
                              <h5> Responsive pricing tables </h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2200" 
                           data-speed="1350" 
                           data-y="260" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-check slide-icon"></i>
                              <h5> Crossbrowser Compatible </h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="2600" 
                           data-speed="1350" 
                           data-y="300" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-twitter slide-icon"></i>
                              <h5> Twitter 1.1 API Support </h5>
                           </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start" 
                           data-easing="easeOutExpo" 
                           data-start="3000" 
                           data-speed="1350" 
                           data-y="340" 
                           data-x="660">
                           <div class="list-slide">
                              <i class="fa fa-th slide-icon"></i>
                              <h5> Bootstrap Framework </h5>
                           </div>
                        </div>
                        <!--<div class="caption lfl"
                           data-x="53"
                           data-y="30"
                           data-speed="300"
                           data-start="1400"
                           data-easing="easeOutExpo">
                           <img src="img/slider/responsive-imac.png" alt="iMac Responsive">
                        </div>
                        <div class="caption lfl"
                           data-x="323"
                           data-y="145"
                           data-speed="300"
                           data-start="1500"
                           data-easing="easeOutExpo">
                           <img src="img/slider/responsive-ipad.png" alt="iPad Responsive">
                        </div>
                        <div class="caption lfl"
                           data-x="472"
                           data-y="253"
                           data-speed="300"
                           data-start="1600"
                           data-easing="easeOutExpo">
                           <img src="img/slider/responsive-iphone.png" alt="iPhone Responsive">
                        </div>-->
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Slider End--> 
            <!-- Slogan Start-->
            <div class="slogan bottom-pad-small">
               <div class="container">
                  <div class="row">
                     <div class="slogan-content">
                        <div class="col-lg-9 col-md-9">
                           <h2 class="slogan-title">Tenemos para ti, el manual de especialidades oficial de la DSA, en formato virtual!</h2>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <div class="get-started">
                              <button class="btn btn-special btn-color pull-right">Conócelo!</button>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Slogan End--> 
            <!-- Main Content start-->
            <div class="main-content">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item bottom-pad-small">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-check-square"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-check-square"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Especialidades Desarrolladas</h3>
                              <p>
                                 Si eres Conquistador encuentra la especialidad que deseas realizar y descarga el desarrollo de la misma,
                                 estudia el documento y podrás dar la prueba a tu Guía Mayor. Iremos incrementando 
                                 nuestro repertorio de Especialidades desarrolladas.
                              </p>
                              <a href="#">Leer más <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item bottom-pad-small">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-edit"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-edit"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Material Para Tus Actividades</h3>
                              <p>
                                 ¿Eres Lider J.A o de Conquistadores y necesitas una meditación, juegos, concursos, etc?. 
                                 Aquí podrás encontrar todo el material que necesites para realizar tus actividades. Ve la sección
                                 "Recursos" y descarga todo el material que quieras, es Gratis!.
                              </p>
                              <a href="#">Leer más <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item">
                           <div class="ch-info-wrap">
                              <div class="ch-info">
                                 <div class="ch-info-front ch-img-1"><i class="fa fa-users"></i></div>
                                 <div class="ch-info-back">
                                    <i class="fa fa-users"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="content-box-info">
                              <h3>Cursos De Liderazgo</h3>
                              <p>
                                 Sabemos que estar a cargo de una unidad, un club o un grupo de jovenes no es tarea facil, es por ese motivo que 
                                 nos encargaremos de tener cursos de liderazgo y material relacionado para ayudarte a ser ese agente positivo
                                 que movilice tu iglesia.
                              </p>
                              <a href="#">Leer más <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Main Content end-->

            <!-- Product Content Start-->
            <div class="product-lead bottom-pad">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-12 col-xs-12 text-center animate_afl d1">
                        <img src="img/iphone5c.png" alt="iPhone5c">
                     </div>
                     <div class="col-md-8 col-sm-12 col-xs-12 animate_afr d3">
                        <div class="app-service">
                           <h3>Pixma App Services</h3>
                           <h4>We provide all kinds of iPhone application design and development services.</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet.Lorem fermentum diam diam.  
                           </p>
                           <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                           </p>
                           <div class="divider"></div>
                           <div class="learnmore">
                              <a class="btn-special btn-grey" href="#">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
            <!-- Product Content end--> 

            <!-- Recent works start-->
            <div class="bottom-pad">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afl d1">
                        <h3 class="title">Recent Works</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row portfolio-pad">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                              <div class="portfolio-item">
                                 <a href="img/portfolio/portfolio-1.jpg" class="portfolio-item-link" data-rel="prettyPhoto" >
                                    <span class="portfolio-item-hover"></span>
                                    <span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/portfolio/portfolio-1.jpg" alt=" "/>
                                 </a>
                                 <div class="portfolio-item-title">
                                    <a href="single-project.html">Insta Genius</a>
                                       <p>
                                          Design / Development
                                       </p>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                               <div class="portfolio-item">
                                  <a href="img/portfolio/portfolio-2.jpg" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/portfolio/portfolio-2.jpg" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">YA Sound</a>
                                     <p>
                                        Sound / Audio
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                               <div class="portfolio-item">
                                  <a href="img/portfolio/portfolio-3.jpg" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/portfolio/portfolio-3.jpg" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">Nike Shoe</a>
                                     <p>
                                        Apareal / Shoe
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d5">
                               <div class="portfolio-item">
                                  <a href="img/portfolio/portfolio-4.jpg" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/portfolio/portfolio-4.jpg" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">Camera Icon</a>
                                     <p>
                                        Icon / Device
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d6">
                               <div class="portfolio-item">
                                  <a href="img/portfolio/portfolio-5.jpg" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/portfolio/portfolio-5.jpg" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">Penguin</a>
                                     <p>
                                        Animal / Nature
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d7">
                               <div class="portfolio-item">
                                  <a href="img/portfolio/portfolio-6.jpg" class="portfolio-item-link" data-rel="prettyPhoto" >
                                  <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img src="img/portfolio/portfolio-6.jpg" alt=" "/>
                                  </a>
                                  <div class="portfolio-item-title">
                                     <a href="single-project.html">Sound Box</a>
                                     <p>
                                        Audio / Sound
                                     </p>
                                  </div>
                                  <div class="clearfix"></div>
                               </div>
                           </div>
                        </div>
                           <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Recent work end-->
            <!-- Features start -->  
            <div class="features bottom-pad">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3  class="title">Our Services</h3>
                        <div class="row">
                           <div class="circular-nav">
                              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 animate_afl">
                                 <div id="cn-tabs">
                                    <div class="service service-1">
                                       <div class="cn-content">
                                          <h4>Premium Sliders</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                          <div class="clearfix"></div>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-2">
                                       <div class="cn-content">
                                          <h4>Unlimited Colors</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                    <div class="service service-3">
                                       <div class="cn-content">
                                          <h4>Shortcodes</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-4">
                                       <div class="cn-content">
                                          <h4>300+ Icons</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-5">
                                       <div class="cn-content">
                                          <h4>HTML5 / CSS3</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-6">
                                       <div class="cn-content">
                                          <h4>After Sale Support</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-7">
                                       <div class="cn-content">
                                          <h4>Google Fonts</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-8">
                                       <div class="cn-content">
                                          <h4>Ajax Contact Form</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                    <div class="service service-9">
                                       <div class="cn-content">
                                          <h4>Valid HTML Files</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <a href="#">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 animate_afr">
                                 <div class="cn-wrapper">
                                    <ul>
                                       <li class="circle-1 circle"><a class="active" href="#"><span class="fa fa-picture-o"></span></a></li>
                                       <li class="circle-2 circle"><a href="#"><span class="fa fa-rocket"></span></a></li>
                                       <li class="circle-3 circle"><a href="#"><span class="fa fa-puzzle-piece"></span> </a></li>
                                       <li class="circle-4 circle"><a href="#"><span class="fa fa-thumbs-o-up"></span></a></li>
                                       <li class="circle-5 circle"><a href="#"><span class="fa fa-html5"></span></a></li>
                                       <li class="circle-6 circle"><a href="#"><span class="fa fa-user"></span></a></li>
                                       <li class="circle-7 circle"><a href="#"><span class="fa fa-google-plus"></span> </a></li>
                                       <li class="circle-8 circle"><a href="#"><span class="fa fa-envelope-o"></span></a></li>
                                       <li class="circle-9 circle"><a href="#"><span class="fa fa-hand-o-right"></span></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Features End --> 
            <!-- Latest Posts start --> 
            <div class="latest-posts">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 com-sm-12 col-xs-12">
                        <h3 class="title">Latest Posts</h3>
                     </div>
                     <div class="clearfix"></div>
                     <div class="blog-showcase col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afb d1">
                        <ul>
                           <li class="">
                              <div class="blog-showcase-thumb col-lg-4">
                                 <div class="post-body">
                                    <a class="post-item-link" href="img/portfolio/portfolio-5.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/portfolio/portfolio-5.jpg"></a>
                                 </div>
                              </div>
                              <div class="blog-showcase-extra-info col-lg-4">
                                 <span><a href="#">Sep 11th, 2013</a></span>
                                 <h4><a href="#" class="title">Blog post title</a></h4>
                                 <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                 <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                              </div>
                           </li>
                           <li>
                              <div class="blog-showcase-thumb col-lg-4">
                                 <div class="post-body">
                                    <a class="post-item-link" href="img/portfolio/portfolio-6.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/portfolio/portfolio-6.jpg"></a>
                                 </div>
                              </div>
                              <div class="blog-showcase-extra-info col-lg-4">
                                 <span><a href="#">Sep 11th, 2013</a></span>
                                 <h4><a href="#" class="title">Blog post title</a></h4>
                                 <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                 <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                              </div>
                           </li>
                           <li class="blog-first-el">
                              <div class="blog-showcase-thumb col-lg-4">
                                 <div class="post-body">
                                    <a class="post-item-link" href="img/portfolio/portfolio-7.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/portfolio/portfolio-7.jpg"></a>
                                 </div>
                              </div>
                              <div class="blog-showcase-extra-info col-lg-4">
                                 <span><a href="#">Sep 11th, 2013</a></span>
                                 <h4><a href="#" class="title">Blog post title</a></h4>
                                 <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                 <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                              </div>
                           </li>
                        </ul>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="divider"></div>
               </div>
            </div>
            <!-- Latest Posts End -->
            <!-- Our Clients Start-->
            <div class="our-clients">
               <div class="container">
                  <div class="row">
                     <div class="client">
                        <div class="client-logo">
                           <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                              <div class="clients-title">
                                 <h3 class="title">Our Clients</h3>
                                 <div class="carousel-controls pull-right">
                                    <a class="prev" href="#client-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="next" href="#client-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="row">
                                 <div id="client-carousel" class="client-carousel slide">
                                    <div class="carousel-inner">
                                       <div class="item active">
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d1">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-1.png"></a></div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d2">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-2.png"></a></div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d3">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-3.png"></a></div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d4">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-4.png"></a></div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-5.png"></a></div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-2.png"></a></div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-1.png"></a></div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                             <div class="item-inner"><a href="#"><img alt="Upportdash" src="img/clientslogo/logo-3.png"></a></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <!-- Testimonials Widget Start -->
                              <div class="row ">
                                 <div class="testimonials widget">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <div class="testimonials-title">
                                          <h3 class="title">Testimonials</h3>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div id="testimonials-carousel" class="testimonials-carousel slide animate_afr d5">
                                       <div class="carousel-inner">
                                          <div class="item active">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                   <p>
                                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                   </p>
                                                   <div class="testimonials-arrow">
                                                   </div>
                                                   <div class="author">
                                                      <div class="testimonial-image "><img alt="" src="img/testimonial/team-member-1.jpg"></div>
                                                      <div class="testimonial-author-info">
                                                         <a href="#"><span class="color">Monica Sing</span></a> FIFO Themes
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                   <p>
                                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                   </p>
                                                   <div class="testimonials-arrow">
                                                   </div>
                                                   <div class="author">
                                                      <div class="testimonial-image "><img alt="" src="img/testimonial/team-member-2.jpg"></div>
                                                      <div class="testimonial-author-info">
                                                         <a href="#"><span class="color">Monzurul Haque</span></a> FIFO Themes
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="item">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                   <p>
                                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                   </p>
                                                   <div class="testimonials-arrow">
                                                   </div>
                                                   <div class="author">
                                                      <div class="testimonial-image "><img alt="" src="img/testimonial/team-member-3.jpg"></div>
                                                      <div class="testimonial-author-info">
                                                         <a href="#"><span class="color">Carol Johansen</span></a> FIFO Themes
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Our Clients End -->           
         @stop