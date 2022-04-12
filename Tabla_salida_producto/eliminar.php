<?php
include("..\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM SALIDA_PRODUCTO WHERE id_salida = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de salida. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualiza.php">
				<table width=400 border=1>
				<tr>
				<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
				</td>
				</tr>
				
				<tr>
					<td width=50%>ID</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11 readonly="readonly" value= "<?php echo $Rs['id_salida'];?>"/>
					</td>
				</tr>
				
				
				<tr>
					<td>FECHA DE SALIDA</td>
					<td>
						<input name="txtfechasal" type="date" id="txtfechasal" size=25 readonly="readonly" value= "<?php echo $Rs['sal_fecha_salida'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CANTIDAD</td>
					<td>
						<input name="txtsalcantidad" type="number" id="txtsalcantidad" size=11 readonly="readonly" value= "<?php echo $Rs['sal_cantidad'];?>"/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE SALIDA</td>
					<td>
						<input name="txtpreciosal" type="number" id="txtpreciosal" size=11 readonly="readonly" value= "<?php echo $Rs['sal_precio_salida'];?>"/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE VENTA</td>
					<td>
						<input name="txtprecioventa" type="number" id="txtprecioventa" size=10 readonly="readonly" value= "<?php echo $Rs['sal_precio_venta'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA DE VENTA</td>
					<td>
						<input name="txtfechaven" type="date" id="txtfechaven" size=10 readonly="readonly" value= "<?php echo $Rs['sal_fecha_venta'];?>"/>
					</td>
				</tr>		
							
			<tr>
				  <td>
					<center>
						<input type="submit" name="Submit" value="Enviar" />
					</center>
				  </td>
				  <td>
					<center>
						<input type="reset" name="Submit2" value="Restablecer" />
					</center>
				  </td>
				</tr>
			
				</table>
					
				<input type="hidden" name="Accion" value="Delete" />
				
			</form>
			</center>
			<?php
		}
	}
	mysqli_close($link);
?>