<?php

class cursoCtrl{

	public $modelo;
	
	function __construct(){
	  //incluir el modelo
	  include('modelo/cursoMod.php');	
	  
	  //creo el objeto
	  $this->modelo = new cursoMod();

	}

	function consultar(){
		//Si no hay una accion definida en las variables,
		//entonces listo los alumnos
		if(!isset($_REQUEST['accion'])){
			$curso_array = $this->modelo->cursoTodo();	
				//incluir la vista para listar
				include('vista/cursoTabla.php');
				$vista = new cursoTabla();
				$vista -> mostrar_tabla($curso_array);
		}
	}
	
	function agregar(){
		//Manda llamar al formulario de insercion de datos
		$this->modelo->cursoInsert();
	
	}

	function borrar(){
	
		//Mando llamar al modelo de borrado
		$this->modelo->cursoDelete();
	
	}//Fin funcion borrar

	//Funcion que agrega alumnos a un curso ya creado
	function agregarAlumno(){
		//Mando llamar al modelo del registro de curso para el alumno
		$this->modelo->cursoInsertAlumno();
	}//Fin funcion

	//Funcion que agrega alumnos a un curso ya creado
	function borrarAlumno(){
		//Mando llamar al modelo del registro de curso para el alumno
		$this->modelo->cursoDeleteAlumno();
	}//Fin funcion
}

?>
