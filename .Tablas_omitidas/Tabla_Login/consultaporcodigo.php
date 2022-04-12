<script>
function validar(formulario)
{
	if(form1.txtid.value=='')
	{
		alert('Sr Usuario debe ingresar el ID del usuario');
		formulario.txtid.focus();
		return false;
	}
	else if (isNaN(form1.txtid.value))
	{
		alert("El valor ingresado no es un n�mero");
		formulario.txtid.focus();
		return false;
	}
	return true;
}
</script>
<center>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="consultarlog.php">
  <table width="400" border="1">
    <tr>
      <td width=50%>INGRESE EL USUARIO</td>
      <td>
        <input name="txtid" type="" id="txtid" size=25/>
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