<?php
include("..\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM cliente WHERE id_cliente = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de cliente. Error: ".mysqli_error());
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
						<input name="txtcliid" type="number" id="txtcliid" size=11 readonly="readonly" value= "<?php echo $Rs['id_cliente'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>TIPO DE DOCUMENTO</td>
					<td>
						<input name="txtclidocumento" type="text" id="txtclidocumento" size=45 readonly="readonly" value= "<?php echo $Rs['cli_tipo_documento'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE</td>
					<td>
						<input name="txtclinombre" type="text" id="txtclinombre" size=25 readonly="readonly" value= "<?php echo $Rs['cli_nombre'];?>"/>
					</td>
				</tr>

				<tr>
					<td>TELEFONO</td>
					<td>
						<input name="txtclitel" type="number" id="txtclitel" size=11 readonly="readonly" value= "<?php echo $Rs['cli_telefono'];?>"/>
					</td>
				</tr>

				<tr>
					<td>DIRECCION</td>
					<td>
						<input name="txtclidireccion" type="text" id="txtclidireccion" size=11 readonly="readonly" value= "<?php echo $Rs['cli_direccion'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CORREO</td>
					<td>
						<input name="txtclicorreo" type="text" id="txtclicorreo" size=10 readonly="readonly" value= "<?php echo $Rs['cli_correo'];?>"/>
					</td>
				</tr>
						
				<tr>
					<td>FECHA DE NACIMIENTO</td>
					<td>
						<input name="txtclifechanac" type="date" id="txtclifechanac" size=10 readonly="readonly" value= "<?php echo $Rs['cli_fecha_nacimiento'];?>"/>
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