<?
session_start();
if (!isset($_SESSION["log"]))

	{
	header("location: login.php");
	}

else
{
	include("conexion.php");
	
	$_POST["nombres"] = $nombres;
	$_POST["descripcion"] = $descripcion;
	$nombrefoto =$_FILES['foto']['name'];   
	$ruta =$_FILES['foto']['tmp_name'];
	$destino = 'fotos/'.$nombrefoto;
	
	
	
	
	
	

	if(isset($nombres) && !empty($nombres) && isset($nombrefoto) && !empty($nombrefoto))
	
 {
  
 $pet = mysql_query("select * from DISENO where nombre_diseno='$nombres'",$conexion);
 //arroja en numero de filas que tiene mi peticion
 $numfilas = mysql_fetch_row($pet);
 if($numfilas >1)
 
		{
		echo "este nombre de diseño ya existe";
		echo "<input type='button' value='<<<Volver' onClick=window.history.back();>";
		
	
		}
	
else
{
	
	//archivo o foto
	
	move_uploaded_file($ruta,$destino);
	$in = mysql_query("insert into DISENO(nombre_diseno,foto_diseno,descripcion_diseno) values('$nombres','$destino','$descripcion')",$conexion);
	
	if($in ==true)
	
	{	
				include("conexion.php");
			
				$pot  = mysql_query("select * from DISENO where nombre_diseno='$nombres'",$conexion);
				while($con = mysql_fetch_array($pot))
					{
						$nom = $con["nombre_diseno"];
						$fot = $con["foto_diseno"];
						 
						 
						
						echo $nom."<br>";
						echo "<br> <img src='$fot' height='300px' width='300px'>";
						echo "<br><input type='button' value='<<<Volver' onClick=window.history.back();>";
						
					}
		
		
		
		
	
		
	}
	
	else{
		echo"error al ingresar los datos";
		echo "<input type='button' value='<<<Volver' onClick=window.history.back();>";
		}
	}
	}
	
	else{
		echo"<br><br><br>ingrese todos los campos requeridos(*)";
		echo "<input type='button' value='<<<Volver' onClick=window.history.back();>";
		}
		
		
		

}


