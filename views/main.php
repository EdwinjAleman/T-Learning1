<?php
	session_start();
	// Controladores en Forma SINGULAR *ASI LAS TABLAS ESTEN EN PLURAL*
	// Ctr = Controllador --> Nombre Modulo
	// Acc = Accion       --> Metodo a Realizar o Ejecutar
	require_once('../models/database.php');

	$controller = 'usuario';

	if (isset($_SESSION['SUsu']) And isset($_SESSION['SRol']) And isset($_SESSION['SLog']))
	{
		if(!isset($_REQUEST['Ctr']))
		{
			// Archivos de Controlador --> tablasingular.controller.php
			// Archivos de Controlador --> usuario.controller.php
			require_once("../controllers/$controller.controller.php");
			// Crear el Nombre de la Clase que necesitamos Instanciar
			// Primera letra de Cada Palabra en Mayuscula
			// UsuarioController
			$clase = ucwords(strtolower($controller)).'Controller';
			$clase = new $clase;
			$clase->Index();
		}
		else
		{
			$controller = strtolower($_REQUEST['Ctr']);
			$accion 	= ucwords(strtolower(isset($_REQUEST['Acc']) ? $_REQUEST['Acc'] : 'Index'));
			$clase 		= ucwords($controller)."Controller";
			require_once("../controllers/$controller.controller.php");
			$clase 		= new $clase;
			call_user_func(array($clase,$accion));
		}
	}
	else
	{
	 	session_destroy();
	  	header("Location: ../index.php");
	  	die();
	}



?>