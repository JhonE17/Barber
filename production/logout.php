<?php session_start();
require 'admin/config.php';

session_destroy();

header('Location: '.RUTA.'../index.php');
?>