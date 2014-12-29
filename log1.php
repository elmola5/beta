<?
session_start();

include("conexion.php");
$user = $_POST["user"];
$pwd = $_POST["password"];

//hago la peticion a la base de datos para llamar los datos
$pet = mysql_query("select * from ADMIN");
while($pot=mysql_fetch_array($pet))
{
	$userbd = $pot["USER"];
	$pwdbd = $pot["PWD"];
	
	}


//aseguro que se ingresen todos los campos
if(isset($user) && isset($pwd) && !empty($user) && !empty($pwd))

{
	if($user == $userbd)
	
	{
		
		if($pwd == $pwdbd)
		{
			$_SESSION["log"]=$user;
		    header("Location: molass.php");
			exit();
			}
		else
		
		{
			echo"password incorrecto";
			}
		}
	
	else{
		
		echo"este usuario no existe";
		}
	
	}
	
	else
	{
		echo"ingrese todos los campos requeridos";
		}
		?>



