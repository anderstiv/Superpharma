<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include("./conexion.php");
	$query="SELECT EMPLEADO.id_empleado,emp_nombre,emp_fecha_entrada,emp_tipo_documento,emp_telefono,emp_cargo,emp_arl,emp_correo,emp_contacto_emergencia
				FROM EMPLEADO	
			Order by id_empleado";
	$result=mysqli_query($link,$query) or die("Error en la consulta de empleados. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
				<td>ID</td>
				<td>NOMBRE</td>
				<td>FECHA ENTRADA</td>
				<td>TIPO DOCUMENTO</td>
				<td>TELEFONO</td>			
				<td>CARGO</td>				
				<td>ARL</td>
				<td>CORREO</td>				
				<td>CONTACTO DE EMERGENCIA</td>
			</tr>
			
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_empleado']."</td>".
					 "<td>".$Rs['emp_nombre']."</td>".
					 "<td>".$Rs['emp_fecha_entrada']."</td>".
					 "<td>".$Rs['emp_tipo_documento']."</td>".
					 "<td>".$Rs['emp_telefono']."</td>".					
					 "<td>".$Rs['emp_cargo']."</td>".					
					 "<td>".$Rs['emp_arl']."</td>".
					 "<td>".$Rs['emp_correo']."</td>".					
					 "<td>".$Rs['emp_contacto_emergencia']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_empleado'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_empleado'].">Eliminar</a></td>".
					 "</tr>";
			}
	}
	else
	{
		echo"No hay empleados registrados ";
	}
	mysqli_close($link);
	?>
	</table>
</center>	
</html>