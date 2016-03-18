<?php
	class Request{
		
		private $controller ='home';
		private $method = "index";
		private $args;

		public function __construct() {

			$parts = explode('/' , filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
			$parts = array_filter($parts);
			$this->controller = ($c = array_shift($parts))? $c: $this->controller;
			$this->method = ($c = array_shift($parts))? $c:  $this->method;
			$this->args = (isset($parts[0])) ? $parts : array();
		}

		public function getController(){
			return $this->controller;
		}

		public function getMethod(){
			return $this->method;
		}
		
		public function getArgs(){
			return $this->args;
		}
	}
