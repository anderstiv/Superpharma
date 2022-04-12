<script>
function validar(formulario)
{

if(isNaN(formulario.txtidRH.value==''))
{
alert('Sr Usuario debe ingresar el id del RH');
formulario.txtidRH.focus();
formulario.txtidRH.value='';
return false;
}

if(formulario.txtrhdes.value=='')
{
alert("Sr Usuario debe ingresar la descripcion del RH");
formulario.txtrhdes.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
	$query="SELECT * FROM RH WHERE RH.id_rh =  '" .$Codigop."'" ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de RH. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizaRH.php">
				
	  	<table width="400" border="1">
	   			<tr>
					<td>ID</td>
					<td>
						<input name="txtidRH" type="number" id="txtidRH" size="25" value= "<?php echo $Rs['id_rh'];?>"/>
					</td>
				</tr>

				<tr>
					<td>DESCRIPCION</td>
					<td>
						<input name="txtrhdes" type="text" id="txtrhdes" size="25" value= "<?php echo $Rs['RH_descripcion'];?>"/>
					</td>
				</tr>
    <tr>
      <td>

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