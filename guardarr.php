<?php

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];



$mysqli = new mysqli("localhost", "root", "", "mini_proyecto" );
if ($mysqli->connect_errno) {
    throw new Exception(
        "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . 
        $mysqli->connect_error);
}


$sql = "INSERT INTO `nuevo` ".
    "(titulo, contenido, autor, fecha, ) ".
    "VALUES ".
    "('".$titulo."', '".$contenido."', '".$autor."', '".date("Y-m-d H:m:s")."' );";

$resultado = $mysqli->query($sql);

$mysqli->close();
?>

<html>
    <body>
        <div>
            <h1>Nuevo contacto</h1>
            <p>Se ha agregado un contacto</p>
			<a href="index.php">Regresar</a>
        </div>
    </body>
</html>
