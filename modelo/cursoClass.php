<?php

class Curso{

	public $idCurso;
	public $nombreCurso;
	public $seccion;
	public $nrc;
	public $academia;
	public $diasClase;
	public $horasClase;
	public $profesor_idProfesor;
	public $cicloEscolar_idCicloEscolar;


	function __constructor($idCurso, $nombreCurso, $seccion, $nrc, $academia, $diasClase, $horasClase, $profesor_idProfesor, $cicloEscolar_idCicloEscolar){

	$this -> idCurso = $idCurso;
	$this -> nombreCurso = $nombreCurso;
	$this -> seccion = $seccion;
	$this -> nrc = $nrc;
	$this -> academia = $academia;
	$this -> diasClase = $diasClase;
	$this -> horasClase = $horasClase;
	$this -> profesor_idProfesor = $profesor_idProfesor;
	$this -> cicloEscolar_idCicloEscolar = $cicloEscolar_idCicloEscolar;
	}

}
?>
