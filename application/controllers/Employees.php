<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

    // Register user
		public function register(){
			// Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must be an Admin');
				redirect('login');
			}

			if(!$this->session->userdata('role') == 1){
				redirect(base_url());
			}

			$data['title'] = 'Register Employee';

			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('contact', 'Contact', 'required|callback_check_contact_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confpassword', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navbar');
				$this->load->view('employees/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				$config = array(
					'upload_path' =>  './assets/images/',
					'allowed_types' => 'jpg|png',
					'max_size' => '10000',
					'max_width' => '50000',
					'max_height' => '50000'
				);

				$this->load->library('upload');
				$this->upload->initialize($config);

				if(!$this->upload->do_upload()){

					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'no-image.png';

				} else {

					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];

				}
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->employee_model->register($post_image, $enc_password);

				// Set message
				$this->session->set_flashdata('employee_registered', 'Successfully Registered');

				redirect(base_url().'employees/view_all_employees');
			}
		}

        // Check if username exists
		public function check_contact_exists($contact){
			$this->form_validation->set_message('check_contact_exists', 'That Contact is Registered');
			if($this->employee_model->check_contact_exists($contact)){
				return true;
			} 
			return false;
		}

		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That Email is taken.');
			if($this->employee_model->check_email_exists($email)){
				return true;
			}
			return false;
		}

        // Log in user
		public function login(){
			$data['title'] = 'PMS Inventory Portal';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('employees/login', $data);
			} else {
				
				// Get username
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$employee = $this->employee_model->login($email, $password);
				// echo $this->db->last_query();

				if($employee){

					$employee_data = array(
						'id'  => $employee['id'],
						'first_name' => $employee['first_name'],
						'last_name' => $employee['last_name'],
						'email' => $email,
						'contact' => $employee['contact'],
						'role' => $employee['role'],
						'employee_picture' => $employee['employee_picture'],
						'logged_in' => true
					);

					$this->session->set_userdata($employee_data);

					// Set message
					$this->session->set_flashdata('employee_loggedin', 'Employee logged in');

					redirect(base_url());
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('login');
				}		
			}
		}

		// View All Employees
		public function view_all_employees()
		{
			// Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must be an Admin');
				redirect('login');
			}

			if(!$this->session->userdata('role') == 1){
				redirect(base_url());
			}
			$data['title'] = 'Employees List';

			$data['employees'] = $this->employee_model->get_employees();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('employees/view_all_employee', $data);
			$this->load->view('templates/footer');
		}

		// View Single Employee
		public function view_single_employee($id = NULL)
		{
			// Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must be an Admin');
				redirect('login');
			}

			if(!$this->session->userdata('role') == 1){
				redirect(base_url());
			}
			$data['title'] = 'Employee';

			$data['employee'] = $this->employee_model->single_employee($id);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('employees/single_employee', $data);
			$this->load->view('templates/footer');
		}

        public function logout(){
            
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('employee');
			$this->session->unset_userdata('employee_id');
			$this->session->unset_userdata('role');
			$this->session->unset_userdata('first_name');
			$this->session->unset_userdata('last_name');

			// Set message
			$this->session->set_flashdata('employee_logout', 'Employee logged out');

			redirect('login');

		}

		public function edit_employee($id){

			// Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must be an Admin');
				redirect('login');
			}

			if(!$this->session->userdata('role') == 1){
				redirect(base_url());
			}
        	$data['employee'] = $this->employee_model->edit_employee($id);

			$data['title'] = 'Update Employee';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('employees/edit_employee', $data);
			$this->load->view('templates/footer');

		}

		public function update_employee(){

			// Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must be an Admin');
				redirect('login');
			}

			if(!$this->session->userdata('role') == 1){
				redirect(base_url());
			}
	
			$this->employee_model->update_employee();
	
			// Set message
			$this->session->set_flashdata('employee_updated', 'Employee has been Updated');
	
			redirect('employees/view_all_employees');
		}

}