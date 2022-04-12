<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT movimiento_producto.id_movimiento,mov_existencia,mov_precio_venta,mov_saldo,mov_precio_compra
	        From movimiento_producto
			Order by id_movimiento";
	$result=mysqli_query($link,$query) or die("Error en la consulta de producto. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID</td>
			<td>EXISTENCIA</td>
			<td>PRECIO DE VENTA</td>
			<td>SALDO</td>
			<td>PRECIO COMPRA<td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_movimiento']."</td>".					 
					 "<td>".$Rs['mov_existencia']."</td>".				
					 "<td>".$Rs['mov_precio_venta']."</td>".
					 "<td>".$Rs['mov_saldo']."</td>".
					 "<td>".$Rs['mov_precio_compra']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_movimiento'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_movimiento'].">Eliminar</a></td>".
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