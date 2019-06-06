<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<?php 
		$server="localhost";
		$username = "root";
		$pass = "";
		$db= "usuarios";

		$conexion = new mysqli ($server, $username, $pass, $db);

		if($conexion->connect_error){
				die("Error en la conexión: " . $conexion->connect_error);
		}
		$id = $_GET['id'];

		$sql = "SELECT * FROM usuarios WHERE id=$id LIMIT 1";
		$dibujo = $conexion->query($sql)->fetch_object();
	 ?>
	 
	 <div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="update.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $dibujo->id;  ?>">
					<div class="form-group">
						<label for="artista">Artista</label>
						<input type="text" name="artista" class="form-control" value="<?php echo $dibujo->artista; ?>">
					</div>
					<div class="form-group">
						<label for="titulo">Titulo</label>
						<input type="text" name="titulo" class="form-control" value="<?php echo $dibujo->titulo; ?>">
					</div>
					<div class="form-group">
						<label for="">Fecha</label>
						<input type="number" name="fecha" class="form-control" value="<?php echo $dibujo->fecha; ?>">
					</div>
					<div class="form-group">
						<label for="">Costo</label>
						<input type="number" name="costo" class="form-control" value="<?php echo $dibujo->costo; ?>">
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>