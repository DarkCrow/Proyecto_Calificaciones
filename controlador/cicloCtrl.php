<?php

class cicloCtrl{

	public $modelo;
	
	function __construct(){
	  //incluir el modelo
	  include('modelo/cicloMod.php');	
	  
	  //creo el objeto
	  $this->modelo = new cicloMod();

	}

	function consultar(){
		//Si no hay una accion definida en las variables,
		//entonces listo los alumnos
		if(!isset($_REQUEST['accion'])){
			$ciclo_array = $this->modelo->cicloTodo();	
				//incluir la vista para listar
				include('vista/cicloTabla.php');
				$vista = new cicloTabla();
				$vista -> mostrar_tabla($ciclo_array);
		}
	}
	
	function agregar(){
		//Manda llamar al formulario de insercion de datos
		$this->modelo->cicloInsert();
	
	}

	function borrar(){
	
		//Mando llamar al modelo de borrado
		$this->modelo->cicloDelete();
	
	}//Fin funcion borrar
}

?>
