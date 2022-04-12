<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Proveedor</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">

<script>

function validar(formulario)
{
 
if(isNaN(formulario.txtprovid.value==''))
{
alert('Sr Usuario debe ingresar el codigo del proveedor');
formulario.txtprovid.focus();
formulario.txtprovid.value='';
return false;
}

if(formulario.txtprovnom.value=='')
{
alert("Sr usuario ingrese el nombre del proveedor");
formulario.txtprovnom.focus();
return false;
}

if(isNaN(formulario.txtproviden.value==''))
{
alert('Sr Usuario debe ingresar la identificacion del proveedor');
formulario.txtproviden.focus();
formulario.txtproviden.value='';
return false;
}

if(isNaN(formulario.txtprovtel.value==''))
{
alert('Sr Usuario debe ingresar el telefono del proveedor');
formulario.txtprovtel.focus();
formulario.txtprovtel.value='';
return false;
}

if(formulario.txtprovdir.value=='')
{
alert('Sr Usuario debe ingresar la direccion del proveedor');
formulario.txtprovdir.focus();
formulario.txtprovdir.value='';
return false;
}

if(formulario.txtprovcor.value=='')
{
alert('Sr Usuario debe ingresar el correo eletronico');
formulario.txtprovcor.focus();
return false;
}

if(formulario.txtprovpercon.value=='')
{
alert('Sr Usuario debe ingresar el nombre del contacto');
formulario.txtprovpercon.focus();
return false;
}

}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE PROVEEDOR</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarproveedor.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO DEL PROVEEDOR</td>
      <td>
        <input name="txtprovid" type="number" id="txtprovid" size=11/>
      </td>
    </tr>
    <tr>
      <td>NOMBRE DEL PROVEEDOR</td>
      <td>
        <input name="txtprovnom" type="text" id="txtprovnom" size=45/>
      </td>
    </tr>
	<tr>
      <td>IDENTIFICACION DEL PROVEEDOR</td>
      <td>
        <input name="txtproviden" type="number" id="txtproviden" size=2/>
      </td>
    </tr>
	<tr>
      <td>TELEFONO DEL PROVEEDOR</td>
      <td>
        <input name="txtprovtel" type="number" id="txtprovtel" size=11/>
      </td>
    </tr>
	<tr>
 
  <tr>
      <td>DIRECCION DEL PROVEEDOR</td>
      <td>
        <input name="txtprovdir" type="text" id="txtprovdir" size=11/>
      </td>
    </tr>
	<tr>   
    
	<tr>
      <td>CORREO DEL PROVEEDOR</td>
      <td>
        <input name="txtprovcor" type="text" id="txtprovcor" size=11/>
      </td>
    </tr>
	<tr>

  <tr>
      <td>NOMBRE DEL CONTACTO </td>
      <td>
        <input name="txtprovpercon" type="text" id="txtprovpercon" size=10/>
      </td>
    </tr>
	<tr>

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
