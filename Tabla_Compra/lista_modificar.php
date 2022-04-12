<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT compra.id_compra,com_fecha_expedicion,com_fecha_vencimiento,com_cantidad_pro,com_referencia_pro,com_unitario_pro,com_valor_total_pro
	        From compra
			Order by id_compra";
	$result=mysqli_query($link,$query) or die("Error en la consulta de compra. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<td>ID COMPRA</td>
			<td>FECHA EXPEDICION</td>
			<td>FECHA VENCIMIENTO</td>
			<td>CANTIDAD</td>
			<td>REFERENCIA</td>
			<td>UNITARIO</td>
			<td>VALOR TOTAL</td>
			</tr>

			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['id_compra']."</td>".
					 "<td>".$Rs['com_fecha_expedicion']."</td>".
					 "<td>".$Rs['com_fecha_vencimiento']."</td>".
					 "<td>".$Rs['com_cantidad_pro']."</td>".
					 "<td>".$Rs['com_referencia_pro']."</td>".
					 "<td>".$Rs['com_unitario_pro']."</td>".
					 "<td>".$Rs['com_valor_total_pro']."</td>".
					 "<td><a href=modificar.php?Codigo=".$Rs['id_compra'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_compra'].">Eliminar</a></td>".
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