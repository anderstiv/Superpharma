<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT LABORATORIO.id_labotario,lab_nombre
	        From laboratorio
			Order by id_labotario";
	$result=mysqli_query($link,$query) or die("Error en la consulta de laboratorio. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID</td>
			<td>NOMBRE DEL LABORATORIO</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_labotario']."</td>".
					 "<td>".$Rs['lab_nombre']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_labotario'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_labotario'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay laboratorios registrados para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>