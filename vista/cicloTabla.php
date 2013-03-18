<?php

class cicloTabla{

	function mostrar_tabla($result){

		echo "<table border='1'>
		<tr>
		<th>Ciclo Escolar</th>
		<th>Fecha Inicio</th>
		<th>Fecha Final</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['idCicloEscolar'] . "</td>";
  			echo "<td>" . $row['fechaInicio'] . "</td>";
  			echo "<td>" . $row['fechaTermino'] . "</td>";
  			echo "</tr>";
  		}
		echo "</table>";

	}

}
?> 
