<?php session_start();
require 'admin/config.php';
require 'funtions.php';
//comprobar sesion  
if (!isset($_SESSION['username'])) {
  header('Location: '.RUTA.'login.php');
}
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BarberShopQuib</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>BarberShopQuib</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?php echo $_SESSION['username'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <!-- <br /> -->

   <!-- sidebar menu -->
   <div id="sidebar-menu" class="menu_fixed hidden-print main_menu">
    <div class="menu_section">
     
      <ul class="nav side-menu">
        <li><a href="index.php"><i class="fa fa-home"></i>Menú Principal</a></li>

        <li><a href="ganancias.php"><i class="fa fa-bar-chart-o"></i>Ganancias</a>
        
        </li>

        <li><a href="inventario.php"><i class="fa fa-archive"></i>Inventario</a></li>
        
        <li><a href="#"><i class="fa fa-group"></i>Personal & Usuarios<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="personal.php">Personal</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
          </ul>
        </li>
        

        <li><a><i class="fa fa-calendar"></i>Reservas<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="reservas.php">Crear Reserva</a></li>
            <li><a href="pagos.php">Facturas</a></li>
            <li><a href="ereservas.php">Estado</a></li>
          </ul>
        </li>

        <li><a href="servicios.php"><i class="fa fa-suitcase"></i>Servicios</a>
      </ul>
    </div>
    

  </div>
  <!-- /sidebar menu -->

  

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['username'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Perfil</a></li>
                 
                    <li><a href="<?php echo RUTA.'logout.php' ?>"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ESTADO DE LAS RESERVAS</h3><br>
              </div>
              

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>

            <div class="clearfix"></div>


                 <div class="row">
        
              <div class="panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-condensed table-striped" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
											                      <th>Barbero</th>
											                      <th>Fecha Y Hora</th>
											                      <th>N° De Reservas</th>
										                      	<th>Tipo De Servicio</th>
											                      <th>Estado</th>
											                      <th>Más</th>		
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                              include("../db.php");	
                                              $tsql = "SELECT * FROM ereservas";
                                              $tre = mysqli_query($con,$tsql);
                                              
                                              
                                              while($trow=mysqli_fetch_array($tre) )
                                              {	
                                                $co =$trow['estado_reserva']; 
                                                if($co=="Pendiente")
                                                {
                                                  echo"<tr>
                                                  <th>".$trow['id_ereservas']."</th>
                                                  <th>".$trow['fullname']."</th>
                                                  <th>".$trow['email']."</th>
                                                  <th>".$trow['barbero']."</th>
                                                  <th>".$trow['fecha']."</th>
                                                  <th>".$trow['nreservas']."</th>
                                                  <th>".$trow['tipo_servicio']."</th>
                                                  <th>".$trow['estado_reserva']."</th>
                                                  <th><a href='checkreservas.php?rid=".$trow['id_ereservas']." ' class='btn btn-secondary mb-1 '> <i class = 'glyphicon glyphicon-eye-open'> </i> Más</a></th>
                                                  </tr>";
                                                }
                                              }	
                                           ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                  </div>
                </div>
        <!-- footer content -->
                        
        <footer>
            <div class="pull-right">
                &COPY; BarberShopQuib - TODOS LOS DERECHOS SON RESERVADOS </a>
            </div>
            <div class="clearfix"></div>
          </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>