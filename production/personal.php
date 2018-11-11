<?php session_start();
require 'admin/config.php';
require 'funtions.php';
//comprobar sesion  
if (!isset($_SESSION['username'])) {
  header('Location: '.RUTA.'login.php');
}
require '../db.php';

$consulta="SELECT foto FROM login WHERE id_login='12'";
$rs= mysqli_query($con, $consulta);
while ($fila=mysqli_fetch_array($rs)) {
  $ruta_img=$fila["foto"];
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
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

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
            <a href="index.php" class="site_title"><img src="images/logo3.png" alt=""><small>Barbershopquib</small></a>
            </div>

            <div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
          
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?php echo $_SESSION['username'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

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
            <li><a href="pagosReserva.php">Pagos</a></li>
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
                    <img src="/Barber2.0/images/<?php echo $ruta_img;?>" alt="Foto de perfil" width="10%"> <?php echo $_SESSION['username'];?>
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
                <h3>PERSONAL REGISTRADO</h3><br>
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

              <div class="clearfix"></div>
                  <!-- Tabla de personal registrado -->
                 <div class="row">
              

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
               
                  <div class="x_content">
                          <table class="table table-hover table-condensed " >
                              <thead>
                                  <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nombre completo</th>
                                    <th class="text-center">Documento</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Telefóno</th>
                                    <th class="text-center">Dirección</th>
                                    <th class="text-center">Cargo</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Fecha de registro</th>
                                    <th class="text-right">Acciones</th>	
                                  </tr>
                              </thead>
                              <tbody>
                                    <?php
                                        include("../db.php");	
                                        $tsql = "SELECT * FROM personal";
                                        $tre = mysqli_query($con,$tsql);
                                        
                                        while($trow=mysqli_fetch_array($tre) )
                                        {	
                                          $co =$trow['estado']; 
                                          if($co=="Activo")
                                          {
                                            echo"<tr>
                                            <td class='text-center'>".$trow['id']."</td>
                                            <td class='text-center'>".$trow['nombre']."</td>
                                            <td class='text-center'>".$trow['documento']."</td>
                                            <td class='text-center'>".$trow['emailP']."</td>
                                            <td class='text-center'>".$trow['telefono']."</td>
                                            <td class='text-center'>".$trow['direccion']."</td>
                                            <td class='text-center'>".$trow['cargo']."</td>
                                            <td class='text-center'>".$trow['estado']."</td>
                                            <td class='text-center'>".$trow['fecha_registro']."</td>
                                            <td class='text-center'><a href=despedir.php?eid=".$trow['id'] ." <button class='btn btn-warning'> <i class='glyphicon glyphicon-ban-circle' ></i> Despedir</button></td>
                                            <td class='text-center'><a href=removepersonal.php?eid=".$trow['id'] ." <button class='btn btn-danger'> <i class='fa fa-trash' ></i> Eliminar</button></td>
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

                     <!-- Boton agregar -->
                     <div class="form-group" class="text-center">
                        <div class="col-md-offset-5 col-xs-offset-4">
                            <button  type="button" class="btn btn-secondary mb-1"  data-toggle="modal" data-target="#mediumModal2"><i class='fa fa-plus'></i>
                                Agregar nuevo usuario
                            </button>
                        </div>
                    </div>
                      <!-- Fin boton -->   
           
          </div>

                  </div>
                
                </div>
              
              </div>
              <div class="clearfix"></div>


        <!-- /page content -->
      <!-- Fin tabla -->
            </div>
            
          </div>
          
        </div>
        <!-- /page content -->

        <!-- modal medium -->
			<div class="modal fade" id="mediumModal2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="mediumModalLabel">Datos del nuevo usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post">
                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                      <label>Nombre completo</label>
                      <input name="fullname" type="text"  class="form-control" placeholder="Ingrese nombre completo"></div>
                    
                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                      <label>Documento</label>
                      <input name="doc" type="text" class="form-control" placeholder="Ingrese documento de identidad">     
                  </div>

                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control" placeholder="Ingresar Email">     
                  </div>

                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                      <label>Telefóno</label>
                      <input name="phone" type="tel"  class="form-control" placeholder="Ingrese telefóno">     
                  </div>

                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                      <label>Dirección</label>
                      <input name="dir" type="text" class="form-control" placeholder="Ingrese dirección">     
                  </div>

                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                      <label>Cargo</label>
                      <select name="cargoP" class="form-control" required>
                      <option value selected>Escoga un cargo</option>
                      <option value="Barbero">Barbero</option>
                      <option value="Limpieza">Limpieza</option> 
                  </select>
              </div>
                  
              
                     
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <!-- <button type="sumbit" name="aggP" class="btn btn-primary">Confirmar</button> -->
                    <input type="submit" name="in" value="Confirmar" class="btn btn-primary">
                  </form>
                </div>   
            </div>
          </div>
        </div>
        <!-- end modal medium -->
        <!-- Agregar Modal -->
        <?php
						if(isset($_POST['in']))
						{
							$newnom = $_POST['fullname'];
							$newdoc = $_POST['doc'];
              $newem = $_POST['email'];
              $newtel = $_POST['phone'];
              $newdir = $_POST['dir'];
              $newcar = $_POST['cargoP'];
              $newest = 'Activo';
              
							$newsql ="INSERT INTO personal (nombre,documento,emailP,telefono,direccion,cargo,estado) values ('$newnom','$newdoc','$newem','$newtel','$newdir','$newcar','$newest')";
							if(mysqli_query($con,$newsql))
							{
							echo' <script language="javascript" type="text/javascript"> alert("!Nuevo personal agregado!") </script>';
              
              header("Location: personal.php");
              }
              
						  }
						?>
        <!-- /Agregar Modal -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                &COPY; BarberShopQuib - TODOS LOS DERECHOS SON RESERVADOS </a>
            </div>
            <div class="clearfix"></div>
          </footer>
        <!-- /footer content -->
      </div>
      <!-- Fin modal agregar-->

  
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