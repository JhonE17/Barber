<?php session_start();
  
  require 'admin/config.php';
  require 'funtions.php';

  if (isset($_SESSION['username'])) {
  header('Location: '.RUTA.'index.php');
  }
  $err = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    $password = substr($password, 0, 30);
    $conexion = conexion($bd_config);

if (empty($username) || empty($password)) {
  $err .= '<li>Por favor llena los datos</li>';
}else {
  
  $statement = $conexion->prepare('SELECT * FROM login WHERE username = :username AND password = :password');
  $statement->execute([
      ':username' => $username,
      ':password' => $password
    ]);
  $rs = $statement->fetch(PDO::FETCH_ASSOC);

  if ($rs !== false) {
    $_SESSION['username'] = $username;
    header('Location: '.RUTA.'index.php');
  }else {
    $err .= '<li>Usuario y/o datos incorrectos</li>';
  }  
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
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            
            <h1>Inicio de sesión</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Contraseña"/>
              </div>
                <ul>
                     <?php if (!empty($err)): ?>
                        <?php echo $err ?>
                      <?php endif; ?>
                </ul>
              <button type="submit" name="submit" class="btn btn-success">Ingresar</button>
             

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Eres nuevo?
                  <a href="<?php echo RUTA.'registro.php'?>" class="to_register">Registrate</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                
                  <h1><img src="images/logo2.png" alt=""></i> BarberShopQuib</h1>
                  <p>©2018 TODOS LOS DEREECHOS SON RESERVADOS.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

     
      </div>
    </div>
  </body>
</html>
