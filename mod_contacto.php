<?php 
	
	require('conexion.php');
	
$id=$_POST['id'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];
	
	$sql="UPDATE nuevo SET id='$id', titulo='$titulo', contenido='$contenido', autor='$autor', fecha='$fecha' WHERE id='$id'";
	
	$resultado=$mysqli->query($sql);
	
?>

<html>
	<head>
		<title>MODIFICAR CONTACTO</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>CONTACTO MODIFICADO</h1>
				
					<?php 	}else{ ?>
				
				<h1>ERROR AL MODIFICAR CONTACTO</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				