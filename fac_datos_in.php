<?
session_start();
if (!isset($_SESSION["log"]))

{
	header("location: login.php");
	}

else
{
	
	include("conexion.php");
	//DATOS A INGRESAR
	
	$id_cliente = $_POST["id_cliente"];
	$dia = date("Y-m-d");
	
	$can1 = $_POST["can1"];
	$can2 = $_POST["can2"];
	$can3 = $_POST["can3"];
	$can4 = $_POST["can4"];
	
	$des1 = $_POST["des1"];
	$des2 = $_POST["des2"];
	$des3 = $_POST["des3"];
	$des4 = $_POST["des4"];
	
	$prenda1 = $_POST["prenda1"];
	$prenda2 = $_POST["prenda2"];
	$prenda3 = $_POST["prenda3"];
	$prenda4 = $_POST["prenda4"];
	
	$color1 = $_POST["color1"];
	$color2 = $_POST["color2"];
	$color3 = $_POST["color3"];
	$color4 = $_POST["color4"];
	
	$val1 = $_POST["val1"];
	$val2 = $_POST["val2"];
	$val3 = $_POST["val3"];
	$val4 = $_POST["val4"];
	
	$valto1 = $_POST["valto1"];
	$valto2 = $_POST["valto2"];
	$valto3 = $_POST["valto3"];
	$valto4 = $_POST["valto4"];
	
	$total = $_POST["total"];


?>	

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link rel="shortcut icon" href="imagenes/favi.png">
<title>ingreso de cliente</title>
</head>


<body>

<a href="logout.php">CERRAR SESION</a>
<CENTER>
<a href="molass.php"><img height="100px" src="imagenes/logo1.png" /></a>
</CENTER>

<?
$pet = 	mysql_query("insert into FACTURA(fecha_ingreso,id_cliente,can1,can2,can3,can4,des1,des2,des3,des4,prenda1,prenda2,prenda3,prenda4,color1,color2,color3,color4,val1,val2,val3,val4,valto1,valto2,valto3,valto4,total) values('$dia','$id_cliente','$can1','$can2','$can3','$can4','$des1','$des2','$des3','$des4','$prenda1','$prenda2','$prenda3','$prenda4','$color1','$color2','$color3','$color4','$val1','$val2','$val3','$val4','$valto1','$valto2','$valto3','$valto4','$total')",$conexion);
	
	if($pet == true)
	
	{
		echo "datos ingresados con exito";
		}
		
		else
		
		{
			echo "error al ingresar los datos";
			}
			




}
?>





