<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class CourseController extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('CourseModel');
		}

		public function navigate(){
			$content = 'instructor/courses/course';
			$sum = $this->CourseModel->sumOfData($this->session->userdata('id_login'));
			$config['base_url'] = base_url().'CourseController/navigate/';
			$config['total_rows'] = $sum;
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$choice = $config["total_rows"] / $config["per_page"];
			$config['num_links'] = floor($choice);
			
			$config['full_tag_open'] = '<ul class="pagination margin-top-none">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li class="disabled"><a href="#">&laquo;</a>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$value['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			$data = array(
                'content' => $content,
                'username' => $this->session->userdata('username'),
                'course' => $this->CourseModel->data($config["per_page"], $value['page']),
                'pagination' => $this->pagination->create_links()
            );
			$this->parser->parse('template/base', $data);
		}

		public function goToAddCourse(){
			$content = 'instructor/courses/addcourse';
			$data = array(
                'content' => $content,
                'username' => $this->session->userdata('username')
            );

			$this->parser->parse('template/base', $data);
		}

		public function goToAddLesson(){
			$content = 'instructor/courses/addlesson';
			$data = array(
                'content' => $content,
                'username' => $this->session->userdata('username')
            );

			$this->parser->parse('template/base', $data);
		}
	
		public function addCourse(){$data = array(
				'instructor' => $this->session->userdata('id_login'),
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'category' => $this->input->post('category'),
				'start_date' => date("Y-m-d", strtotime($this->input->post('start'))),
				'end_date' => date("Y-m-d", strtotime($this->input->post('end'))),
				'level' => $this->input->post('level')
			);

			$result = $this->CourseModel->insertCourse($data);

			if ($result['result'] > 0) {
				$this->session->set_flashdata('message','<div class="panel panel-default">
					<div class="media v-middle">
						<div class="media-left">
							<div class="bg-green-400 text-white">
								<div class="panel-body">
									<i class="fa fa-check fa-fw fa-2x"></i>
								</div>
							</div>
						</div>
						<div class="media-body">
							<span class="text-body-2">Success</span> add course
						</div>
						<div class="media-right media-padding">'.
						anchor('CourseController/goToAddLesson','Add Lesson', array('class'=>'btn btn-white paper-shadow relative','data-z'=>'0.5','data-hover-z'=>'1', 'data-animated'=>''))
						.'
						</div>
					</div>');
				redirect('CourseController/goToAddCourse');
			} else {
				$this->session->set_flashdata('message','<div class="panel panel-default">
					<div class="media v-middle">
						<div class="media-left">
							<div class="bg-red-400 text-white">
								<div class="panel-body">
									<i class="fa fa-close fa-fw fa-2x"></i>
								</div>
							</div>
						</div>
						<div class="media-body">
							<span class="text-body-2">Failed</span> add course
						</div>
					</div>');
				redirect('CourseController/goToAddCourse');
			}
		}
	}