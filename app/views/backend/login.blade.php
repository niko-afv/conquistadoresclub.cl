<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | ConquistadoresClub</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">

</head>

<body class="" style="color: #fff">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 style="font-size: 95px; margin-bottom: 80px;" class="logo-name">
                    <a href="/">
                        <img src="/img/logo conquistadoresclub.png"    />
                    </a>
                </h1>

            </div>
            <h3>Administrador</h3>
            <p>Para acceder debes autenticarte!</p>
            
            @if (Session::has('mensaje_error'))
            <div class="alert alert-danger" role="alert">
                <span>
                    {{ Session::get('mensaje_error') }}
                </span>
            </div>
            @endif
            
            @if (Session::has('mensaje_success'))
            <div class="alert alert-success" role="alert">
                <span>
                    {{ Session::get('mensaje_success') }}
                </span>
            </div>
            @endif
            
            <?php
                $message = Session::get('message');
                if(count($message) > 0){
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo Session::get('message');?>
            </div>
            <?php } ?>
            
            <form class="m-t" role="form" method="POST" action="/login">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Username" required="" style="color: #777">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="" style="color: #777">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <!--<a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>-->
            </form>
            <p class="m-t"> <small>ConquistadoresClub.CL By <a href="http://nicolasfredes.cl" target="_blank">Nicolás Fredes</a> &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="backend/js/jquery-1.10.2.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>

</body>

</html>
