<?php 

require 'admin/config.php';
require 'funtions.php';

//Comprobar sesion
if (!isset($_SESSION['username'])){
    header('Location: '.RUTA.'login.php');
}

//validar los datos de la BD
$conexion = conexion($bd_config);
$username = iniciarSesion('login', $conexion);

if ($username['username'] == 'JhonE'){
    header('Location: '.RUTA.'index.php');
}

?>