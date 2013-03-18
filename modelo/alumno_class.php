<?php

class Alumno{

	public $idAlumno;
	public $Nombre;
	public $ApellidoPaterno;
	public $ApellidoMaterno;
	public $Carrera;
	public $Email;
	public $Celular;
	public $Gthub;
	public $Web;
	public $Status;
	public $Password;


	function __constructor($idAlumno, $Nombre, $ApellidoPaterno, $ApellidoMaterno, $Carrera, $Email, $Celular, $Gthub, $Web, $Status, $Password){

	$this -> idAlumno = $idAlumno;
	$this -> Nombre = $Nombre;
	$this -> ApellidoPaterno = $ApellidoPaterno;
	$this -> ApellidoMaterno = $ApellidoMaterno;
	$this -> Carrera = $Carrera;
	$this -> Email = $Email;
	$this -> Celular = $Celular;
	$this -> Gthub = $Gthub;
	$this -> Web = $Web;
	$this -> Status = $Status;
	$this -> Password = $Password;
	}

}
?>
