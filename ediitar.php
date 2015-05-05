<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$sql="SELECT titulo, contenido, autor, fehca FROM nuevo WHERE id='$id'";
	
	$resultado=$mysqli->query($slq);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Contactos</title>
	</head>
	<body>
		
		<center><h1>Modificar contacto</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>TITULO</b></td>
					<td width="30"><input type="text" name="titulo" size="25" value="<?php echo $row['titulo']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>CONTENIDO</b></td>
					<td><input type="contenido" name="contenido" size="25" value="<?php echo $row['contenido']; ?>" /></td>
				</tr>
				<tr>
					<td><b>AUTOR</b></td>
					<td><input type="text" name="autor" size="25" value="<?php echo $row['autor']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
