<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
    {

        // Check login
		if(!$this->session->userdata('logged_in')){
			redirect('login');
		}

        $data['title'] = 'Dashboard';
        $data['products'] = $this->product_model->get_products();

		$this->load->view('templates/header', $data);
        $this->load->view("templates/navbar");
		$this->load->view('index', $data);
		$this->load->view('templates/footer');

	}

    public function dashboard(){
        // Check login
		if(!$this->session->userdata('logged_in')){
			redirect('login');
		}

        $data['title'] = 'Dashboard';
        $data['products'] = $this->product_model->get_products();

		$this->load->view('templates/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
    }

    public function create(){

        // Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must Login First');
				redirect('login');
			}

        $data['title'] = "Create Product";

		$this->form_validation->set_rules('custodian', 'Custodian', 'required');
        $this->form_validation->set_rules('new_custodian', 'New Custodian', 'required');
        $this->form_validation->set_rules('product_desc', 'Product Description', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('property_no', 'Property No.', 'required');
        $this->form_validation->set_rules('serial_no', 'Serial No.', 'required');
        $this->form_validation->set_rules('atn_no', 'ATN No.', 'required');
        $this->form_validation->set_rules('prod_date', 'Date', 'required');
        $this->form_validation->set_rules('cost', 'Cost', 'required');
        $this->form_validation->set_rules('remarks', 'Remarks', 'required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
			$this->load->view('products/create', $data);
			$this->load->view('templates/footer');

		} else {

			$this->product_model->create_product();

			// Set message
			$this->session->set_flashdata('product_created', 'Product has been Created');

			redirect(base_url());
        }
    }

    public function edit($id){

        // Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must Login First');
				redirect('login');
			}
        
        $data['title'] = "Edit Product";
        $data['product'] = $this->product_model->edit_product($id);

        if(empty($data['product'])){
            show_404();
        }

        $data['title'] = 'Edit Product';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('products/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update(){

        // Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must Login First');
				redirect('login');
			}

        $this->product_model->update_post();

        // Set message
        $this->session->set_flashdata('product_updated', 'Product has been Updated');

        redirect('products');
    }

    public function delete($id){

        // Check login
			if(!$this->session->userdata('logged_in')){
                // Set message
                $this->session->set_flashdata('must_login', 'You must Login First');
				redirect('login');
			}

        $this->product_model->delete_product($id);

        // Set message
        $this->session->set_flashdata('product_deleted', 'Product has been Deleted');

        redirect(base_url());
    }

}
