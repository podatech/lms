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
					$content = 'instructor/private-dashboard';
					$recent = $this->AuthenticationModel->recentCourses($this->session->userdata('id_login'));
					$data = array(
						'content' => $content,
						'username' => $this->session->userdata('username'),
						'recentCourses' => $recent
					);
					$this->parser->parse('private/base', $data);
				}

				if ($this->session->userdata('privilege')=='Student') {
					$this->load->view('student/dashboard');
				}
			}
		}

		function glogin(){
			$client_id = '55837121344-gn5go6t9q6n5ff9a7dqnrevro69u44r1.apps.googleusercontent.com';
			$client_secret = 'mZ1wAOdRh5GjSo-uK-KCj7QH';
			$redirect_uri = base_url('AuthenticationController/gcallback');;

			$client = new Google_Client();
			$client->setApplicationName("Poda Learning App");
			$client->setClientId($client_id);
			$client->setClientSecret($client_secret);
			$client->setRedirectUri($redirect_uri);
			$client->addScope("email");
			$client->addScope("profile");

			$objOAuthService = new Google_Service_Oauth2($client);
			$authUrl = $client->createAuthUrl();

			header('Location: '.$authUrl);
		}

		function gcallback(){
			$client_id = '55837121344-gn5go6t9q6n5ff9a7dqnrevro69u44r1.apps.googleusercontent.com';
			$client_secret = 'mZ1wAOdRh5GjSo-uK-KCj7QH';
			$redirect_uri = base_url('AuthenticationController/gcallback');

			$client = new Google_Client();
			$client->setApplicationName("Poda Learning App");
			$client->setClientId($client_id);
			$client->setClientSecret($client_secret);
			$client->setRedirectUri($redirect_uri);
			$client->addScope("email");
			$client->addScope("profile");

			$service = new Google_Service_Oauth2($client);

			$client->authenticate($_GET['code']);
			$_SESSION['access_token'] = $client->getAccessToken();

			$user = $service->userinfo->get();

			/*
			var_dump($user);
			echo "</br> User ID :".$user->id; 
			echo "</br> User Name :".$user->name;
			echo "</br> Gender :".$user->gender;
			echo "</br> User Email :".$user->email;
			echo "</br> User Link :".$user->link;
			echo "</br><img src='$user->picture' height='200' width='200' > ";*/
		}

		public function logout(){
			session_destroy();
			$data = array('id_login','username','privilege');
			$this->session->unset_userdata($data);
			redirect('http://'.$_SERVER['HTTP_HOST'].'/lms/');
		}
	}
