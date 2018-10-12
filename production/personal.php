<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
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
            <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div> -->
            <!-- /menu profile quick info -->

            <!-- <br /> -->
   <!-- sidebar menu -->
   <div id="sidebar-menu" class="menu_fixed hidden-print main_menu">
    <div class="menu_section">
     
      <ul class="nav side-menu">
        <li><a href="index.php"><i class="fa fa-home"></i>Menú Principal</a></li>

        <li><a href="#"><i class="fa fa-bar-chart-o"></i>Pagos & Ganancias<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              <li><a href="pagos.php">Pagos</a></li>
              <li><a href="ganancias.php">Ganancias</a></li>
            </ul>
        </li>

        <li><a href="inventario.php"><i class="fa fa-archive"></i>Inventario</a></li>
        
        <li><a href="personal.php"><i class="fa fa-group"></i>Personal & Usuarios</a></li>

        <li><a><i class="fa fa-calendar"></i>Reservas<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="reservas.php">Crear Reserva</a></li>
            <li><a href="ereservas.php">Estado de las reservas</a></li>
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
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Perfil</a></li>
                 
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
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
                <h3>PERSONAL & USUARIOS REGISTRADOS</h3><br>
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
              

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Usuarios Registrados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                        include ('../db.php');
                        $sql = "SELECT * FROM `login`";
                        $re = mysqli_query($con,$sql)
                    ?>
                    <table class="table table-responsive table-hover">
                      <thead >
                        <tr >
                          <th class="text-center">#</th>
                          <th class="text-center">Nombre de usuario</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Tipo de usuario</th>
                          <th class="text-center">Fecha de registro</th>
                          <th class="text-center">Acciones</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                      <?php
										while($row = mysqli_fetch_array($re))
										{
										
                      $id_login = $row['id_login'];
											$user_login = $row['username'];
											$fecha_login = $row['fecha_registro'];
                      $email_login = $row['email'];
                      $tipoU_login = $row['tipoUsuario'];
                    

											if($id_login % 2 ==0 )
											{
												echo"<tr>
													<td>".$id_login."</td>
													<td>".$user_login."</td>
                          <td>".$email_login."</td>
                          <td>".$tipoU_login."</td>
                          <td>".$fecha_login."</td>
                           <td><button class='item' data-toggle='tooltip' data-placement='top' title='Eliminar personal'><i class='fa fa-trash'></i></button></td>
												</tr>";
											}
											else
											{
												echo"<tr>
                        <td>".$id_login."</td>
													<td>".$user_login."</td>
                          <td>".$email_login."</td>
                          <td>".$tipoU_login."</td>
                          <td>".$fecha_login."</td>
                         <td><button class='item' data-toggle='tooltip' data-placement='top' title='Eliminar usuario'><i class='fa fa-trash'></i></button></td>
                      </tr>";
											
											}
										
										}
                    ?>   
                      </tbody>

                    </table>
                     <!-- Boton agregar -->
                  <div class="form-group" class="text-center">
                        <div class="col-md-offset-5 col-xs-offset-4">
                            <button  type="button" class="btn btn-secondary mb-1"  data-toggle="modal" data-target="#mediumModal"><i class='fa fa-plus'></i>
                                Agregar nuevo usuario
                            </button>
                        </div>
                    </div>
                      <!-- Fin boton -->   
                  </div>
                
                </div>
              
              </div>
              <div class="clearfix"></div>
                  <!-- Tabla de personal registrado -->
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Personal Registrado</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                        include ('../db.php');
                        $sql = "SELECT * FROM `personal`";
                        $re = mysqli_query($con,$sql)
                    ?>
                    <table class="table table-responsive table-hover">
                      <thead >
                        <tr >
                          <th class="text-center">#</th>
                          <th class="text-center">Nombre completo</th>
                          <th class="text-center">Documento</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Telefóno</th>
                          <th class="text-center">Dirección</th>
                          <th class="text-center">Cargo</th>
                          <th class="text-center">Estado</th>
                          <th class="text-center">Fecha de registro</th>
                          <th class="text-center">Acciones</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                      <?php
										while($row = mysqli_fetch_array($re))
										{
										
                      $id_personal = $row['id'];
                      $nombreP = $row['nombre'];
                      $emailP = $row['emailP'];
                      $dirP = $row['direccion'];
                      $cargoP = $row['cargo'];
                      $docP = $row['documento'];
                      $telP = $row['telefono'];
                      $estadoP = $row['estado'];
                      $fechaP = $row['fecha_registro'];

											if($id_personal % 2 == 0 )
											{
												echo"<tr>
													<td>".$id_personal."</td>
													<td>".$nombreP."</td>
                          <td>".$docP."</td>
                          <td>".$emailP."</td>
                          <td>".$telP."</td>
                          <td>".$dirP."</td>
                          <td>".$cargoP."</td>
                          <td>".$estadoP."</td>
                          <td>".$fechaP."</td>
                          <td><button class='item' data-toggle='tooltip' data-placement='top' title='Despedir'><i class='glyphicon glyphicon-ban-circle'></i></button>
                          <button class='item' data-toggle='tooltip' data-placement='top' title='Eliminar'><i class='fa fa-trash'></i></button></td>
												</tr>";
											}
											else
											{
												echo"<tr>
                        <td>".$id_personal."</td>
                        <td>".$nombreP."</td>
                        <td>".$docP."</td>
                        <td>".$emailP."</td>
                        <td>".$telP."</td>
                        <td>".$dirP."</td>
                        <td>".$cargoP."</td>
                        <td>".$estadoP."</td>
                        <td>".$fechaP."</td>
                        <td><button class='item' data-toggle='tooltip' data-placement='top' title='Despedir'><i class='glyphicon glyphicon-ban-circle'></i></button>
                        <button class='item' data-toggle='tooltip' data-placement='top' title='Eliminar'><i class='fa fa-trash'></i></button></td>
                      </tr>";
											
											}
										
										}
                    ?>   
                      </tbody>

                    </table>
                     <!-- Boton agregar -->
                  <div class="form-group" class="text-center">
                        <div class="col-md-offset-5 col-xs-offset-4">
                            <button  type="button" class="btn btn-secondary mb-1"  data-toggle="modal" data-target="#mediumModal"><i class='fa fa-plus'></i>
                                Agregar nuevo personal
                            </button>
                        </div>
                    </div>
                      <!-- Fin boton -->   
                  </div>
                
                </div>
              
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      <!-- Fin tabla -->
            </div>
            
          </div>
          
        </div>
        <!-- /page content -->

        <!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
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
                      <label>Nombre de usuario</label>
                      <input name="username" type="text" class="form-control" placeholder="Ingrese nombre de usuario">
                  </div>
                      
                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                      <label>Contraseña</label>
                      <input name="pass" type="password" class="form-control" placeholder="Ingrese contraseña">     
                  </div>
                    
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
                      <select name="newtu" class="form-control" required>
                      <option value selected>Escoga un cargo</option>
                      <option value="Barbero">Barbero</option>
                      <option value="Limpieza">Limpieza</option> 
                  </select>
              </div>
                  
                  <div class="modal-body col-md-6 col-sm-6 col-xs-12">
                          <label>Tipo de Usuario</label>
                          <select name="newtu" class="form-control" required>
                          <option value selected>Escoga un tipo de usuario</option>
                          <option value="Administrador">Administrador</option>
                          <option value="Empleado">Empleado</option> 
                      </select>
                  </div>
                     
                  
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Confirmar</button>
                    </div>   
            </div>
          </div>
        </div>
        <!-- end modal medium -->
  
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