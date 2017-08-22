<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class AuthenticationModel extends CI_Model{
		
		public function checkLogin($username, $password){
			$this->db->select('*');
			$this->db->from('login');

			$where = array(
				'username' => $username,
				'password' => $password,
				'status' => 'Aktif'
			);

			$this->db->where($where);
			$query = $this->db->get();

			return $query->num_rows();
		}

		public function dataLogin($username, $password){
			$this->db->select('*');
			$this->db->from('login');

			$where = array(
				'username' => $username,
				'password' => $password
			);

			$this->db->where($where);
			$query = $this->db->get();

			return $query->result();
		}
	}