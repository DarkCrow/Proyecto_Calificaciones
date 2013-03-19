<?php

class cursoMod{

	/**
	* @return mixed, array $alumno
	* 
	*/	

	private $curso;
	private $lista_curso;

	//Funcion que regresa todos los registros del curso	
	function cursoTodo(){

		include('db_data.inc');
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "SELECT
				*
			     FROM
				curso";

		//Ejecuto la consulta
		$result = $conexion -> query($consulta);
		
		if($conexion->errno){
			$conexion -> close();
			
			return FALSE;
		}
		
		if(!$result->num_rows > 0)
			return FALSE;

		//regreso mi objeto de alumno
		return $result;

		//Procesamos el resultado para convertirlo en un array
		while ( $fila = $result -> fetch_assoc() )
			$curso[] = $fila;

		//regreso mi arreglo de alumno
		return $curso;
	}
	
	function cursoInsert(){
		$id = $_REQUEST['id'];
		$nom = $_REQUEST['nom'];
		$sec = $_REQUEST['sec'];
		$nrc = $_REQUEST['nrc'];
		$aca = $_REQUEST['aca'];
		$dia = $_REQUEST['dia'];
		$hor = $_REQUEST['hor'];
		$profid = $_REQUEST['profid'];
		$cursoid = $_REQUEST['cursoid'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "INSERT INTO curso VALUES
			('$id',
			'$nom',
			'$sec',
			'$nrc',
			'$aca',
			'$dia',
			'$hor',
			'$profid',
			'$cursoid')";

		//Ejecuto la consulta
		$result = $conexion -> query($consulta);
		//var_dump($conexion);
		if($conexion->errno){
			$conexion -> close();
			die('No se pudo establacer la insercion '.$conexion->error);
		}
		else
			echo "1 registro agregado";
			
		$conexion -> close();
		
	}

	//Inscribimos a un alumno en algun curso existente
	function cursoInsertAlumno(){
		$alumno = $_REQUEST['alumno'];
		$curso = $_REQUEST['curso'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		
		$consulta = "INSERT INTO  alumno_has_curso(alumno_idAlumno, curso_idCurso)
					VALUES ('$alumno','$curso')";

		//Ejecuto la consulta
		$result = $conexion -> query($consulta);
		//var_dump($conexion);
		if($conexion->errno){
			$conexion -> close();
			die('No se pudo establacer la insercion '.$conexion->error);
		}
		else
			echo "1 registro agregado";
			
		$conexion -> close();	
	}

	//Inscribimos a un alumno en algun curso existente
	function cursoDeleteAlumno(){
		$alumno = $_REQUEST['alumno'];
		$curso = $_REQUEST['curso'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		
		$consulta = "DELETE FROM alumno_has_curso 
					WHERE alumno_idAlumno = '$alumno' 
					AND curso_idCurso = '$curso'";

		//Ejecuto la consulta
		$result = $conexion -> query($consulta);
		//var_dump($conexion);
		if($conexion->errno){
			$conexion -> close();
			die('No se pudo establacer el borrado '.$conexion->error);
		}
		else
			echo "registro borrado";
			
		$conexion -> close();
		
	}

	function cursoDelete(){
		$id = $_REQUEST['id'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "DELETE FROM curso WHERE idCurso = '$id'";

		//Ejecuto la consulta
		$result = $conexion -> query($consulta);
		//var_dump($conexion);
		if($conexion->errno){
			$conexion -> close();
			die('No se pudo establacer el borrado '.$conexion->error);
		}
		else
			echo "registro(s) borrado(s)";
			
		$conexion -> close();
		
	}

}
?>
