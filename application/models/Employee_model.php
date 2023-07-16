<?php

	class Employee_model extends CI_Model{

        public function register($post_image, $enc_password){

			$employee_id_generate = rand(100000, 999999);

			// User data array
			$data = array(
				'employee_id' => $employee_id_generate,
                'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'contact' => $this->input->post('contact'),
                'password' => $enc_password,
				'employee_picture' => $post_image
			);

			// Insert user
			return $this->db->insert('employees', $data);

		}

        // Check contact exists
		public function check_contact_exists($contact){
			$query = $this->db->get_where('employees', array('contact' => $contact));
			if(empty($query->row_array())){
				return true;
			}
			return false;
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('employees', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			}
			return false;
		}

		// Get All Employees
		public function get_employees($id = FALSE)
		{
			if($id === FALSE){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('employees');
				return $query->result_array();
			}

			$query = $this->db->get_where('employees', array('id' => $id));
			return $query->row_array();
		}

		// Get Single Employee
		public function single_employee($employee_id = FALSE){

			if($employee_id === FALSE){
				$query = $this->db->get('employees');
				return $query->result_array();
			}

			$query = $this->db->get_where('employees', array('employee_id' => $employee_id));
			return $query->row_array();
		}

        // Log user in
		public function login($employee_id, $password){
			// Validate
			$this->db->where('employee_id', $employee_id);
			$this->db->where('password', $password);

			$result = $this->db->get('employees');

			if($result->num_rows() == 1){
				return $result->row_array();
			}
			return false;
		}

		public function edit_employee($id){

            $query = $this->db->get_where('employees', array('id' => $id));
			return $query->row_array();
            
        }

        public function update_employee(){

			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'contact' => $this->input->post('contact'),
				'role' => $this->input->post('role')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('employees', $data);
		}

    }