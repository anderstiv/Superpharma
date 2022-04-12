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
			$query="UPDATE movimiento_producto
					SET mov_existencia = '".$_POST['txtmovexi']."',
						mov_precio_venta = '".$_POST['txtmovpreven']."',
						mov_saldo = '".$_POST['txtmovsal']."',
						mov_precio_compra = '".$_POST['txtmovprecom']."'
						WHERE id_movimiento = '".$_POST['txtmovid']."'";
				
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../indexMOV.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM movimiento_producto
					WHERE id_movimiento = '".$_POST['txtmovid']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../indexMOV.html';
					</script>";
		}
	}
?>