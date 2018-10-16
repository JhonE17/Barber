 <?php
function conexion($bd_config){

     try{ 
         $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['pass']);
         return $conexion;
         }catch (PDOException $e){
        return false;
     }
    }

function limpiarDatos($datos){
    $datos = htmlspecialchars($datos);
    $datos = trim($datos);
    $datos = filter_var($datos, FILTER_SANITIZE_STRING);

   return $datos; 
}

function iniciarSesion($table, $conexion, $username, $password){
    $statement = $conexion->prepare("SELECT * FROM $table WHERE username = :username AND password = :password");
    $statement->execute([
        ':usuario' => $username,
        ':password' => $password
      ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

?>