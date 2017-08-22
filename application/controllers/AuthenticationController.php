<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class AuthenticationController extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('AuthenticationModel');
		}

		public function navigate(){
			$content = 'instructor/dashboard';
			$data = array(
                'content' => $content,
                'username' => $this->session->userdata('username')
            );

			$this->parser->parse('template/base', $data);
		}

		public function doLogin(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->AuthenticationModel->checkLogin($username, md5($password));
			
			if ($result>0) {
				$data = $this->AuthenticationModel->dataLogin($username, md5($password));

				foreach ($data as $key => $value) {
					$session = array(
						'id_login' => $value->id_login,
						'username' => $value->username,
						'privilege' => $value->privilege
					);
				}

				$this->session->set_userdata($session);

				if ($this->session->userdata('privilege')=='Instructor') {
					$content = 'instructor/dashboard';
					$data = array(
						'content' => $content,
						'username' => $this->session->userdata('username')
					);
					$this->parser->parse('template/base', $data);
				}

				if ($this->session->userdata('privilege')=='Student') {
					$this->load->view('student/dashboard');
				}
			}
		}
	}
