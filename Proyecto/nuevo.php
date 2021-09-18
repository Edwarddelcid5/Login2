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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="cod_producto" class="col-sm-2 control-label">Cod_producto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cod_producto" name="cod_producto" placeholder="cod_producto" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="fecha_caducidad" class="col-sm-2 control-label">fecha_caducidad</label><td><input type ="date" value ="" maxlength="7"  maxlength="7" size="20" required></td>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="fecha_caducidad" name="fecha_caducidad" placeholder="fecha_caducidad">
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