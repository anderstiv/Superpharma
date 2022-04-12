<script>
function validar(formulario)
{
	if(form1.txtcodigo.value=='')
	{
		alert('Sr Usuario debe ingresar el codigo del Estudiante a consultar');
		formulario.txtcodigo.focus();
		return false;
	}
	else if (isNaN(form1.txtcodigo.value))
	{
		alert("El valor ingresado no es un número");
		formulario.txtcodigo.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarpro.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL CODIGO A CONSULTAR</td>
      <td>
        <input name="txtcodigo" type="text" id="txtcodigo" size=25/>
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