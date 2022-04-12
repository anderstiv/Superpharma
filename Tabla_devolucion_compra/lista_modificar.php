<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT devolucion_compra.id_devolucion_compra,dev_motivo
	        From devolucion_compra
			Order by id_devolucion_compra";
	$result=mysqli_query($link,$query) or die("Error en la consulta de devolucion. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID</td>
			<td>MOTIVO DE LA DEVOLUCION</td>
			</tr>
			
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_devolucion_compra']."</td>".
					 "<td>".$Rs['dev_motivo']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_devolucion_compra'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_devolucion_compra'].">Eliminar</a></td>".
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