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
			$query="UPDATE INGRESO_PRODUCTO
					SET ing_cantidad_producto = '".$_POST['txtcantproducto']."',
						ing_fecha_vencimiento = '".$_POST['txtingfechaven']."',
						ing_precio_entrada = '".$_POST['txtprecioentrada']."',
						ing_codigo_entrada = '".$_POST['txtcodentrada']."',
						ing_fecha_compra = '".$_POST['txtfechacom']."'
						WHERE id_ingresoprod = '".$_POST['txtid']."'";
				
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../indexINGPRO.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM INGRESO_PRODUCTO
					WHERE id_ingresoprod = '".$_POST['txtid']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../indexINGPRO.html';
					</script>";
		}
	}
?>