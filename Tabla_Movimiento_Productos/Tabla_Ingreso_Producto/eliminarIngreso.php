<?php
include("..\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM INGRESO_PRODUCTO WHERE id_ingresoprod = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de ingreso de productos. Error: ".mysqli_error());
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
						<input name="txtid" type="number" id="txtid" size=11 readonly="readonly" value= "<?php echo $Rs['id_ingresoprod'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CANTIDAD DEL PRODUCTO</td>
					<td>
						<input name="txtcantproducto" type="number" id="txtcantproducto" size=25 readonly="readonly" value= "<?php echo $Rs['ing_cantidad_producto'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA DE VENCIMIENTO</td>
					<td>
						<input name="txtingfechaven" type="number" id="txtingfechaven" size=11 readonly="readonly" value= "<?php echo $Rs['ing_fecha_vencimiento'];?>"/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE ENTRADA</td>
					<td>
						<input name="txtprecioentrada" type="number" id="txtprecioentrada" size=11 readonly="readonly" value= "<?php echo $Rs['ing_precio_entrada'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CODIGO ENTRADA</td>
					<td>
						<input name="txtcodentrada" type="number" id="txtcodentrada" size=11 readonly="readonly" value= "<?php echo $Rs['ing_codigo_entrada'];?>"/>
					</td>
				</tr>

				<tr>
					<td>FECHA COMPRA</td>
					<td>
						<input name="txtfechacom" type="date" id="txtfechacom" size=10 readonly="readonly" value= "<?php echo $Rs['ing_fecha_compra'];?>"/>
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