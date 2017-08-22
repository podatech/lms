<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Welcome extends CI_Controller {
		public function index(){
			$this->load->view('welcome_message');
		}

		public function login(){
			$this->load->view('login');
		}

		public function register(){
			$content = 'register';
			$data = array(
                'content' => $content
            );

			$this->parser->parse('template/base', $data);
		}
	}