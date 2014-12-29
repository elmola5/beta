<?
session_start();
if (!isset($_SESSION["log"]))

{
	header("location: login.php");
	}

else
{
	include("conexion.php");
	
	$cedula = $_POST["cedula"];
	$nombres = $_POST["nombres"];
	$apellidos =  $_POST["apellidos"];
	$email = $_POST["email"];
	$telfijo = $_POST["telfijo"];
	$telcel = $_POST["telcel"];
	$descripcion = $_POST["descripcion"];
	

	
	if(isset($cedula) && !empty($cedula) && isset($nombres) && !empty($nombres) && isset($apellidos) && !empty($apellidos))
	
{
  
 $pet = mysql_query("select * from CLIENTE where cedula='$cedula'",$conexion);
 //arroja en numero de filas que tiene mi peticion
 $numfilas = mysql_fetch_row($pet);
 if($numfilas >1)
 
{
	echo "este numero de cedula ya existe";
	echo "<input type='button' value='<<<Volver' onClick=window.history.back();>";
	}
	
else
{
	$in = mysql_query("insert into CLIENTE(cedula,nombres,apellidos,email,descripcion,telefono_fijo,telefono_celular) VALUES('$cedula','$nombres','$apellidos','$email','$descripcion','$telfijo','$telcel')",$conexion);
	
	if($in ==true)
	
{
	echo"datos ingresados correctamente";
	echo "<input type='button' value='<<<Volver' onClick=window.history.back();>";
	}
	
	else{
		echo"error al ingresar los datos";
		echo "<input type='button' value='<<<Volver' onClick=window.history.back();>";
		}
	}
	}
	
	else{
		echo"ingrese todos los campos requeridos(*)";
		echo "<input type='button' value='<<<Volver' onClick=window.history.back();>";
		}
		
		
		

}

?>