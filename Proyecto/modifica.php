<?php

require 'conexion.php';
    $cod_producto = $_POST['cod_producto'];
	$nombre = $_POST['nombre'];
	$fecha_caducidad = $_POST['fecha_caducidad'];
	$cod_producto=$GET['Cod_producto'];
	
	$sql = "SELECT * FROM producto WHERE cod_producto='$cod_producto";
	
	$resultado = $conn->query($sql);
?>
<html lang="es">
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="cod_producto" class="col-sm-2 control-label">Cod_producto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cod_producto" name="cod_producto" placeholder="cod_producto" required>
					</div>
				</div>
				
				
				<input type=""hidden cod_producto="cod_producto" name="cod_producto" value="<?php echo $row ['nombre']; ?>"/>
				
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" 
						value ="<?php echo $row ['nombre']; ?>"required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="fecha_caducidad" class="col-sm-2 control-label">fecha_caducidad</label><td><input type ="date" value ="" maxlength="7"  maxlength="7" size="20" required></td>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="fecha_caducidad" name="fecha_caducidad" placeholder="fecha_caducidad"
						value ="<?php echo $row ['fecha_caducidad']; ?>>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>