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
			$query="UPDATE SALIDA_PRODUCTO
					SET sal_fecha_salida = '".$_POST['txtfechasal']."',
						sal_cantidad = '".$_POST['txtsalcantidad']."',
						sal_precio_salida = '".$_POST['txtpreciosal']."',
						sal_precio_venta = '".$_POST['txtprecioventa']."',
						sal_fecha_venta = '".$_POST['txtfechaven']."'
						WHERE id_salida = '".$_POST['txtid']."'";
				
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../indexSALPRO.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM SALIDA_PRODUCTO
					WHERE id_salida = '".$_POST['txtid']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../indexSALPRO.html';
					</script>";
		}
	}
?>