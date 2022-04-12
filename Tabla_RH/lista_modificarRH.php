<html>
<center>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>RH</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT RH.id_rh,RH_descripcion
	        From RH
			Order by id_rh";
	$result=mysqli_query($link,$query) or die("Error en la consulta de RH. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID</td>
			<td>RH Descripcion</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_rh']."</td>".
					 "<td>".$Rs['RH_descripcion']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_rh'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_rh'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay RH registrado para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>