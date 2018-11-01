<?php
require 'admin/config.php';
require '../db.php';
// require_once("../db.php");

$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$tamaño_imagen = $_FILES['imagen']['size'];
$tipo_imagen = $_FILES['imagen']['type'];

if ($tamaño_imagen<=6000000) {

    if ($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png"  || $tipo_imagen=="image/gif") {
    

$ruta = $_SERVER['DOCUMENT_ROOT'].'/Barber2.0/images/';

move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta . $nombre);
    }else {
        echo "Solo se pueden subir imagens jpg/jpeg/png/gif";
    }


} else {
    echo "El tamaño es muy grade";
}

$sql="UPDATE login SET foto='$nombre' WHERE id_login = '12'";
$rs = mysqli_query($con,$sql);

header('Location: '.RUTA.'./profile.php');

?>