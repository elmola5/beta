<?
session_start();
if (!isset($_SESSION["log"]))

{
	header("location: login.php");
	}

else
{
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link rel="shortcut icon" href="imagenes/favi.png">
<title>MODIFICAR UP</title>
</head>

<body>
<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>


<?

	$id_cliente = $_POST["id_cliente"];
	$cedula = $_POST["cedula"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$email = $_POST["email"];
	$telfijo = $_POST["telfijo"];
	$telcel = $_POST["telcel"];
	$descripcion = $_POST["descripcion"];
	
	


include("conexion.php");


if(isset($cedula) && !empty($cedula) && isset($nombres) && !empty($nombres) && isset($apellidos) && !empty($apellidos))
	
{
 
 $query="update CLIENTE set cedula = '$cedula',nombres='$nombres',apellidos = '$apellidos',email='$email',descripcion='$descripcion',telefono_fijo='$telfijo',telefono_celular='$telcel' where id_cliente = '$id_cliente'";
  
  
 $pet =  mysql_query($query,$conexion);
  if($pet == true)
  
  {
	  echo" modificación de"."  ".$nombres."  "."con exito";
	  
	  }
	  
	  else{
		  
		  echo"error al ingresar los datos";}
}
		
}
?>