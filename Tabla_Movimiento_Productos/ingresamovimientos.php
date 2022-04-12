<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Movimiento de Productos</title>
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<script>

function validar(formulario)
{
 
if (isNaN(formulario.txtmovid.value==''))
{
alert('Sr Usuario debe ingresar el codigo del movimiento de producto');
formulario.txtmovid.focus();
formulario.txtmovid.value='';
return false;
}

if(isNaN(formulario.txtmovexi.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtmovexi.focus();
formulario.txtmovexi.value='';
return false;
}

if(isNaN(formulario.txtmovpreven.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtmovpreven.focus();
formulario.txtmovpreven.value='';
return false;
}

if(isNaN(formulario.txtmovsal.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtmovsal.focus();
formulario.txtmovsal.value='';
return false;
}

if(isNaN(formulario.txtprecom.value==''))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtprecom.focus();
formulario.txtprecom.value='';
return false;
}
}

</script>

<h1 ALIGN=CENTER>ENTRA DATOS DE MOVIMIENTO PRODUCTOS</h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarmovimientos.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO DE MOVIMIENTO PRODUCTO</td>
      <td>
        <input name="txtmovid" type="number" id="txtmovid" size=11/>
      </td>
    </tr>
  <tr>
      <td>EXISTENCIA</td>
      <td>
        <input name="txtmovexi" type="number" id="txtmovexi" size=11/>
      </td>
    </tr>
	<tr>   
    
  <tr>
      <td>PRECIO DE VENTA</td>
      <td>
        <input name="txtmovpreven" type="number" id="txtmovpreven" size=10/>
      </td>
    </tr>
	<tr>

  <tr>
      <td>SALDO</td>
      <td>
        <input name="txtmovsal" type="number" id="txtmovsal" size=10/>
      </td>
    </tr>
	<tr>

  <tr>
      <td>PRECIO DE COMPRA</td>
      <td>
        <input name="txtmovprecom" type="number" id="txtmovprecom" size=10/>
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
