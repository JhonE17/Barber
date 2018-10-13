<?php


include ('db.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `personal` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Usuario Eliminado!") </script>';
							
						
				}
			header("Location: addpersonal2.php");
		
?>


