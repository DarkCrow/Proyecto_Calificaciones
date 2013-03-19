<?php

class profesorCtrl{

	public $modelo;
	
	function __construct(){
	  //incluir el modelo
	  include('modelo/profesorMod.php');	
	  
	  //creo el objeto
	  $this->modelo = new profesorMod();

	}

	function consultar(){
		//Si no hay una accion definida en las variables,
		//entonces listo los alumnos
		if(!isset($_REQUEST['accion'])){
			$profesor_array = $this->modelo->profesorTodo();	
				//incluir la vista para listar
				include('vista/profesorTabla.php');
				$vista = new profesorTabla();
				$vista -> mostrar_tabla($profesor_array);
		}
	}
	
	function agregar(){
		//Manda llamar al formulario de insercion de datos
		$this->modelo->profesorInsert();
	
	}

	function borrar(){
	
		//Mando llamar al modelo de borrado
		$this->modelo->profesorDelete();
	
	}//Fin funcion borrar
}

?>
