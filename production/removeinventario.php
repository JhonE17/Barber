<?php


include ('../db.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `inventario` WHERE id_inventario ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Elemento Eliminado!") </script>';
							
						
				}
			header("Location: inventario.php");
		
?>


