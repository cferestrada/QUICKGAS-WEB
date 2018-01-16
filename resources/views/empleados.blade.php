<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

<link href="css/app.css" rel="stylesheet" type="text/css">
<link href="css/simple-sidebar.css" rel="stylesheet" type="text/css">
<link href="css/template.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="css/unslider.css" rel="stylesheet" type="text/css">

<script src="{{asset('js/app.js')}}"></script>

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
                            <h2 class="nino-sectionHeading" style="margin-top: -5%;">Empleados Activos</h2>

                            <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Vehiculo</th>
                                <th>Ventas/Dia</th>
                                <th>Detalles</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Chofer 1</td>
                                <td>MCH255</td>
                                <td>50</td>
                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Ver</button></td>
                                <td><button type="button" class="btn btn-off" data-toggle="modal" data-target=".bd-example-modal-lg">Eliminar</button></td>
                              </tr>
                              <tr>
                                <td>Chofer2</td>
                                <td>FGF525</td>
                                <td>55</td>
                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Ver</button></td>
                                <td><button type="button" class="btn btn-off" data-toggle="modal" data-target=".bd-example-modal-lg">Eliminar</button></td>
                              </tr>
                              <tr>
                                <td>Chofer3</td>
                                <td>SFG548</td>
                                <td>25</td>
                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Ver</button></td>                                
                                <td><button type="button" class="btn btn-off" data-toggle="modal" data-target=".bd-example-modal-lg">Eliminar</button></td>
                              </tr>
                            </tbody>
                          </table>

                          <div class="row">
                              <div class="col-lg-6">
                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Nuevo</button>
                              </div>
                          </div>

                <!--Fin-->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!--Modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Chofer #</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form>
              <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="ejemplo_archivo_1">Cambiar imagen:</label>
                        <input type="file" id="ejemplo_archivo_1">
                      </div>
                      <div class="form-group">
                        <img src="images/testimonial/img-1.jpg" alt="">
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Direccion:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
              <div class="form-group">
                <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                <input type="file" id="ejemplo_archivo_1">
                <p class="help-block">Documentacion necesaria para la aprobacion del trabajador.</p>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-off" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning">Guardar</button>
          </div>


        </div>
      </div>
    </div>
    <!-- /#wrapper -->
   
    <!-- Bootstrap core JavaScript
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
    <!-- Menu-->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
