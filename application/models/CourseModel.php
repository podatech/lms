<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class CourseModel extends CI_Model{
		
		public function insertCourse($data){
			$this->db->insert('course', $data);
			$query = $this->db->affected_rows();
			$id = $this->db->insert_id();
			return array('result'=>$query,'id'=>$id);
		}

		public function sumOfData($id){
			$this->db->select('*');
			$this->db->from('course');

			$where = array(
				'instructor' => $id
			);
			$this->db->where($where);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function data($number,$offset){
			$this->db->select('*');
			$this->db->from('course');
			$this->db->limit($number,$offset);
			$query = $this->db->get();
			return $query->result();
		}
	}