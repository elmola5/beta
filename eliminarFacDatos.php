<?
session_start();

if(!isset($_SESSION["log"]))
{
	header("location: login.php");
	exit();
	}
	
	else
	
{
	include("conexion.php");
	
	$id_factura = $_POST["fact"];
	
	$pet = mysql_query("delete from FACTURA where id_factura = '$id_factura' ",$conexion);
	
	if($pet == true)
	
	{
		echo "factura eliminada correctamente";
		 echo"<input id='boton' type='button'value='<<<VOLVER' onclick='window.history.back();'>";
		
		}
	
	else
	
	{
		echo" error al eliminar la factura";
		 echo"<input id='boton' type='button'value='<<<VOLVER' onclick='window.history.back();'>";
		
		}
	
	
	
}
?>









