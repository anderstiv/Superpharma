<?php
include(".\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM MOVIMIENTO_PRODUCTO WHERE id_movimiento = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de movimiento de productos. Error: ".mysqli_error());
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
					<td width=50%>ID DEL MOVIMIENTO PRODUCTO</td>
					<td>
						<input name="txtmovid" type="number" id="txtmovid" size=11 readonly="readonly" value= "<?php echo $Rs['id_movimiento'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>EXISTENCIA</td>
					<td>
						<input name="txtmovexi" type="number" id="txtmovexi" size=11 readonly="readonly" value= "<?php echo $Rs['mov_existencia'];?>"/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE VENTA</td>
					<td>
						<input name="txtmovprevent" type="number" id="txtmovprevent" size=10 readonly="readonly" value= "<?php echo $Rs['mov_precio_venta'];?>"/>
					</td>
				</tr>
				<tr>
					<td>SALDO</td>
					<td>
						<input name="txtmovsal" type="number" id="txtmovsal" size=10 readonly="readonly" value= "<?php echo $Rs['mov_saldo'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>PRECIO COMPRA</td>
					<td>
						<input name="txtmovprecom" type="number" id="txtmovprecom" size=11 readonly="readonly" value= "<?php echo $Rs['mov_precio_compra'];?>"/>
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