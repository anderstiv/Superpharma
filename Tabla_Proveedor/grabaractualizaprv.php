<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	   
	include(".\conexion.php");
	$accion=$_POST["Accion"];
 //   $Codigop=$_GET['codigo'];
	if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			$query="UPDATE PROVEEDOR
					SET prov_nombre = '".$_POST['txtprovnom']."',
						prov_identificacion = '".$_POST['txtproviden']."',
						prov_telefono = '".$_POST['txtprovtel']."',
						prov_direccion = '".$_POST['txtprovdir']."',
						prov_correo = '".$_POST['txtprovcor']."',
						prov_nombre_pcontacto = '".$_POST['txtprovpercon']."'
						WHERE id_proveedor = '".$_POST['txtprovid']."'";
				
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../indexPROV.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM PROVEEDOR
					WHERE id_proveedor = '".$_POST['txtprovid']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../indexPROV.html';
					</script>";
		}
	}
?>