<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	   
	include(".\conexion.php");
	$accion=$_POST["Accion"];
 	// $Codigop=$_GET['codigo'];
	if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			$query="UPDATE CLIENTE
					SET cli_tipo_documento = '".$_POST['txtclidocumento']."',
						cli_nombre = '".$_POST['txtclinombre']."',
						cli_telefono = '".$_POST['txtclitel']."',
						cli_direccion = '".$_POST['txtclidireccion']."',
						cli_correo = '".$_POST['txtclicorreo']."',
						cli_fecha_nacimiento = '".$_POST['txtclifechanac']."'
						WHERE id_cliente = '".$_POST['txtcliid']."'";
				
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../indexCLI.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM CLIENTE
					WHERE id_cliente = '".$_POST['txtcliid']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../indexCLI.html';
					</script>";
		}
	}
?>