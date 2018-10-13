<?php


include ('../db.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `login` WHERE id_login ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Usuario Eliminado!") </script>';
							
						
				}
			header("Location: usuarios.php");
		
?>


