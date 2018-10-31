<?php

require_once("../db.php");

$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "./images/" . $_FILES['imagen']['name'];
$destino = "./images/".$nombrer;

$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

if (!empty($resultado)){

                @mysqli_query($con,"INSERT INTO login VALUES ('". $nombre."','" . $destino . "')"); 
                echo "el archivo ha sido movido exitosamente";

                }else{

                    echo "Error al subir el archivo";

                    }
?>