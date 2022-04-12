<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include("..\conexion.php");
	$query="Select *
	        From productos
	Order by codigo";
	$result=mysqli_query($link,$query) or die("Error en la consulta de productos. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
				<td>CODIGO</td>
				<td>NOMBRE</td>
				<td>CANTIDAD</td>
				<td>VALOR</td>
				<td>UNIDAD</td>	
				<td>ACCION A REALIZAR</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['codigo']."</td>".
					 "<td>".$Rs['nombre']."</td>".
					 "<td>".$Rs['cantidad']."</td>".
					 "<td>".$Rs['valor']."</td>".
					 "<td>".$Rs['unidad']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['codigo'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['codigo'].">Eliminar</a></td>".
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