<?php

$mysqli = new mysqli("localhost", "root", "", "mini_proyecto" );
if ($mysqli->connect_errno) {
    throw new Exception(
        "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . 
        $mysqli->connect_error);

	
	$sql="SELECT id, titulo, contenido, autor FROM nuevo";
	
	$resultado = $mysqli->query($sql);
	$mysqli->close();
?>

<html>
	<head>
		<title>Contactos</title>
	</head>
	<body>
		
		<center><h1>CONTACTOS</h1></center>
		
		<a href="nuevos.php">Nuevo Contacto</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Titulo</b></td>
					<td><b>Contenido</b></td>
					<td><b>Autor</b></td>
					<td><b>Fecha</b></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['titulo'];?>
							</td>
							<td>
								<?php echo $row['contenido'];?>
							</td>
							<td>
								<?php echo $row['autor'];?>
							</td>
							<td>
								<?php echo $row ['fecha'];?>
							</td>
							<td>
								<a href="ediitar.php?id=<?php echo $row['id'];?>">EDITAR</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">ELIMINAR</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
