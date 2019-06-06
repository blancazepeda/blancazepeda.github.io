<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de dibujos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
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

	<div class="container">
		<div class="row ">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardar.php" method="POST">
					<div class="form-group">
						<label for="Nombre">Artista:</label>
						<input type="text" name="artista" class="form-control">
					</div>
					<div class="form-group">
						<label for="Genero">Titulo</label>
						<input type="text" name="titulo" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Fecha</label>
						<input type="number" name="fecha" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Costo</label>
						<input type="number" name="costo" class="form-control">
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>