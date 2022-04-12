<html>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include(".\conexion.php");
	$query="SELECT RECIBO_PAGO.id_recibo,rec_valor_total_recibo,rec_subtotal,rec_fecha_emision,rec_cantidad_producto,rec_descuento,rec_forma_pago
	        From RECIBO_PAGO
			Order by id_recibo";
	$result=mysqli_query($link,$query) or die("Error en la consulta de recibos. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table border=1>
			<tbody>
			<tr>
			<td>ID RECIBO</td>
			<td>VALOR TOTAL</td>
			<td>SUBTOTAL</td>
			<td>FECHA DE EMISION</td>
			<td>CANTIDAD DEL PRODUCTO</td>
			<td>DESCUENTO</td>
			<td>FORMA DE PAGO</td>
			</tr>

			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
					 "<td>".$Rs['txtrecid']."</td>".
					 "<td>".$Rs['txtrecvaltol']."</td>".
					 "<td>".$Rs['txtrecsub']."</td>".
					 "<td>".$Rs['txtrecfecemi']."</td>".
					 "<td>".$Rs['txtreccanpro']."</td>".
					 "<td>".$Rs['txtrecdes']."</td>".
					 "<td>".$Rs['txtrecforpag']."</td>".					 
					 "<td><a href=modificar.php?Codigo=".$Rs['id_recibo'].">Actualizar/</a>
					 <a href=eliminar.php?Codigo=".$Rs['id_recibo'].">Eliminar</a></td>".
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