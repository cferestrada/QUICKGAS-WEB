<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

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
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="consola.php">
                        <img src="images/bg-header.png" class="logo" alt="">
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
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- consola -->
        <div id="consola">
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                </div>

                <!--sub-menu-->
                   

                   <!-- Header
    ================================================== -->
    <header id="nino-header">
        <div id="nino-headerInner">                 
            <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Quick Gas</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="nino-menuItem pull-right">
                        <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#nino-header">Inicio <span class="sr-only">(current)</span></a></li>
                                <li><a href="#nino-story">Consultar</a></li>
                                <li><a href="#nino-portfolio">Reportes</a></li>
                                <!--<li><a href="#nino-ourTeam">Vehiculos</a></li>
                                <li><a href="#nino-portio">Estadisticas</a></li>
                                <li><a href="#nino-latestBlog">Noticias</a></li>-->
                                  <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Configuracion
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <a href="Login/logout.php">
                                            <span class="fa-stack fa-lg">
                                                <i class="fa fa-cog fa-spin fa-stack-1x"></i>
                                            </span>
                                                Mi Cuenta<br>
                                        </a>

                                      <li><a href="Login/logout.php">Cerrar Sesion</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
             
            <section id="nino-slider" class="carousel slide container" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h2 class="nino-sectionHeading">

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

    <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="colInfo">
                        <div class="footerLogo">
                            <a href="#" >Quick Gas</a>  
                        </div>

                    </div>
                </div> 

                <div class="col-md-4">
                    <div class="colInfo">
                        <div class="nino-followUs">
                            <div class="totalFollow"><span>15k</span> Seguidores</div>
                        </div>
                    </div>
                </div> 

                <div class="col-md-4">
                    <div class="colInfo">
                        
                        <div class="nino-followUs">
                            <div class="socialNetwork">
                                <span class="text">Siguenos en: </span>
                                <a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
                            </div>
                        </div>
                        
                    </div>

                    
                </div>              
            </div>

            <div class="nino-copyright">Copyright &copy; 2017 <a target="_blank" href="" title=""></a>. All Rights Reserved. <br/>  <a href="">EMI</a></div>
        </div>
    </footer><!--/#footer-->


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
    
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/unslider-min.js"></script>
    <script type="text/javascript" src="js/template.js"></script>


    <script type="text/javascript" src="js/ajax.js"></script>   

    <!-- Menu-->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
