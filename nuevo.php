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
				<h3 style="text-align:center">Ingrese el nuevo registro</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="Clave_articulo" class="col-sm-2 control-label">Clave del artículo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Clave_articulo" name="Clave_articulo" placeholder="Ingrese la clave del artículo" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="Nombre" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese su nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="Precio" class="form-control" id="Precio" name="Precio" placeholder="Ingrese su precio">
					</div>
				</div>

				<div class="form-group">
					<label for="Clave_fabricante" class="col-sm-2 control-label">Clave del fabricante</label>
					<div class="col-sm-10">
						<input type="Clave_fabricante" class="form-control" id="Clave_fabricante" name="Clave_fabricante" placeholder="Ingrese su precio">
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