<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "usuarios";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$artista = $_POST["artista"];
			$titulo = $_POST["titulo"];
			$fecha = $_POST["fecha"];
			$costo = $_POST["costo"]; 

			$sql = "INSERT INTO usuarios (artista, titulo, fecha, costo)
							VALUES ('$artista', '$titulo', $fecha, $costo)";

			if($conexion->query($sql) === TRUE){
				header("Location:consultar.php");
			} else {
				echo "Error: " .$sql. "<br>" . $conexion->error;
			}
 ?>







