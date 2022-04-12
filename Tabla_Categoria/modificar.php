<script>
function validar(formulario)
{

if(isNaN(formulario.txtcatid.value==''))
{
alert('Sr Usuario debe ingresar el id de la categoria');
formulario.txtcatid.focus();
formulario.txtcatid.value='';
return false;
}

if(formulario.txtdes.value=='')
{
alert("Sr usuario debe ingresar la descripcion de la categoria");
formulario.txtdes.focus();
return false;
}

}
</script>

<?php
	include(".\conexion.php");

	$Codigop=$_GET['Codigo'];
		
	
	$query="SELECT * FROM categoria WHERE categoria.id_categoria =  ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de categoria. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualiza.php">

	  <table width="400" border="1">
	  <tr>
      <td width=50%>CODIGO DE LA CATEGORIA</td>
      <td>
        <input name="txtcatid" type="number" id="txtcatid" size="11" value= "<?php echo $Rs['id_categoria'];?>"
      </td>
    </tr>

    <tr>
      <td>DESCRIPCION</td>
      <td>
        <input name="txtdes" type="text" id="txtdes" size="45" value= "<?php echo $Rs['cat_descripcion'];?>"
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