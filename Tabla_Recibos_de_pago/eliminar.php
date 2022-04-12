<?php
include("..\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM RECIBO_PAGO WHERE id_recibo = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de recibos. Error: ".mysqli_error());
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
					<td width=50%>ID DEL RECIBO</td>
					<td>
						<input name="txtrecid" type="number" id="txtrecid" size=11 readonly="readonly" value= "<?php echo $Rs['id_recibo'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>VALOR TOTAL</td>
					<td>
						<input name="txtrecvaltol" type="number" id="txtrecvaltol" size=25 readonly="readonly" value= "<?php echo $Rs['rec_valor_total_recibo'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>SUBTOTAL</td>
					<td>
						<input name="txtrecsub" type="number" id="txtrecsub" size=11 readonly="readonly" value= "<?php echo $Rs['rec_subtotal'];?>"/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE EMISION</td>
					<td>
						<input name="txtrecfecemi" type="date" id="txtrecfecemi" size=11 readonly="readonly" value= "<?php echo $Rs['rec_fecha_emision'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CANTIDAD DE PRODUCTOS</td>
					<td>
						<input name="txtreccanpro" type="number" id="txtreccanpro" size=10 readonly="readonly" value= "<?php echo $Rs['rec_cantidad_producto'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>DESCUENTO</td>
					<td>
						<input name="txtrecdes" type="number" id="txtrecdes" size=10 readonly="readonly" value= "<?php echo $Rs['rec_descuento'];?>"/>
					</td>
				</tr>

				<tr>
					<td>FORMA DE PAGO</td>
					<td>
						<input name="txtrecforpag" type="text" id="txtrecforpag" size=10 readonly="readonly" value= "<?php echo $Rs['rec_forma_pago'];?>"/>
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