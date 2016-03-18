<?php

class ErrorController extends Controller{
	
	public function index(){}
	
		public function error($message = 'No information about the error'){
			echo '<pre>'.print_r($message,1).'</pre>';	
			
		}
}
