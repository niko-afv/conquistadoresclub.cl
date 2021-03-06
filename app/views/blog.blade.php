@extends('layouts.main')
@section('content')
<!-- Title, Breadcrumb End-->
<!-- Main Content start-->
<div class="content">
   <div class="container">
      <div class="row">
         <div class="posts-block col-lg-9 col-md-9 col-sm-8 col-xs-12">
            
             <?php foreach($posts as $item => $val){?>
             <article class="post hentry">
                 <div class="post-image" style="width:838px; height:372px; text-align: center">
                    <a href="{{ $val['PORTADA'] }}" data-rel="prettyPhoto">
                        <span class="img-hover"></span>
                        <span class="fullscreen"><i class="fa fa-search"></i></span>
                        <img src="{{ $val['PORTADA'] }}" height="372" alt="">
                    </a>
                </div>
                
                <header class="post-header">
                    <h3 class="content-title">{{ $val['NOMBRE'] }}</h3>
                    <div class="blog-entry-meta">
                        <div class="blog-entry-meta-date">
                            <i class="fa fa-clock-o"></i>
                            <span class="blog-entry-meta-date-month">{{ $val['CREADO'] }}</span>
                            <!--<span class="blog-entry-meta-date-day">12,</span>
                            <span class="blog-entry-meta-date-year">2013</span>-->
                        </div>
                        <div class="blog-entry-meta-author">
                            <i class="fa fa-user"></i>
                            <a href="#" class="blog-entry-meta-author">{{ User::find($val['AUTOR'])->first()->get()->toArray()[0]['nombre']  }}</a>
                        </div>
                        <!--<div class="blog-entry-meta-tags">
                            <i class="fa fa-tags"></i>
                            <a href="#">Web Design</a>,
                            <a href="#">Branding</a>
                        </div>
                        <div class="blog-entry-meta-comments">
                            <i class="fa fa-comments"></i>
                            <a href="#" class="blog-entry-meta-comments">4 comments</a>
                        </div>-->
                    </div>
                </header>
                <div class="post-content">
                    <p>
                        {{ $val['TEXTO'] }}
                    </p>
                </div>
                <footer class="post-footer">
                    <a class="btn-small btn-color">Leer Más</a>
                </footer>
            </article>
             
            <div class="blog-divider"></div> 
             <?php }?>
            
            
            
            
            
            <div class="pagination-centered">
                <ul class="pagination">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <!-- Search Widget Start -->
            <div class="widget search-form">
                <div class="input-group">
                    <input type="text" value="Search..." onfocus="if(this.value=='Search...')this.value='';" onblur="if(this.value=='')this.value='Search...';" class="search-input form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="subscribe-btn btn"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <!-- /input-group -->
            </div>
            <!-- Search Widget End -->
            <!-- Tab Start -->
            <div class="widget tabs">
                <div id="horizontal-tabs">
                    <ul class="tabs">
                        <li id="tab1" class="current">Popular</li>
                        <li id="tab2">Recent</li>
                        <li id="tab3">Comments</li>
                    </ul>
                    <div class="contents">
                        <div class="tabscontent" id="content1" style="display: block;">
                            <ul class="posts">
                                <li>
                                    <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="img/recent-post-img.jpg"></a>
                                    <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                                    <span class="color">27 July 2013</span>
                                </li>
                                <li>
                                    <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="img/recent-post-img.jpg"></a>
                                    <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                                    <span class="color">30 July 2013</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tabscontent" id="content2">
                            <ul class="posts">
                                <li>
                                    <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="img/recent-post-img.jpg"></a>
                                    <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                                    <span class="color">27 July 2013</span>
                                </li>
                                <li>
                                    <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="img/recent-post-img.jpg"></a>
                                  <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                                  <span class="color">30 July 2013</span>
                               </li>
                            </ul>
                        </div>
                        <div class="tabscontent" id="content3">
                            <ul class="posts">
                                <li>
                                    <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="img/recent-post-img.jpg"></a>
                                    <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                                    by <span class="color">wptuts+</span>
                                </li>
                                <li>
                                    <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="img/recent-post-img.jpg"></a>
                                    <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                                    by <span class="color">wptuts+</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab End -->
            <!-- Testimonials Widget Start -->
            <div class="row">
                <div class="testimonials widget">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="testimonials-title">
                            <h3 class="title">Testimonials</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="testimonials-carousel" class="testimonials-carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="testimonial item">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                        </p>
                                        <div class="testimonials-arrow"></div>
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
                                        <div class="testimonials-arrow"></div>
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
                                        <div class="testimonials-arrow"></div>
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
            <!-- Category Widget Start -->
            <div class="widget category">
                <h3 class="title">Categories</h3>
                    <ul class="category-list slide">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Illustration</a></li>
                        <li><a href="#">Logo Design</a></li>
                        <li><a href="#">Wordpress Themes</a></li>
                    </ul>
                </div>
                <!-- Category Widget End -->
                <!-- Ads Widget Start -->
                <div class="widget ads">
                    <h3 class="title">Advertisement</h3>
                    <div class="ads-img row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <img class="img-thumbnail" alt="" src="img/ads-small.jpg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <img class="img-thumbnail" alt="" src="img/ads-small.jpg">
                        </div>
                    </div>
                    <div class="ads-img row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <img class="img-thumbnail" alt="" src="img/ads-small.jpg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <img class="img-thumbnail" alt="" src="img/ads-small.jpg">
                        </div>
                    </div>
                </div>
                <!-- Ads Widget End -->
            </div>
            <!-- Sidebar End -->     
        </div>
    </div>
</div>
<!-- Main Content end-->
@stop