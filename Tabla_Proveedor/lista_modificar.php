<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include("./conexion.php");
	$query="SELECT proveedor.id_proveedor,prov_nombre,prov_identificacion,prov_telefono,prov_direccion,prov_correo,prov_nombre_pcontacto
	        From PROVEEDOR
			Order by id_proveedor";
	$result=mysqli_query($link,$query) or die("Error en la consulta de proveedor. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
		<tr>
			<td>ID</td>
			<td>NOMBRE</td>
			<td>IDENTIFICACION</td>
			<td>TELEFONO</td>
			<td>DIRECCION</td>
			<td>CORREO</td>
			<td>PERSONA DE CONTACTO</td>
		</tr>
			
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_proveedor']."</td>".
					 "<td>".$Rs['prov_nombre']."</td>".
					 "<td>".$Rs['prov_identificacion']."</td>".
					 "<td>".$Rs['prov_telefono']."</td>".
					 "<td>".$Rs['prov_direccion']."</td>".
					 "<td>".$Rs['prov_correo']."</td>".
					 "<td>".$Rs['prov_nombre_pcontacto']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_proveedor'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_proveedor'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay provedores registrados para listar";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>