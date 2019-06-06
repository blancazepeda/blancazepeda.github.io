<?php  
    
     $server = "localhost";
     $username = "root";
     $pass = "";
     $db = "usuarios";

     $conexion = new mysqli ($server, $username, $pass, $db);

      if($conexion->connect_error) {
   	   die("Error en la conexion:" . $conexion->connect_error);
       }

       $id = $_POST["id"];
       $artista = $_POST["artista"];
       $titulo = $_POST["titulo"];
       $fecha = $_POST["fecha"];
       $costo = $_POST["costo"];


       $sql = "UPDATE usuarios SET   artista='$artista', titulo='$titulo', fecha='$fecha', costo=$costo WHERE id='$id'";

       if ($conexion->query($sql) === TRUE){
          echo "Registro de artista modificado <a href='index.php'>Regresar</a>";
          header("Location:consultar.php");
       } else {
          echo "Ocurrió un error";

       }
       $conexion->close();



?>