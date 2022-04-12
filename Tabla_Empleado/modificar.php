<script>
function validar(formulario)
{

  if (isNaN(formulario.txtid.value==''))
{
alert('Sr Usuario debe ingresar el codigo del empleado');
formulario.txtid.focus();
formulario.txtid.value='';
return false;
}

if(formulario.txtnombre.value=='')
{
alert("Sr usuario debe ingresar el nombre del empleado");
formulario.txtnombre.focus();
return false;
}

if(isNaN(formulario.txtfechaentrada.value==''))
{
alert('Sr Usuario debe ingresar la fecha de entrada');
formulario.txtfechaentrada.focus();
formulario.txtfechaentrada.value='';
return false;
}

if(formulario.txttipodocumento.value=='')
{
alert('Sr Usuario debe ingresar el tipo documento');
formulario.txttipodocumento.focus();
return false;
}

if(isNaN(formulario.txttelefono.value==''))
{
alert('Sr Usuario debe ingresar el telefono');
formulario.txttelefono.focus();
formulario.txttelefono.value='';
return false;
}

if(formulario.txtcargo.value=='')
{
alert('Sr Usuario debe ingresar el cargo del empleado');
formulario.txtcargo.focus();
return false;
}

if(formulario.txtarl.value=='')
{
alert('Sr Usuario debe ingresar la arl del empleado');
formulario.txtarl.focus();
return false;
}

if(isNaN(formulario.txtcontactoemergencia.value==''))
{
alert('Sr Usuario debe ingresar el contacto de emergencia');
formulario.txtcontactoemergencia.focus();
formulario.txtcontactoemergencia.value='';
return false;
}

}
</script>

<?php
	include("./conexion.php");

	$Codigop=$_GET['Codigo'];
	echo $Codigop;
	
	$query="SELECT * FROM EMPLEADO WHERE EMPLEADO.id_empleado =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de empleados. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizaemp.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>ID DEL EMPLEADO</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11 value= "<?php echo $Rs['id_empleado'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL EMPLEADO</td>
					<td>
						<input name="txtnombre" type="text" id="txtnombre" size=45 value= "<?php echo $Rs['emp_nombre'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA ENTRADA</td>
					<td>
						<input name="txtfechaentrada" type="date" id="txtfechaentrada" size=25 value= "<?php echo $Rs['emp_fecha_entrada'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>TIPO DOCUMENTO</td>
					<td>
						<input name="txttipodocumento" type="text" id="txttipodocumento" size=11 value= "<?php echo $Rs['emp_tipo_documento'];?>"/>
					</td>
				</tr>

				<tr>
					<td>TELEFONO</td>
					<td>
						<input name="txttelefono" type="number" id="txttelefono" size=11 value= "<?php echo $Rs['emp_telefono'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CARGO</td>
					<td>
						<input name="txtcargo" type="text" id="txtcargo" size=10 value= "<?php echo $Rs['emp_cargo'];?>"/>
					</td>
				</tr>		
		
				<tr>
					<td>ARL</td>
					<td>
						<input name="txtarl" type="text" id="txtarl" size=10 value= "<?php echo $Rs['emp_arl'];?>"/>
					</td>
				</tr>
				
				<tr>
					<td>CORREO</td>
					<td>
						<input name="txtcorreo" type="text" id="txtcorreo" size=10 value= "<?php echo $Rs['emp_correo'];?>"/>
					</td>
				</tr>

				<tr>
					<td>CONTACTO EMERGENCIA</td>
					<td>
						<input name="txtcontactoemergencia" type="number" id="txtcontactoemergencia" size=10 value= "<?php echo $Rs['emp_contacto_emergencia'];?>"/>
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

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>