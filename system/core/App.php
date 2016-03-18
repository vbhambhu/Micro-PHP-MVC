<?php

	/**
	 * PHPMicroMVC
	 *
	 * An open source PHP Miro MVC application
	 *
	 * @package		CodeIgniter
	 * @author		Vinod Kumar
	 * @link		http://vkumar.io
	 * @since		Version 0.1
	 * @filesource
	 */
	require_once 'Request.php';
	require_once 'Router.php';
	require_once 'Controller.php';
	require_once 'Load.php';
	require_once 'Registry.php';
	require_once 'ErrorController.php';

	//Load new request or show error
	try {
		Router::route(new Request);
	} catch(Exception $e){
		$controller = new errorController;
		$controller->error($e->getMessage());
	}