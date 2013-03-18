<?php

class alumno_mod{

	/**
	* @return mixed, array $alumno
	* 
	*/	

	private $alum;
	private $lista_alum;

	function listar(){

		include('db_data.inc');
		$conexion = new mysqli($host,$user,$pass,$db);		
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "SELECT
				*
			     FROM
				alumno";

		//Ejecuto la consulta
		$resultado = $conexion -> query($consulta);
		
		if($conexion->errno){
			$conexion -> close();
			
			return FALSE;
		}
		
		if(!$resultado->num_rows > 0)
			return FALSE;

		//Procesamos el resultado para convertirlo en un array
		while ( $fila = $resultado -> fetch_assoc() )
			$alumno[] = $fila;

		//regreso mi arreglo de alumno
		return $alumno;
	}

	function listar_tabla(){

		include('db_data.inc');
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "SELECT
				*
			     FROM
				alumno";

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
			$alumno[] = $fila;

		//regreso mi arreglo de alumno
		return $alumno;
	}
	
	function alumnoInsert(){
		$id = $_REQUEST['id'];
		$nom = $_REQUEST['nom'];
		$appa = $_REQUEST['appa'];
		$apma = $_REQUEST['apma'];
		$carr = $_REQUEST['carr'];
		$email = $_REQUEST['email'];
		$cel = $_REQUEST['cel'];
		$git = $_REQUEST['git'];
		$web = $_REQUEST['web'];
		$stat = $_REQUEST['stat'];
		$pass = $_REQUEST['pass'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "INSERT INTO alumno (
		idAlumno,
		nombre,
		apellidoPaterno,
		apellidoMaterno,
		carrera,
		email,
		celular,
		github,
		web,
		status,
		password)
			VALUES
			('$id',
			'$nom',
			'$appa',
			'$apma',
			'$carr',
			'$email',
			'$cel',
			'$git',
			'$web',
			'$stat',
			'$pass')";

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

	function alumnoDelete(){
		$id = $_REQUEST['id'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "DELETE FROM alumno WHERE idAlumno = '$id'";

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
