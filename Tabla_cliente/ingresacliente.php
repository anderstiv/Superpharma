<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRO DE CLIENTE</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if (isNaN(formulario.txtcliid.value==''))
{
alert('Sr Usuario debe ingresar el id del cliente');
formulario.txtcliid.focus();
formulario.txtcliid.value='';
return false;
}

if(formulario.txtclidocumento.value=='')
{
alert("Sr usuario debe ingresar el tipo de documento");
formulario.txtclidocumento.focus();
return false;
}

if(formulario.txtclinombre.value=='')
{
alert('Sr Usuario debe ingresar el nombre del cliente');
formulario.txtclinombre.focus();
return false;
}

if(isNAN(formulario.txtclitel.value==''))
{
alert('Sr Usuario debe ingresar el numero de telefono del cliente');
formulario.txtclitel.focus();
formulario.txtclitel.value='';
return false;
}

if(formulario.txtclidireccion.value=='')
{
alert('Sr Usuario debe ingresar la direccion del cliente');
formulario.txtclidireccion.focus();
return false;
}

if(formulario.txtclicorreo.value=='')
{
alert('Sr Usuario debe ingresar el correo del cliente');
formulario.txtclicorreo.focus();
return false;
}


if(isNAN(formulario.txtclifechanac.value==''))
{
alert('Sr Usuario debe ingresar la fecha de nacimiento del cliente');
formulario.txtclifechanac.focus();
formulario.txtclifechanac.value='';
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRAR DATOS DE CLIENTE</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarcliente.php">


  <table width="400" border="1">
  				<tr>
					<td width=50%>ID</td>
					<td>
						<input name="txtcliid" type="number" id="txtcliid" size=11/>
					</td>
				</tr>
				
				<tr>
					<td>TIPO DE DOCUMENTO</td>
					<td>
						<input name="txtclidocumento" type="text" id="txtclidocumento" size=45/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE</td>
					<td>
						<input name="txtclinombre" type="text" id="txtclinombre" size=25/>
					</td>
				</tr>
				
				<tr>
					<td>TELEFONO</td>
					<td>
						<input name="txtclitel" type="number" id="txtclitel" size=11/>
					</td>
				</tr>

				<tr>
					<td>DIRECCION</td>
					<td>
						<input name="txtclidireccion" type="text" id="txtclidireccion" size=11/>
					</td>
				</tr>

				<tr>
					<td>CORREO</td>
					<td>
						<input name="txtclicorreo" type="text" id="txtclicorreo" size=10/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE NACIMIENTO</td>
					<td>
						<input name="txtclifechanac" type="date" id="txtclifechanac" size=10/>
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
</form>
</center>


</body>
</html>
