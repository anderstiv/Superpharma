<?php
include(".\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM EMPLEADO WHERE id_empleado = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de empleados. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualizaemp.php">
				<table width=400 border=1>
				<tr>
				<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
				</td>
				</tr>
				
				<tr>
					<td width=50%>ID DEL EMPLEADO</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11 readonly="readonly" value= "<?php echo $Rs['id_empleado'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL EMPLEADO</td>
					<td>
						<input name="txtnombre" type="text" id="txtnombre" size=45 readonly="readonly" value= "<?php echo $Rs['emp_nombre'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA ENTRADA</td>
					<td>
						<input name="txtfechaentrada" type="date" id="txtfechaentrada" size=25 readonly="readonly" value= "<?php echo $Rs['emp_fecha_entrada'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>TIPO DOCUMENTO</td>
					<td>
						<input name="txttipodocumento" type="text" id="txttipodocumento" size=11 readonly="readonly" value= "<?php echo $Rs['emp_tipo_documento'];?>"/>
					</td>
				</tr>

				<tr>
					<td>TELEFONO</td>
					<td>
						<input name="txttelefono" type="number" id="txttelefono" size=11 readonly="readonly" value= "<?php echo $Rs['emp_telefono'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CARGO</td>
					<td>
						<input name="txtcargo" type="text" id="txtcargo" size=10 readonly="readonly" value= "<?php echo $Rs['emp_cargo'];?>"/>
					</td>
				</tr>	
							
				<tr>
					<td>ARL</td>
					<td>
						<input name="txtarl" type="text" id="txtarl" size=10 readonly="readonly" value= "<?php echo $Rs['emp_arl'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CORREO</td>
					<td>
						<input name="txtcorreo" type="text" id="txtcorreo" size=10 readonly="readonly" value= "<?php echo $Rs['emp_correo'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CONTACTO EMERGENCIA</td>
					<td>
						<input name="txtcontactoemergencia" type="number" id="txtcontactoemergencia" size=10 readonly="readonly" value= "<?php echo $Rs['emp_contacto_emergencia'];?>"/>
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