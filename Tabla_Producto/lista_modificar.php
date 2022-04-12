<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

	<?php
	Include(".\conexion.php");
	$query="SELECT producto.id_producto,pro_nombre.pro_iva,pro_ubicacion,cantidad
	        From producto
			Order by 1";
	$result=mysqli_query($link,$query) or die("Error en la consulta de productos. Error: ".mysql_error());
		if(mysqli_num_rows($result)>0)
		{
			?>
			<table border=1>
				<tbody>
				<tr>
					<td>ID</td>
					<td>NOMBRE</td>
					<td>IVA</td>
					<td>UBICACION</td>
					<td>CANTIDAD</td>
				</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_producto']."</td>".
					 "<td>".$Rs['pro_nombre']."</td>".
					 "<td>".$Rs['pro_iva']."</td>".
					 "<td>".$Rs['pro_ubicacion']."</td>".
					 "<td>".$Rs['cantidad']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_producto'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_producto'].">Eliminar</a></td>".
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