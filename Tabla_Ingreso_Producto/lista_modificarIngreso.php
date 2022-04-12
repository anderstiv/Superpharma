<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT INGRESO_PRODUCTO.id_ingresoprod,ing_cantidad_producto,ing_fecha_vencimiento,ing_precio_entrada,ing_codigo_entrada,ing_fecha_compra
	        From INGRESO_PRODUCTO
			Order by id_ingresoprod";
	$result=mysqli_query($link,$query) or die("Error en la consulta de ingreso de producto. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID</td>
			<td>CANTIDAD DEL PRODUCTO</td>
			<td>FECHA DE VENCIMIENTO</td>
			<td>PRECIO DE ENTRADA</td>
			<td>CODIGO ENTRADA</td>
			<td>FECHA COMPRA</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_ingresoprod']."</td>".
					 "<td>".$Rs['ing_cantidad_producto']."</td>".
					 "<td>".$Rs['ing_fecha_vencimiento']."</td>".
					 "<td>".$Rs['ing_precio_entrada']."</td>".
					 "<td>".$Rs['ing_codigo_entrada']."</td>".
					 "<td>".$Rs['ing_fecha_compra']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_ingresoprod'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_ingresoprod'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay productos registrados para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>