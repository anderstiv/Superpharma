<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT CLIENTE.id_cliente,cli_tipo_documento,cli_nombre,cli_telefono,cli_direccion,cli_correo,cli_fecha_nacimiento
	        From CLIENTE
			Order by id_cliente";
	$result=mysqli_query($link,$query) or die("Error en la consulta de producto. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
				<td>ID</td>
				<td>TIPO DE DOCUMENTO</td>
				<td>NOMBRE</td>
				<td>TELEFONO</td>
				<td>DIRECCION</td>
				<td>CORREO</td>
				<td>FECHA DE NACIMIENTO</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_cliente']."</td>".
					 "<td>".$Rs['cli_tipo_documento']."</td>".
					 "<td>".$Rs['cli_nombre']."</td>".
					 "<td>".$Rs['cli_telefono']."</td>".
					 "<td>".$Rs['cli_direccion']."</td>".
					 "<td>".$Rs['cli_correo']."</td>".
					 "<td>".$Rs['cli_fecha_nacimiento']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_cliente'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_cliente'].">Eliminar</a></td>".
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