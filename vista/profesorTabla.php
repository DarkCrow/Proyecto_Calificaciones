<?php

class profesorTabla{

	function mostrar_tabla($result){

		echo "<table border='1'>
		<tr>
		<th>ID Profesor</th>
		<th>Nombre(s)</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['idProfesor'] . "</td>";
  			echo "<td>" . $row['nomProfesor'] . "</td>";
  			echo "<td>" . $row['appaProfesor'] . "</td>";
			echo "<td>" . $row['apmaProfesor'] . "</td>";
  			echo "</tr>";
  		}
		echo "</table>";

	}

}
?> 
