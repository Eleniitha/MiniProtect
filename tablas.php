
<?php
echo "<table border= '1'>";

for ($fila=1; $fila< 8; $fila++)   {
	echo "<tr>";

	for ($col=1; $col< 6; $col++) {
	echo "<td>fila $fila, columna $col </td>";
}
}
echo "</tr>";
echo "</table>";
?>