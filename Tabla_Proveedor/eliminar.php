<?php
include(".\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM PROVEEDOR WHERE id_proveedor = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de proveedor. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualizaprv.php">
				<table width=400 border=1>
				<tr>
				<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
				</td>
				</tr>
				
				<tr>
					<td width=50%>CODIGO DEL PROVEEDOR</td>
					<td>
						<input name="txtprovid" type="number" id="txtprovid" size=11 readonly="readonly" value= "<?php echo $Rs['id_proveedor'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE</td>
					<td>
						<input name="txtprovnom" type="text" id="txtprovnom" size=45 readonly="readonly" value= "<?php echo $Rs['prov_nombre'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>IDENTIFICACION DEL PROVEEDOR</td>
					<td>
						<input name="txtproviden" type="number" id="txtproviden" size=25 readonly="readonly" value= "<?php echo $Rs['prov_identificacion'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>TELEFONO DEL PROVEEDOR</td>
					<td>
						<input name="txtprovtel" type="number" id="txtprovtel" size=11 readonly="readonly" value= "<?php echo $Rs['prov_telefono'];?>"/>
					</td>
				</tr>

				<tr>
					<td>DIRECCION DEL PROVEEDOR</td>
					<td>
						<input name="txtprovdir" type="text" id="txtprovdir" size=11 readonly="readonly" value= "<?php echo $Rs['prov_direccion'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CORREO DEL PROVEEDOR</td>
					<td>
						<input name="txtprovcor" type="text" id="txtprovcor" size=11 readonly="readonly" value= "<?php echo $Rs['prov_correo'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL CONTACTO </td>
					<td>
						<input name="txtprovpercon" type="text" id="txtprovpercon" size=10 readonly="readonly" value= "<?php echo $Rs['prov_nombre_pcontacto'];?>"/>
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