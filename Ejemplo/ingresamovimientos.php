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
// AQUI EMPIEZA LA VALIDACION DE LA TABLA MOVIMIENTO PRODUCTOS


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

<!-- AQUI EMPIEZA EL INGRESO DE LA TABLA MOVIMIENTO PRODUCTO -->

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
    
<!-- AQUI EMPIEZA EL INGRESO DE LA TABLA INGRESA PRODUCTO-->
        <tr>
          <td> ID</td>
					<td>
						<input name="txtid" type="number" id="txtid" size=11/>
					</td>
				</tr>
				
				<tr>
					<td>CANTIDAD DEL PRODUCTO</td>
					<td>
						<input name="txtcantproducto" type="number" id="txtcantproducto" size=25/>
					</td>
				</tr>
				
				<tr>
					<td>FECHA DE VENCIMIENTO</td>
					<td>
						<input name="txtingfechaven" type="date" id="txtingfechaven" size=11/>
					</td>
				</tr>

				<tr>
					<td>PRECIO DE ENTRADA</td>
					<td>
						<input name="txtprecioentrada" type="number" id="txtprecioentrada" size=11/>
					</td>
				</tr>

				<tr>
					<td>CODIGO DE ENTRADA</td>
					<td>
						<input name="txtcodentrada" type="number" id="txtcodentrada" size=11/>
					</td>
				</tr>

				<tr>
					<td>FECHA DE COMPRA</td>
					<td>
						<input name="txtfechacom" type="date" id="txtfechacom" size=10/>
					</td>
				</tr>	
        
<!-- AQUI EMPIEZA EL INGRESO DE LA TABLA SALIDA PRODUCTO-->

<tr>
    
	<td>UNIDAD DE MEDIDA</td>
	<td> <?php
	  include("..\conexion.php");
	  $query="SELECT `id_ingresoprod`, `ing_cantidad_producto`, `ing_fecha_vencimiento`, `ing_precio_entrada`, `Id_compra`, `ing_fecha_compra` FROM `ingreso_producto`";
	  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
	  
	  echo "<select name='cmbumedidads'>";
	   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
	  
	  while($row=mysqli_fetch_array($result))
	  {
				  echo  "<option value=$row[0]> $row[1] </option>";
			  }
	  
	  echo "</select>";	
	  ?></td>
  </tr>


<!-- FIN -->


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
