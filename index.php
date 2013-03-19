<?php
//Validar lo que el usuario quiere

//$accion = $_REQUEST['accion'];

//if ($_GET['action'] == 'saludo')
//	echo 'hola';

switch($_GET['seleccion']){
	case 'alumno':
		switch($_GET['action']){
			case 'lista':
				//Cargo la informacion del controlador
				include('controlador/alumno_ctrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new alumno_ctrl();
				$controlador -> mostrar();
			break;
			case 'tabla':
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
		}//Fin switch alumno
	break;

	case 'curso':
		switch($_GET['action']){
			case 'agregar':
				//Cargo la informacion del controlador
				include('controlador/cursoCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new cursoCtrl();
				$controlador -> agregar();
			break;
			case 'borrar':
				//Cargo la informacion del controlador
				include('controlador/cursoCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new cursoCtrl();
				$controlador -> borrar();
			break;
			case 'consultar':
				//Cargo la informacion del controlador
				include('controlador/cursoCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new cursoCtrl();
				$controlador -> consultar();
			break;
			case 'agregaAlumno':
				//Cargo el controlador
				include('controlador/cursoCtrl.php');
				//Creo la instancia del controlador y ejecuto la operacion
				$controlador = new cursoCtrl();
				$controlador -> agregarAlumno();
			break;
			case 'borraAlumno':
				//Cargo el controlador
				include('controlador/cursoCtrl.php');
				//Creo la instancia del controlador y ejecuto la operacion
				$controlador = new cursoCtrl();
				$controlador -> borrarAlumno();
			break;
		}//fin switch cusro
	break;

	case 'ciclo':
		switch($_GET['action']){
			case 'agregar':
				//Cargo la informacion del controlador
				include('controlador/cicloCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new cicloCtrl();
				$controlador -> agregar();
			break;
			case 'borrar':
				//Cargo la informacion del controlador
				include('controlador/cicloCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new cicloCtrl();
				$controlador -> borrar();
			break;
			case 'consultar':
				//Cargo la informacion del controlador
				include('controlador/cicloCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new cicloCtrl();
				$controlador -> consultar();
			break;
		}//fin switch ciclo
	break;

	case 'profesor':
		switch($_GET['action']){
			case 'agregar':
				//Cargo la informacion del controlador
				include('controlador/profesorCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new profesorCtrl();
				$controlador -> agregar();
			break;
			case 'borrar':
				//Cargo la informacion del controlador
				include('controlador/profesorCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new profesorCtrl();
				$controlador -> borrar();
			break;
			case 'consultar':
				//Cargo la informacion del controlador
				include('controlador/profesorCtrl.php');
				//Creo el controlador y lo ejecuto		
				$controlador = new profesorCtrl();
				$controlador -> consultar();
			break;
		}//fin switch profesor
	break;

}//Fin switch principal
?>

