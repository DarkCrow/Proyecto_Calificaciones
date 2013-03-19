<?php

class profesorMod{

	/**
	* @return mixed, array $alumno
	* 
	*/	

	private $profesor;
	private $lista_profesor;

	//Funcion que regresa todos los registros del profesor	
	function profesorTodo(){

		include('db_data.inc');
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "SELECT
				*
			     FROM
				profesor";

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
			$profesor[] = $fila;

		//regreso mi arreglo de alumno
		return $profesor;
	}
	
	function profesorInsert(){
		$id = $_REQUEST['id'];
		$nomp = $_REQUEST['nomp'];
		$appap = $_REQUEST['appap'];
		$apmap = $_REQUEST['apmap'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "INSERT INTO profesor VALUES
			('$id',
			'$nomp',
			'$appap',
			'$apmap')";

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

	function profesorDelete(){
		$id = $_REQUEST['id'];

		//cargo los datos para la conexion
		include('db_data.inc');		
		$conexion = new mysqli($host,$user,$pass,$db);	
		if($conexion -> connect_errno)
			die('No hay conexion');

		//Creo mi querry
		$consulta = "DELETE FROM profesor WHERE idProfesor = '$id'";

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
