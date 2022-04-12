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
			$query="UPDATE recibo_pago
					SET rec_valor_total_recibo = '".$_POST['txtrecvaltol']."',
						rec_subtotal = '".$_POST['txtrecsub']."',
						rec_fecha_emision = '".$_POST['txtfecemi']."',
						rec_cantidad_producto = '".$_POST['txtreccanpro']."',
						rec_descuento = '".$_POST['txtrecdes']."',
						rec_forma_pago = '".$_POST['txtrecforpag']."'
						WHERE id_recibo = '".$_POST['txtrecid']."'";
				
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../indexREC.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM RECIBO_PAGO
					WHERE id_recibo = '".$_POST['txtrecid']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../indexREC.html';
					</script>";
		}
	}
?>