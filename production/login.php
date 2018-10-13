<?php
session_start();
if(isset($_SESSION["username"])){
  // header("lacation.index.php");
};
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
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Inicio de sesión</h1>
                <!-- Nombre de usuario -->
                <div>
                  <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required="" placeholder="Usuario" onBlur="if(this.value == '') this.value = 'Usuario'" onFocus="if(this.value == 'Usuario') this.value = ''" required/> <!-- JS because of IE support; better: placeholder="Usuario" -->
                </div>
                <!-- Contraseña -->
                <div>
                  <input type="password" class="form-control" name="password" placeholder="Contraseña" required="" onFocus="if(this.value == 'password') this.value = ''" required /> <!-- JS because of IE support; better: placeholder="Password" -->
                </div>
                <!-- Boton de incio de sesion -->
              <div>
                <button type="sumbit" name="add" class="btn btn-default " href="index.php">Ingresar</button>
                <a class="reset_pass" href="#">Perdiste tu constrseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Eres nuevo?
                  <a href="#signup" class="to_register">Registrate</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> BarberShopQuib</h1>
                  <p>©2018 TODOS LOS DEREECHOS SON RESERVADOS.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Crear una cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nombre de usuario" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" href="index.html">Registrar</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya estas registrado?
                  <a href="#signin" class="to_register">Inicia sesión</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>BarberShopQuib</h1>
                  <p>©2018 TODOS LOS DERECHOS SON RESERVADOS.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>


<?php
   include('../db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
         
       
       
      
      $sql = "SELECT * FROM `login` WHERE `username` = '$myusername' AND `password` = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $_SESSION['privilegio'] = $row['privilegio'];
       $_SESSION['tipoUsu'] = $row['tipoUsuario'];
    
      $count = mysqli_num_rows($result);
        $_SESSION['username'] = $myusername;
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($_SESSION['privilegio'] == 0 ) {
         
    
         header("location: index.php");
      }
       else if($_SESSION['privilegio'] == 1) {
           
         
         header("location: index.php");
      }
      else if($_SESSION['privilegio'] == 2) {
         

         header("location:index.php");
      }
       
       else {
         echo '<script>alert("Tu Nombre de usuario o contraseña son invalidos") </script>' ;
      }
   }
?>
