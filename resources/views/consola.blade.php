<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!--barra-->
    <link rel="shortcut icon" href="/images/ico/favicon.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">

<!--estilos-->
<link href="css/app.css" rel="stylesheet" type="text/css">
<link href="css/simple-sidebar.css" rel="stylesheet" type="text/css">
<link href="css/template.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="css/unslider.css" rel="stylesheet" type="text/css">

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

 <!-- fontawesome -->
<script src="https://use.fontawesome.com/4cf6e33259.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quick Gas | Administrador</title>
</head>

<style>
    .logo{
        height: 35px;
    }
</style>
<body style="background: url(../images/bg-pattern.png) center center / cover; background-color:grey;" >

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/">
                        <img src="/images/bg-header.png" class="logo" alt="">
                    </a>
                </li>
                
                <li>
                    <a href="/dia">Estadísticas del día</a>
                </li>
                <li>
                    <a href="/semana">Estadísticas de la semana</a>
                </li>
                <li>
                    <a href="/mes">Estadísticas del mes</a>
                </li>
                <li>
                    <a href="/productos">Estadísticas por producto</a>
                </li>
                <li>
                    <a href="/empleados">Empleados</a>
                </li>
                <li>
                    <a href="/vehiculos">Vehiculos</a>
                </li>
                <li>
                    <a href="/logOff">Cerrar Sesión</a>
                </li>
                <li>
                    <a href="/configuracion">Configuracion</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- consola -->
        <div id="consola">
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                </div><br>

                <!--sub-menu-->
                   

                   <!-- Header
    ================================================== -->
    <header id="nino-header">
        <div id="nino-headerInner">                 
            <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
              
                </div><!-- /.container-fluid -->
            </nav>
             
            <section id="nino-slider" class="carousel slide container" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h2 class="nino-sectionHeading">
                        
                       <!-- <a class="navbar-brand" href="" style="color: black">Quick Gas</a>-->

<!--cambiar bienvenido por @-->
                            <span class="nino-subHeading">BIENVENIDO</span>
                            <br> 
                            Usuario
                        </h2>
                        <a href="Login/logout.php" class="nino-btn">Cerrar Sesion</a>
                    </div>
                    <div class="item">
                        <h2 class="nino-sectionHeading">
                            <span class="nino-subHeading">Consulta las valoraciones del dia</span>
                            Notificaciones<br>
                        </h2>
                        <a href="#" class="nino-btn">ok</a>
                    </div>
                    <div class="item">
                        <h2 class="nino-sectionHeading">
                            <span class="nino-subHeading">Consultar reporte del dia</span>
                            Reportes <br>
                            <br>
                            <!--actualizacion ajax-->
                            <div id="contenido">
                                <div name="timediv" id="timediv"></div>
                            </div>
                        </h2>
                        <a href="#" class="nino-btn">Ver</a>
                    </div>
                    <div class="item">
                        <h2 class="nino-sectionHeading">
                            <span class="nino-subHeading">Ver comentarios</span>
                            De los<br>conductores
                        </h2>
                        <a href="#" class="nino-btn">Ver</a>
                    </div>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators clearfix">
                    <li data-target="#nino-slider" data-slide-to="0" class="active">
                        <div class="inner">
                            <span class="number">01</span> Iniciar sesion   
                        </div>
                    </li>
                    <li data-target="#nino-slider" data-slide-to="1">
                        <div class="inner">
                            <span class="number">02</span> Notificaciones
                        </div>
                    </li>
                    <li data-target="#nino-slider" data-slide-to="2">
                        <div class="inner">
                            <span class="number">03</span> Reportes
                        </div>
                    </li>
                    <li data-target="#nino-slider" data-slide-to="3">
                        <div class="inner">
                            <span class="number">04</span> Comentarios
                            <br>
                        </div>
                    </li>
                </ol>
            </section>
        </div>
    </header><!--/#header-->

    

                <!--Fin-->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Scroll to top
    ================================================== -->
    <a href="#" id="nino-scrollToTop">Ir al inicio</a>
    

    <!-- Menu-->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
