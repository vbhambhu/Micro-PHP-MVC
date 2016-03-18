<?php
	
	class Load{
		
		public function model($name) {

			$model_file = APP_PATH.'models/'.$name.'.php';

			if(is_readable($model_file)){

				require_once($model_file);

				if(class_exists($name)){
					$registry = Registry::getInstance();
					$registry->$name = new $name;
					return true;
				}
			}
			throw new Exception('Some error occured in loading model.');
		}

		public function view($name , array $vars = null) {

			$view_file = APP_PATH.'views/'.$name.'.php';

			if(is_readable($view_file)){

				if(isset($vars)){
					extract($vars);
				}
				require($view_file);
				return true;
			}
			throw new Exception('Some error occured in loading view.');
		}

		public function database() {

			$view_file = APP_PATH.'views/'.$name.'.php';

			if(is_readable($view_file)){

				if(isset($vars)){
					extract($vars);
				}
				require($view_file);
				return true;
			}
			throw new Exception('Some error occured in loading view.');
		}





}
