<?php session_start();

require 'admin/config.php';
require 'funtions.php';

//Comprobar sesion
    if (!isset($_SESSION['username'])){

        header('Location: '.RUTA.'login.php');
    }
?>