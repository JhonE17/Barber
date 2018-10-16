           <?php session_start(); 
              require 'admin/config.php';
              require 'funtions.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
              $username = limpiarDatos($_POST['username']);
              $password = limpiarDatos($_POST['password']);
              $password = hash('sha512', $password);
              $email = limpiarDatos($_POST['email']);

              $err = '';
              // Validacion de campos de texto 
              if (empty($username) || empty($password || empty($email))) {
                $err .= '<li class="error">Por favor llenar todos los campos</li>';
              }else {
                //validacion si el usuario existe
                $conexion = conexion($bd_config);
                $statement = $conexion->prepare('SELECT * FROM login WHERE username = :username AND password = :password');
                $statement->execute([
                  ':username' => $username,
                  ':password' => $password
                ]);
                $rs = $statement->fetch();

                if ($rs != false) {
                  $err .= '<li class="error"> Este usuario ya existe</li>';
                }
              }

            if ($err == '') {
              $conexion = conexion($bd_config);
              $statement = $conexion->prepare('INSERT INTO login (id_login, username, password, email, privilegio, tipoUsuario) VALUES (null, :username, :password, :email, 3, "Usuario")');
              $statement->execute([
                ':username' => $username,
                ':password' => $password,
                ':email' => $email
              ]);

              header('Location: '.RUTA.'login.php');
            }
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

           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
              <h1>Crear una cuenta</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Nombre de usuario"  />
              </div>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Correo electronico" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Contraseña"  />
              </div>
              <div>
                <?php if (!empty($err)) : ?>
                <ul>
                  <?php echo $err; ?>
                </ul>
                 <?php endif; ?>
                <button type="submit" name="submit" class="btn btn-success" href="registro.php">Registrar</button>
              </div>

                </form>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya estas registrado?
                  <a href="login.php" class="to_register">Inicia sesión</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> BarberShopQuib</h1>
                  <p>©2018 TODOS LOS DERECHOS SON RESERVADOS.</p>
                </div>
              </div>

           
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <!-- <form>
              <h1>Inicio de sesión</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nombre de usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Ingresar</a>
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
            </form> -->
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
