<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT estado.id_estado,est_descripcion
	        From estado
			Order by id_estado";
	$result=mysqli_query($link,$query) or die("Error en la consulta de estado. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
				<tr>
				<td>ID</td>
				<td>DESCRIPCION</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_estado']."</td>".
					 "<td>".$Rs['est_descripcion']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_estado'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_estado'].">Eliminar</a></td>".
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