<?php


include ('../db.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `servicios` WHERE id_servicio ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Servicio Eliminado!") </script>';
							
						
				}
			header("Location: servicios.php");
		
?>


