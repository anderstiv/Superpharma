<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT presentacion.id_presentacion,pre_nombre
	        From presentacion
			Order by id_presentacion";
	$result=mysqli_query($link,$query) or die("Error en la consulta de presentacion. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
				<td>ID PRESENTACION</td>
				<td>NOMBRE PRESENTACION</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_presentacion']."</td>".
					 "<td>".$Rs['pre_nombre']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_presentacion'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_presentacion'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay presentaciones registradas para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>