<?php


include ('db.php');

			
			$id =$_GET['eid'];	
            $estado='Inactivo';
			$newsql ="UPDATE `personal` SET `estado`= '$estado' WHERE id =$id";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Usuario Despedido!") </script>';
							
						
				}
			header("Location: addpersonal2.php");
		
?>


