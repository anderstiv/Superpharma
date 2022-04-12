<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT linea_producto.id_linea,lin_descripcion
	        From linea_producto
			Order by id_linea";
	$result=mysqli_query($link,$query) or die("Error en la consulta de linea producto. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<td>ID LINEA</td>
			<td>DESCRIPCION</td>
			</tr>

			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_linea']."</td>".
					 "<td>".$Rs['lin_descripcion']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_linea'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_linea'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay linea de productos para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>