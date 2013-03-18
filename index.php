<?php
//Validar lo que el usuario quiere

//$accion = $_REQUEST['accion'];

//if ($_GET['action'] == 'saludo')
//	echo 'hola';

switch($_GET['action']){
	case 'alumno':
		//Cargo la informacion del controlador
		include('controlador/alumno_ctrl.php');
		//Creo el controlador y lo ejecuto		
		$controlador = new alumno_ctrl();
		$controlador -> mostrar();
	break;
	case 'alumno2':
		//Cargo la informacion del controlador
		include('controlador/alumno_ctrl.php');
		//Creo el controlador y lo ejecuto		
		$controlador = new alumno_ctrl();
		$controlador -> mostrar_as_table();
	break;
	case 'insertar':
		//Cargo la informacion del controlador
		include('controlador/alumno_ctrl.php');
		//Creo el controlador y lo ejecuto		
		$controlador = new alumno_ctrl();
		$controlador -> insertar();
	break;
	case 'delete':
		//Cargo el controlador alumno
		include('controlador/alumno_ctrl.php');
		//Creo el controlador y ejecuto la operacion
		$controlador = new alumno_ctrl();
		$controlador->borrar();
	break;
}
?>

