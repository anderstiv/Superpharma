<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
   	$usuario=$_POST["usuario"];
	$password=$_POST["txtclave"];
 	session_start();
	$_SESSION["usuario"]=$usuario;
	// include("conexion.php");
	$conexion= mysqli_connect("localhost","root","","rol");
	$consulta = "SELECT*FROM usuarios where  usuario = '$usuario' and contrasena = '$password'";
	//$result=mysqli_query($link,$query) ;
	 $resultado=mysqli_query($conexion,$consulta);
	 $filas=mysqli_fetch_array($resultado);
		
	if($filas["id_cargo"]==1){ // administrador
		$_SESSION["usuario"]=$usuario;
		header("location:admin.php");

	} 
	elseif ($filas["id_cargo"]==2){ //vendedor
			
			header("location:asesor.php");
		}
	 else {
		header("location:index.html");
		}	

	
			mysqli_free_result($resultado);
			mysqli_close($conexion); 