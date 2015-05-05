<?php 
	
	$login = $_GET['login'];
	$contrasena = $_GET['contra'];
	
	$ingreso= new Ingreso();
	
	if($ingreso->evaluar($login, $contrasena)){
	
	echo (" BIENVENIIDO");
	
	
 
	}else{
		echo("ERROR");
	}
class Ingreso
{
	private $usuario;
	private $contrasena;
	
	public function Ingreso()
	{
		$this->usuario = 'root';
		$this->contrasena='Cosiii';
	}
	
	public function evaluar($login, $contrasena)
	{
		return($login==$this->usuario && $contrasena==$this->contrasena);	
	}
	
}
?>

<html>
    <body>
        <div>
		
		<td> <img src="images/srpr/logo22w.png"/> </td>
		<br>
	
				<a href="nuevos.php">Regresar</a>
			</br>	
        </div>
    </body>
</html>
