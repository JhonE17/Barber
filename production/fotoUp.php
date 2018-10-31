<?php

// require_once("../db.php");

$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$ruta = $_SERVER['DOCUMENT_ROOT'].'/BarberGit/Barber/images/';

$resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta . $nombre);

?>