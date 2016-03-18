<?php

class Home extends Controller {
		
		
		public function index(){


			$this->load->model("HomeModel");

			$this->load->database();



			$data = array(
				'matrix' => $this->HomeModel->test(),
				'message' => "World",
			);
				
			$this->load->view('welcome', $data);	

		}


		


	}
