<?php


include ('../db.php');

			
			$id_personal = $_GET['eid'];	
            $estado='Inactivo';
			$newsql ="UPDATE `personal` SET `estado`= '$estado' WHERE id = $id_personal";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Usuario Despedido!") </script>';
							
						
				}
			header("Location: personal.php");
		
?>


