<?php

class alumno_table{

	function mostrar_tabla($result){

		echo "<table border='1'>
		<tr>
		<th>Codigo</th>
		<th>Nombre(s)</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Carrera</th>
		<th>Email</th>
		<th>Celular</th>
		<th>Gthub</th>
		<th>Web</th>
		<th>Status</th>
		<th>Password</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['idAlumno'] . "</td>";
  			echo "<td>" . $row['nombre'] . "</td>";
  			echo "<td>" . $row['apellidoPaterno'] . "</td>";
  			echo "<td>" . $row['apellidoMaterno'] . "</td>";
  			echo "<td>" . $row['carrera'] . "</td>";
  			echo "<td>" . $row['email'] . "</td>";
  			echo "<td>" . $row['celular'] . "</td>";
  			echo "<td>" . $row['github'] . "</td>";
  			echo "<td>" . $row['web'] . "</td>";
  			echo "<td>" . $row['status'] . "</td>";
  			echo "<td>" . $row['password'] . "</td>";
  			echo "</tr>";
  		}
		echo "</table>";

	}

}
?> 
