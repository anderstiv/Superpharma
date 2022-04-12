<script>
function validar(formulario)
{
	if(form1.txtidpresentacion.value=='')
	{
		alert('Sr Usuario debe ingresar el id de la presentacion');
		formulario.txtidpresentacion.focus();
		return false;
	}
	else if (isNaN(form1.txtidpresentacion.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtidpresentacion.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarpre.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL CODIGO DE LA PRESENTACION</td>
      <td>
        <input name="txtidpresentacion" type="number" id="txtidpresentacion" size=25/>
      </td>
    </tr>
    <tr>
      <td>
	<center>
           <input type="submit" name="Submit" value="Consultar" />
		</center>
      </td>

      <td>
	<center>
        <input type="reset" name="Submit2" value="Limpiar" />
		</center>
      </td>
    </tr>
  </table>

</form>
</center>