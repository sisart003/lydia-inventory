<?php

	class User_model extends CI_Model{

        public function register($enc_password){
			// User data array
			$data = array(
                'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
                'user_level' => $this->input->post('user_level'),
                'password' => $enc_password
			);

			// Insert user
			return $this->db->insert('users', $data);

		}

        // Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

        // Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->result_array();
			} else {
				return false;
			}
		}

    }