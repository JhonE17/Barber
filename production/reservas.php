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

    <title>Admin BarberShop</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"/>
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet"/>
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"/>
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!--Datetimepicker -->
    <link href="./css/jquery.datetimepicker.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet"/>
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
              <!-- <div class="profile_pic">
                <img src="/Barber2.0/images/<?php echo $ruta_img;?>" alt="Foto de perfil" width="20%"  class="img-circle profile_img">
              </div> -->
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?php echo $_SESSION['username'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <br />

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
        <div class="right_col" >
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>NUEVA RESERVA</h3>
              </div>

            </div>
           </div>
            <div class="clearfix"></div>

                <div class="row">
                
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="panel-default">
                        <div class="panel-heading">
                        INFORMACION PERSONAL
                        </div>
                        <div class="panel-body">
                          <form name="form" method="POST">
                            
                              <div class="form-group">
                                <label>Nombre completo</label> 
                                <input name="nombre" class="form-control" required>
                              </div>
                            
                              <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" required>
                              </div>
                              
                              <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" type ="text" class="form-control" required>                    
                              </div>   
                       </div>
                        
                    </div>
                </div>
                
                  
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="panel-default">
                        <div class="panel-heading">
                          INFORMACIÓN DE RESERVA
                        </div>
                        <div class="panel-body">
								          <div class="form-group">
                            <label>Tipo de servicio*</label>
                            <select name="tservicio"  class="form-control" required>
                              <option value selected ></option>
                              <option value="BARBER SHOP">  BARBER SHOP</option>
                              <option value="AFEITAR">AFEITAR</option>
                              <option value="CERQUILLO">CERQUILLO</option>
                              <option value="DEPILACIÓN">DEPILACIÓN</option>
                            </select>
                          </div>
							            <div class="form-group">
                            <label>Barberos</label>
                           <select name="barbero" class="form-control" required>
												      <option value selected ></option>
                              <option value="Andres Mejia"> Andres Mejia</option>
                              <option value="Carlos Perea">Carlos Perea</option>
												      <option value="Jorge Mosquera">Jorge Mosquera</option>
                              <option value="William Zapata">William Zapata</option>                                             
                           </select>
                          </div>
          							  <div class="form-group">
                            <label>No. de reservas*</label>
                            <select name="nreserva" class="form-control" required>
												      <option value selected ></option>
                              <option value="1">1</option>
                              <option value="2">2</option> 
												      <option value="3">3</option>
												      <option value="4">4</option>
                            </select>
                          </div> 
							        
							            <div class="form-group"> 
                            <label>Fecha Y Hora</label>
                            <input type="text" id="datetimepicker" min="07:00" max="18:00" name="fecha" class="form-control"> 
                          </div>  
                       </div>
                    </div>
                    <input type="submit" name="submit" value="Crear reserva" class="btn btn-defautl">
                </div>
                <?php
                if (isset($_POST['submit'])) {
                  include('../db.php');
                                    $nombre = $_POST['nombre'];
                                    $email = $_POST['email'];
                                    $telefono = $_POST['telefono'];
                                    $tipo_servicio = $_POST['tservicio'];
                                    $barbero = $_POST['barbero'];
                                    $nreservas = $_POST['nreserva'];
                                    $fecha = $_POST['fecha'];
                                    $est_reserva = "Pendiente";
                                    $est_pago = "Pendiente";

                                    /* Uso "mysqli_real_escape_string()" para escapar las cadenas */
                                    $check = " SELECT * FROM `ereservas` WHERE fecha = '" . mysqli_real_escape_string($con, $fecha) . "' AND fullname = '" . mysqli_real_escape_string($con, $nombre) . "'";
                                    $rs = mysqli_query($con, $check);
                                    /* Comprobamos si hubo un error durante la ejecución de la consulta */
                                    if ($rs === false) {
                                        die('ERROR SQL: ' . htmlspecialchars(mysqli_error($con)));
                                    }
                                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                    if ($data[0] > 1) {
                                        echo "<script type='text/javascript'> alert('El servicio que desea agregar ya existe')</script>";
                                    } else {
                                        /* También hay que escapar aquí las cadenas */
                                        $sql = "
                                          INSERT INTO `ereservas` (
                                            `fullname`,
                                            `email`,
                                            `barbero`,
                                            `fecha`,
                                            `nreservas`,
                                            `tipo_servicio`,
                                            `telefono`,
                                            `estado_reserva`,
                                            `estado_pago`
                                           
                                          ) VALUES (
                                            '" . mysqli_real_escape_string($con, $nombre) . "',
                                            '" . mysqli_real_escape_string($con, $email) . "',
                                            '" . mysqli_real_escape_string($con, $barbero) . "',
                                            '" . mysqli_real_escape_string($con, $fecha) . "',
                                            '" . mysqli_real_escape_string($con, $nreservas) . "',
                                            '" . mysqli_real_escape_string($con, $tipo_servicio) . "',
                                            '" . mysqli_real_escape_string($con, $telefono) . "',
                                            '" . mysqli_real_escape_string($con, $est_reserva) . "',
                                            '" . mysqli_real_escape_string($con, $est_pago) . "'

                                          )
                                        ";
                                        if (mysqli_query($con, $sql)) {
                                            echo '<script>alert("Reserva hecha con exíto") </script>';
                                        } else {
                                            echo '<script>alert("Lo Siento ! Revisar el sistema") </script>';
                                        }
                                    }
                                }
                            ?>

                              
						</form>
							
            
          </div>
          
          
        </div>
        
                    
            
				
					</div>




          </div>
        </div>
        <!-- /page content -->

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
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="./js/jquery.datetimepicker.full.js" > </script>
      <script>
      $(function(){
      $("#datetimepicker").datetimepicker({ 
        //Desahabilitar dias domingos
        disabledWeekDays: [6],
        //Formato de fecha & hora.
         format: 'd/m/Y h:i A',
         //Hora por defecto.
         defaultTime: ('8:00'),
         //intervalo de hora
         allowTimes: function getArr() {
        var allowTimes = [
           '08:00', '08:30', '09:00', '09:30', '10:00', 
           '10:30', '11:00', '11:30', '14:00', '14:30', 
           '15:00', '15:30', '16:00', '16:30', '17:00',
           '17:30', '18:00'
            ];
         return allowTimes;
          }(),
         //disabledTimeIntervals:[moment({H:7}), moment({H:18})],
        // step:30,
         //Fecha actual en adelante.
         minDate:0,
         //Fecha limite de reservas.
         maxDate: new Date(2018,11,31),
         //Tiempo acutal en adelante para todos los dias.
        // minTime:0,
         maxTime:-1,
         });
    });
      </script>                  
  </body>
</html>