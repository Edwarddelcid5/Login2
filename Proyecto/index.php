<?php

require 'conexion.php';

$where ="";

if(!empty($_POST))
{
	$valor = $_POST['campo'];
	if(!empty($valor)){
		$where ="WHERE cod_producto='$cod_producto'";
}}


$sql = "SELECT *FOM producto $where";
$resultado = $conn->query($sql);



?>
<html lang ="es">


<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	
	
	<tr><td colspan="4" align="center">
<input type="submit" value="Nuevo" name="limpiardatos" >
<input type="submit" value="Grabar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
<input type="submit" value="buscar" name="buscardatos">
	
	
	
	<body>
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">PRODUCTOS</h2>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">INGRESO</a>		


           <form acttion ="<?php $_SERVER['PHP_SELF'];?>" method="POST">
		   <b> NOMBRE: </b><input type= "text" id="campo" name="campo" />
		   <input type ="submit"  id="enviar" name="enviar" value="BUSCAR" />
				
			</div>
			<br>
			
			<div class="row table-responsive">
			<table class="table tabble-striped">
			
			<thead>
			<tr>
			<th>cod_producto</th>
			<th>nombre</th>
			<th>fecha_caducidad</th>
			<th></th>
			<th></th>
			
			</tr>
			</thead>
			
			
			<tbody>
			
			
			
			
			<?php 
			$sql="SELECT * FROM producto";
               
$result=mysqli_query($conn,$sql);


while($mostrar=mysqli_fetch_array($result))
{
?>
<tr>

 <td><?php echo $mostrar['cod_producto'] ?>
	<td><?php echo $mostrar['nombre'] ?>
	<td><?php echo $mostrar['fecha_caducidad'] ?>
			
			
			
		     <td><a href="modificar.php?cod_producto=<?php echo $row ['cod_producto'];  ?>"<span class="glyphicon
			 glyphicon-pencil"></span></a></td>
			 
			
		
		</tr>
			<?php } ?>
			</tbody>
			
			
			</table>
		</div>
		</div>
		
		
		
		<div class="modal fade" cod_producto="confirm-delete" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class = "modal-connect">
		
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"
		aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="muModalLabel">Eliminar </h4>
		
		</div>
		
		
		<div class="modal-body">
		QUIERE ELIMINAR?
		</div>
		
		<div class="modal-footer">
		
		<button type="button" class="btn btn-default"
		data-dismiss="modal">cancelar</button>
		<a class="btn btn-dangerr btn-ok>ELIMINAR</a>
		</div>
		</div>
		</div>
		</div>
		
		
		<script>
		$('#confirm-delete').on('show.bs.modal', function(e){
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data
			('href'));
			
			$('.debug-url').html(Delette URL: <strong>' + $(this).find(
			'.btn-ok').attr(href)+ '</strong>');
		});
		
		
		
		
		</script>
		
		
		
	</body>
	
			</html>