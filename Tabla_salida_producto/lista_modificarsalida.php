<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT SALIDA_PRODUCTO.id_salida,sal_fecha_salida,sal_cantidad,sal_precio_salida,sal_precio_venta,sal_fecha_venta
	        From SALIDA_PRODUCTO
			Order by id_salida";
	$result=mysqli_query($link,$query) or die("Error en la consulta de salida de producto. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID</td>
			<td>FECHA DE SALIDA</td>
			<td>CANTIDAD</td>
			<td>PRECIO DE SALIDA</td>
			<td>PRECIO DE VENTA</td>
			<td>FECHA VENTA</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_salida']."</td>".
					 "<td>".$Rs['sal_fecha_salida']."</td>".
					 "<td>".$Rs['sal_cantidad']."</td>".
					 "<td>".$Rs['sal_precio_salida']."</td>".
					 "<td>".$Rs['sal_precio_venta']."</td>".
					 "<td>".$Rs['sal_fecha_venta']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_salida'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_salida'].">Eliminar</a></td>".
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