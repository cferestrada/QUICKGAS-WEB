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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quick Gas | Administrador</title>
    <!--barra-->
    <link rel="shortcut icon" href="images/ico/favicon.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

   
    <!-- fontawesome -->
    <script src="https://use.fontawesome.com/4cf6e33259.js"></script>



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
                <li class="sidebar-brand">
                    <a href="/">
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
                <section id="nino-story">
                        <!--consulta select-->
                        <div class="container">
                            <h2 class="nino-sectionHeading" style="margin-top: -5%;">Ventas De La Semana</h2>

                    <canvas class="" id="linechart"></canvas>
                    <canvas class="" id="barchart"></canvas>

                <!--Fin-->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

     <!--chart-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>

    <script type="text/javascript" src="js/lineas.js"></script>  
    <script type="text/javascript" src="js/barras.js"></script>   
    <script type="text/javascript" src="js/horizontalBar.js"></script>   
    <script type="text/javascript" src="js/radar.js"></script>   
    <script type="text/javascript" src="js/polarArea.js"></script>   
    <script type="text/javascript" src="js/pie.js"></script>     


    <!-- Menu-->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
