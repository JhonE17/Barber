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
              <a href="./index.php" class="site_title"><i class="fa fa-paw"></i> <span>BarberShopQuib</span></a>
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
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Perfil</a></li>
                 
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
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
                <h3>PANEL DE SERVICIOS</h3><br>
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
              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel"> 
                  <div class="x_title">
                      <h2>Agregar nuevos servicios</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                            <form action="" method="POST"> 
      
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Nombre del servico<span class="required">*</span> <br>
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                      <input type="text" name="name" required="required" placeholder="Ingrese el nombre del servicio" class="form-control"> <br>
                                    </div> <br><br>                                  
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="last-name">Precio<span class="required">*</span>
                                      </label>
                                      <div class="col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" name="price" required="required" placeholder="Ingrese el precio del servicio" class="form-control" > <br>
                                      </div> <br><br>
                                    </div>
                             
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-5 col-xs-offset-4">
                                          <button type="submit" name="aggS" class="btn btn-success"><i class='fa fa-save'></i> Agregar</button>
                                        </div>
                                    </div>
                            </form>
                            <?php
                                include('../db.php');
                                if (isset($_POST['aggS'])) {
                                    $nombre = $_POST['name'];
                                    $precio = $_POST['price'];
                                    // $ctg = $_POST['ctgS'];

                                    /* Uso "mysqli_real_escape_string()" para escapar las cadenas */
                                    $check = " SELECT * FROM `servicios` WHERE servicio = '" . mysqli_real_escape_string($con, $nombre) . "' AND precio = '" . mysqli_real_escape_string($con, $precio) . "'";
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
                                          INSERT INTO `servicios` (
                                            `servicio`,
                                            `precio`
                                           
                                          ) VALUES (
                                            '" . mysqli_real_escape_string($con, $nombre) . "',
                                            '" . mysqli_real_escape_string($con, "$".$precio) . "'
                                          )
                                        ";
                                        if (mysqli_query($con, $sql)) {
                                            echo '<script>alert("Nuevo servicio agregado") </script>';
                                        } else {
                                            echo '<script>alert("Lo Siento ! Revisar el sistema") </script>';
                                        }
                                    }
                                }
                            ?>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="clearfix"></div>

              <!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Servicios registrados</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      </ul>
  
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    <?php
                                        include('../db.php');
                                        $sql = "SELECT * FROM servicios   ";
                                        $re = mysqli_query($con, $sql)
                                        ?>
                  
                      <table class="table table-striped ">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nombre del servicio</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Acciones</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php

                          while ($row = mysqli_fetch_array($re)) {
                            $id = $row['id_servicio'];
                              if ($id % 2 == 0) {
                                  echo "<tr>
                                  <td>" .$row['id_servicio']."</td>
                                          <td>" .$row['servicio']."</td>
                                          <td>" .$row['precio']."</td>
                                          <td><a href=removeservicios.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-trash' ></i> Eliminar</button></td>
                                          </tr>";
                                        } else {
                                          echo "<tr>
                                          <td>" .$row['id_servicio']."</td>
                                          <td>" .$row['servicio']."</td>
                                          <td>" .$row['precio']."</td>
                                          <td><a href=removeservicios.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-trash' ></i> Eliminar</button></td>
                                      </tr>";
                                      
                                    }
                          }
                          ?>  
                      
                                       
                     
                        </tbody>
                      </table>
  
                    </div>
                  </div>
                </div>
  
                <div class="clearfix"></div>
                

              <!-- Tabla para facturas -->
              <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table design <small>Custom design</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Invoice </th>
                            <th class="column-title">Invoice Date </th>
                            <th class="column-title">Order </th>
                            <th class="column-title">Bill to Name </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Amount </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 23, 2014 11:30:12 PM</td>
                            <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                            </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000038</td>
                            <td class=" ">May 24, 2014 10:55:33 PM</td>
                            <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                            </td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$432.26</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000037</td>
                            <td class=" ">May 24, 2014 10:52:44 PM</td>
                            <td class=" ">121000204</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$333.21</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 24, 2014 11:47:56 PM </td>
                            <td class=" ">121000210</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 26, 2014 11:30:12 PM</td>
                            <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                            </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000038</td>
                            <td class=" ">May 26, 2014 10:55:33 PM</td>
                            <td class=" ">121000203</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$432.26</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000037</td>
                            <td class=" ">May 26, 2014 10:52:44 PM</td>
                            <td class=" ">121000204</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$333.21</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>

                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 27, 2014 11:47:56 PM </td>
                            <td class=" ">121000210</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 28, 2014 11:30:12 PM</td>
                            <td class=" ">121000208</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div> -->

              <!-- Fin de tabla  -->
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>