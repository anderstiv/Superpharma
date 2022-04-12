<script>
function validar(formulario)
{

  if(isNaN(formulario.txtidestado.value==''))
  {
  alert('Sr Usuario debe ingresar el id del estado');
  formulario.txtidestado.focus();
  formulario.txtidestado.value='';
  return false;
  }

  if(formulario.txtdescripcion.value=='')
  {
  alert("Sr usuario debe ingresar la descripcion");
  formulario.txtdescripcion.focus();
  return false;
  }

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM estado WHERE estado.id_estado =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de estado. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">
				
	  <table width="400" border="1">
    <tr>
        <td width=50%>CODIGO DEL ESTADO</td>
        <td>
          <input name="txtidestado" type="number" id="txtidestado" size="11" value= "<?php echo $Rs['id_estado'];?>"
        </td>
      </tr>
      <tr>
        <td>DESCRIPCION</td>
        <td>
          <input name="txtdescripcion" type="text" id="txtdescripcion" size="45" value= "<?php echo $Rs['est_descripcion'];?>"                                             '];?>"
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