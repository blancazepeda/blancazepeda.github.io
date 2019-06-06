<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <h1>Mi proyecto final del parcial</h1>
<!--Barra de Menu-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="registro.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="horas.html">Popular 24 Horas</a></li>
            <li><a href="arte.html">Popular 1 Semana</a></li>
            <li><a href="videos.html">Popular 1 Mes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="comprar.html">Comprar Arte</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Publicar</button>
        <a class="btn btn-primary" href="index.php">Regresar</a>
              
      </form>
            
        </div>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="iniciar sesion.html">Iniciar Sesión</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ajustes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cerrar Sesión</a></li>
            <li><a href="registro.html">Registrarse</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--Termina la barra de menu-->
	 <?php 

      $server="localhost";
      $username = "root";
      $pass = "";
      $db= "usuarios";

      $conexion = new mysqli ($server, $username, $pass, $db);

      if($conexion->connect_error){
          die("Error en la conexión: " . $conexion->connect_error);
      }

      $sql = "SELECT * FROM usuarios";
      $data = $conexion->query($sql); 
      echo '<table class="table table-hover">';
      echo '<thead>';
      echo '<tr>';
      echo '<th>ID</th>';
      echo '<th>Artista</th>';
      echo '<th>Titulo</th>';
      echo '<th>Fecha</th>';
      echo '<th>Costo</th>';
      echo '<th>Editar</th>';//Opcion para editar
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';

      while($obj = $data->fetch_object()){
        echo '<tr><td>'.$obj->id.'</td>';
        echo '<td>'.$obj->artista.'</td>';
        echo '<td>'.$obj->titulo.'</td>';
        echo '<td>'.$obj->fecha.'</td>';
        echo '<td>'.$obj->costo.'</td>';
        echo '<td><a class="btn btn-xs btn-primary" href="editar.php?id='.$obj->id.'">Editar</a>  <a class="btn btn-xs btn-default" href="borrar.php?id='.$obj->id.'">Eliminar</a></td></tr>';
      }
   ?>


   

</body>
</html>