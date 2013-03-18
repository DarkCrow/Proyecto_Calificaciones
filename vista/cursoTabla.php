<?php

class cursoTabla{

	function mostrar_tabla($result){

		echo "<table border='1'>
		<tr>
		<th>Curso</th>
		<th>Nombre Curso(s)</th>
		<th>Seccion</th>
		<th>NRC</th>
		<th>Academia</th>
		<th>Dias Clase</th>
		<th>Hora Clase</th>
		<th>Profesor</th>
		<th>Ciclo Escolar</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['idCurso'] . "</td>";
  			echo "<td>" . $row['nombreCurso'] . "</td>";
  			echo "<td>" . $row['seccion'] . "</td>";
  			echo "<td>" . $row['nrc'] . "</td>";
  			echo "<td>" . $row['academia'] . "</td>";
  			echo "<td>" . $row['diasClase'] . "</td>";
  			echo "<td>" . $row['horasClase'] . "</td>";
  			echo "<td>" . $row['profesor_idProfesor'] . "</td>";
  			echo "<td>" . $row['cicloEscolar_idCicloEscolar'] . "</td>";
  			echo "</tr>";
  		}
		echo "</table>";

	}

}
?> 
