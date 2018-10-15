<?php session_start();
require 'admin/config.php';
require 'funtions.php';

session_destroy();

header('Location'.RUTA.'../index.php');
?>