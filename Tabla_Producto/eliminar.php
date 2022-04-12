<?php
include(".\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM PRODUCTO WHERE id_producto = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
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
					<td width=50%>CODIGO DEL PRODUCTO</td>
					<td>
						<input name="txtcodproducto" type="number" id="txtcodproducto" size=11 readonly="readonly" value= "<?php echo $Rs['id_producto'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL PRODUCTO</td>
					<td>
						<input name="txtnomproducto" type="text" id="txtnomproducto" size=45 readonly="readonly" value= "<?php echo $Rs['pro_nombre'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>IVA</td>
					<td>
						<input name="txtiva" type="text" id="txtiva" size=25 readonly="readonly" value= "<?php echo $Rs['pro_iva'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>UBICACION</td>
					<td>
						<input name="txtubicacion" type="text" id="txtubicacion" size=10 readonly="readonly" value= "<?php echo $Rs['pro_ubicacion'];?>"/>
					</td>
				</tr>	
				
				<tr>
					<td>CANTIDAD</td>
					<td>
						<input name="txtcantidad" type="number" id="txtcantidad" size=10 readonly="readonly" value= "<?php echo $Rs['cantidad'];?>"/>
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