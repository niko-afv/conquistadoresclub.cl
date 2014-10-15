<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>ConquistadoresClub.CL</title>
        <meta name="description" content="Pixma Responsive HTML5/CSS3 Template from FIFOTHEMES.COM">
        <meta name="author" content="FIFOTHEMES.COM">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <!-- Library CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="css/animations.css" media="screen">
        <link rel="stylesheet" href="css/superfish.css" media="screen">
        <link rel="stylesheet" href="css/revolution-slider/css/settings.css" media="screen">
        <link rel="stylesheet" href="css/prettyPhoto.css" media="screen">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/global.css">
        <!-- Skin -->
        <link rel="stylesheet" href="css/colors/blue.css" class="colors">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/theme-responsive.css">
        
        <!-- CUSTOM CSS --
        <link rel="stylesheet" href="css/custom.css">-->
        

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/ico/favicon.ico">
        <link rel="apple-touch-icon" href="img/ico/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-touch-icon-72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-touch-icon-144.png">
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css">
        <![endif]-->
    </head>
    <body class="home">
        <div class="page-mask">
            <div class="page-loader"> 

                <div class="spinner"></div>
                Loading...
            </div>

        </div>
       
        <div class="wrap">
<!------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- Header Start -->
            <header id="header">
                @include('layouts.header')
            </header>
            <!-- Header End --> 
<!------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- Content Start -->
            <div id="main">
                @yield('content')
            </div>
            <!-- Content End -->
<!------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- Footer Start -->
            <footer id="footer">
                @include('layouts.footer')
            </footer>
            <!-- Footer End -->
<!------------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------->         
            <!-- Scroll To Top --> 
            <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Wrap End -->
      
        <!-- The Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <script src="js/jquery.parallax.js"></script>
        <script src="js/jquery.wait.js"></script> 
        <script src="js/modernizr-2.6.2.min.js"></script> 
        <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/tweetMachine.js"></script>
        <script src="js/tytabs.js"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/circularnav.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jflickrfeed.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>