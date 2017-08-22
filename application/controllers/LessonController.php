<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class LessonController extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('LessonModel');
		}

		public function index(){
			
			/*$this->load->view('v_data',$data);*/
		}
	}