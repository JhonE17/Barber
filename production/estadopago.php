<?php


include ('../db.php');

			
			$id =$_GET['eid'];
			$estado =$_POST['conf'];	
			//echo $estado;
			$newsql ="UPDATE `ereservas` SET `estado_pago`= '$estado' WHERE id_ereservas = $id";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Reserva '.$estado.'!") </script>';
							
						
				}
			header("Location: pagosReserva.php?rid=".$id."");
		
?>

