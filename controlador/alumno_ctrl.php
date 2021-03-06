<?php

class alumno_ctrl{

	public $modelo;
	
	function __construct(){
	  //incluir el modelo
	  include('modelo/alumno_mod_v2.php');	
	  
	  //creo el objeto
	  $this->modelo = new alumno_mod();

	}

	function mostrar(){
		//Si no hay una accion definida en las variables,
		//entonces listo los productos
	  	if(!isset($_REQUEST['accion'])){
			$alumno_array = $this->modelo->listar();	  
			if(is_array($alumno_array)){					
				//incluir la vista para listar
				include('vista/alumno_view.php');
			}
			else{
				//Mando llamar la vista de errores
				die('No hay datos');		
	  		}
		}		
	}

	function mostrar_as_table(){
		//Si no hay una accion definida en las variables,
		//entonces listo los alumnos
		if(!isset($_REQUEST['accion'])){
			$alumno_array = $this->modelo->listar_tabla();	
				//incluir la vista para listar
				include('vista/alumno_table.php');
				$vista = new alumno_table();
				$vista -> mostrar_tabla($alumno_array);
		}
	}
	
	function insertar(){
		//Manda llamar al formulario de insercion de datos
		echo 'preparando para insertar';
		echo '';
		$this->modelo->alumnoInsert();
	
	}

	function borrar(){
	
		//Mando llamar al modelo de borrado
		$this->modelo->alumnoDelete();
	
	}//Fin funcion borrar
}

?>
