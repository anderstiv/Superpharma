<script>
function validar(formulario)
{

if(isNaN(formulario.txtidpresentacion.value==''))
{
alert('Sr Usuario debe ingresar el id de la presentacion');
formulario.txtidpresentacion.focus();
formulario.txtidpresentacion.value='';
return false;
}

if(formulario.txtprenombre.value=='')
{
alert("Sr usuario debe ingresar el nombre de la presentacion");
formulario.txtprenombre.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM presentacion WHERE presentacion.id_presentacion =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de presentacion. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
	    <tr>
      <td width=50%>CODIGO DE LA PRESENTACION</td>
      <td>
        <input name="txtidpresentacion" type="number" id="txtidpresentacion" size="11" value= "<?php echo $Rs['id_presentacion'];?>"
      </td>
    </tr>
    <tr>
      <td>NOMBRE</td>
      <td>
        <input name="txtprenombre" type="text" id="txtprenombre" size="45" value= "<?php echo $Rs['pre_nombre'];?>"
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