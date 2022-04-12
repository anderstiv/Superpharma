<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Empleados</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

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

if(formulario.txttelefono.value=='')
{
alert('Sr Usuario debe ingresar el telefono');
formulario.txttelefono.focus();
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

if(formulario.txtcontactoemergencia.value=='')
{
alert('Sr Usuario debe ingresar el contacto de emergencia');
formulario.txtcontactoemergencia.focus();
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE EMPLEADOS</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarempleado.php">


  <table width="400" border="1">
    <tr>
    <tr>
					<td width=50%>ID DEL EMPLEADO</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11/>
					</td>
				</tr>
				
				<tr>
					<td>NOMBRE DEL EMPLEADO</td>
					<td>
						<input name="txtnombre" type="text" id="txtnombre" size=45/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA ENTRADA</td>
					<td>
						<input name="txtfechaentrada" type="date" id="txtfechaentrada" size=25/>
					</td>
				</tr>
				
				<tr>
					<td>TIPO DOCUMENTO</td>
					<td>
						<input name="txttipodocumento" type="text" id="txttipodocumento" size=11/>
					</td>
				</tr>

				<tr>
					<td>TELEFONO</td>
					<td>
						<input name="txttelefono" type="text" id="txttelefono" size=11/>
					</td>
				</tr>

				<tr>
					<td>CARGO</td>
					<td>
						<input name="txtcargo" type="text" id="txtcargo" size=10/>
					</td>
				</tr>	
				
				<tr>
					<td>ARL</td>
					<td>
						<input name="txtarl" type="text" id="txtarl" size=10/>
					</td>
				</tr>
				
				<tr>
					<td>CORREO</td>
					<td>
						<input name="txtcorreo" type="text" id="txtcorreo" size=10/>
					</td>
				</tr>

				<tr>
					<td>CONTACTO EMERGENCIA</td>
					<td>
						<input name="txtcontactoemergencia" type="text" id="txtcontactoemergencia" size=10/>
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
