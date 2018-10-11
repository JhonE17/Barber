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
                <h3>PAGOS</h3>
              </div>

            
            </div>

            <div class="clearfix"></div>

            <div class="row">
        
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>FACTURA DE LAS RESERVAS</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php
                    include('../db.php');
                    $sql = "SELECT * FROM ereservas WHERE estado_reserva = 'Confirmado'   ";
                    $re = mysqli_query($con, $sql)
                  ?>
                    <table id="datatable-buttons" class="table table-condensed table-striped" >
                      <thead class="text-center">
                        <tr >  
                          <th class="text-center">#</th>
                          <th class="text-center">Nombre Cliente</th>
                          <th class="text-center">Barbero</th>
                          <th class="text-center">Tipo de servicio</th>
                          <th class="text-center">N° reservas</th>
                          <th class="text-center">Fecha Reserva</th>
                          <th class="text-center">Estado reserva</th>
                          <th class="text-center">Estado pago</th>
                          <th class="text-center">Acciones</th>
                        </tr>
                      </thead>


                      <tbody class="text-center">
                      <?php

                          while ($row = mysqli_fetch_array($re)) {
                              $id = $row['id_ereservas'];
                              if ($id % 2 == 0) {
                                        echo "<tr>
                                              <td>" .$row['id_ereservas']."</td>
                                              <td>" .$row['fullname']."</td>
                                              <td>" .$row['barbero']."</td>
                                              <td>" .$row['tipo_servicio']."</td>
                                              <td>" .$row['nreservas']."</td>
                                              <td>" .$row['fecha']."</td>
                                              <td>" .$row['estado_reserva']."</td>
                                              <td>" .$row['estado_pago']."</td>
                                              <td><button class='btn btn-default' ><a href='invoice.php'><i class='glyphicon glyphicon-eye-open'></i> Ver factura</a></button></td>
                                              </tr>";
                              } else {
                                        echo "<tr>
                                              <td>" .$row['id_ereservas']."</td>
                                              <td>" .$row['fullname']."</td>
                                              <td>" .$row['barbero']."</td>
                                              <td>" .$row['fecha']."</td>
                                              <td>" .$row['nreservas']."</td>
                                              <td>" .$row['tipo_servicio']."</td>
                                              <td>" .$row['estado_reserva']."</td>
                                              <td>" .$row['estado_pago']."</td>
                                              <td><button class='btn btn-default' ><a href='invoice.php'><i class='glyphicon glyphicon-eye-open'></i> Ver factura</a></button></td>
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

          </div>
        </div>
        <!-- /page content -->

        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="mediumModalLabel">Detalles de factura</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post">

                          <!-- page content -->
        <div class="modal-body" role="main">
                    <div class="x_content">
                    <section class="content invoice">
                        <!-- title row -->
                        <div class="row">
                          <div class="col-xs-12 invoice-header">
                            <h1>
                                            <i class="fa fa-book"></i> Factura de reserva
                                            <small class="pull-right">Fecha: 16/08/2018</small>
                                        </h1>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                            De
                            <address>
                                            <strong>BarberShopQuib</strong>
                                            <br>795 Freedom Ave, Suite 600
                                            <br>New York, CA 94107
                                            <br>Phone: 1 (804) 123-9876
                                            <br>Email: ironadmin.com
                                        </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            Para
                            <address>
                                            <strong>John Doe</strong>
                                            <br>795 Freedom Ave, Suite 600
                                            <br>New York, CA 94107
                                            <br>Phone: 1 (804) 123-9876
                                            <br>Email: jon@ironadmin.com
                                        </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            <b>N° factura #007612</b>
                            <br>
                           
                            <b>Fecha de reserva:</b> 2/22/2018
                            <br>
                            <b>N° de cuenta:</b> 968-34567
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
  
                        <!-- Table row -->
                        <div class="row">
                          <div class="col-xs-12 table-responsive">
                            <table class="table table-condensed table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Servicio</th>
                                  <th>N° reservas</th>
                                  <th>Barbero</th>
                                  <th>Subtotal</th>
                                  <th>Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Call of Duty</td>
                                  <td>455-981-221</td>
                                  <td>El snort testosterone trophy driving gloves handsome gerry Richardson helvetica tousled street art master testosterone trophy driving gloves handsome gerry Richardson
                                  </td>
                                  <td>$64.50</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Need for Speed IV</td>
                                  <td>247-925-726</td>
                                  <td>Wes Anderson umami biodiesel</td>
                                  <td>$50.00</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Monsters DVD</td>
                                  <td>735-845-642</td>
                                  <td>Terry Richardson helvetica tousled street art master, El snort testosterone trophy driving gloves handsome letterpress erry Richardson helvetica tousled</td>
                                  <td>$10.70</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Grown Ups Blue Ray</td>
                                  <td>422-568-642</td>
                                  <td>Tousled lomo letterpress erry Richardson helvetica tousled street art master helvetica tousled street art master, El snort testosterone</td>
                                  <td>$25.99</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
  
                        <div class="row">
                          <!-- accepted payments column -->
                          <div class="col-xs-6">
                            <p class="lead">Metodos de pago:</p>
                            <img src="images/visa.png" alt="Visa">
                            <img src="images/mastercard.png" alt="Mastercard">
                            <img src="images/american-express.png" alt="American Express">
                            <img src="images/paypal.png" alt="Paypal">
                           
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-6">
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <tbody>
                                  <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>$250.30</td>
                                  </tr>
                                  <tr>
                                    <th>Iva (16%)</th>
                                    <td>$10.34</td>
                                  </tr>
                                  <tr>
                                    <th>Total a pagar:</th>
                                    <td>$265.24</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
  
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                          <div class="col-xs-12">
                            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
                            <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Pagar</button>
                            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>
                          </div>
                        </div>
                      </section>
                    </div>
                  
              
         
          </div>
          <!-- /page content -->
                </form>
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
        <!-- footer content -->
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
      <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- ECharts -->
    <script src="../vendors/echarts/dist/echarts.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>