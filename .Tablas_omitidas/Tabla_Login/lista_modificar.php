<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT LOGIN.id_login,ing_usuario,ing_clave
	        From LOGIN
			Order by id_login";
	$result=mysqli_query($link,$query) or die("Error en la consulta de login. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID</td>
			<td>USUARIO</td>
			<td>CONTRASEÑA</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_login']."</td>".
					 "<td>".$Rs['ing_usuario']."</td>".
					 "<td>".$Rs['ing_clave']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_login'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_login'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay login registrado para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>