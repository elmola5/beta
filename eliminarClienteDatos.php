<?
session_start();

if(!isset($_SESSION["log"]))
{
	header("location: login.php");
	exit();
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
<title>eliminar cliente datos</title>
</head>
<body>
<a id="outsesion" href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>



<?
include("conexion.php");


$id_cliente = $_POST["id_cliente"];


$pet = mysql_query("delete from CLIENTE where id_cliente = '$id_cliente'",$conexion);

if($pet == true )


{
	echo "cliente eliminado correctamente";
	 echo"<input id='boton' type='button'value='<<<VOLVER' onclick='window.history.back();'>";
	}

else

{
	echo "error al eliminar el cliente";
	 echo"<input id='boton' type='button'value='<<<VOLVER' onclick='window.history.back();'>";
	}


}
?>