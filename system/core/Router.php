<?php

	class Router{
		
		public static function route(Request $request){

			$controller = $request->getController();
			$method = $request->getMethod();
			$args = $request->getArgs();

			$controller_file = APP_PATH.'controllers/'.$controller.'.php';

			if(is_readable($controller_file)){
				require_once $controller_file;
				
				$controller = new $controller;
				$method = (is_callable(array($controller,$method))) ? $method : 'index';
				
				if(!empty($args)){
					call_user_func_array(array($controller,$method),$args);
				}else{	
					call_user_func(array($controller,$method));
				}	
				return;
			}
			
			throw new Exception('404 - '.$request->getController().' not found');
		}
	}
