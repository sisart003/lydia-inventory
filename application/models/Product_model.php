<?php

	class Product_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

        public function get_products(){

			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('products');
			return $query->result_array();

		}

        public function create_product(){

            $data = array(
				'user_id' => $this->session->userdata('id'),
				'product' => $this->input->post('product'),
				'custodian' => $this->input->post('custodian'),
				'location' => $this->input->post('location'),
                'cost' => $this->input->post('cost'),
				'property_no' => $this->input->post('property_no'),
				'serial_no' => $this->input->post('serial_no'),
                'new_custodian' => 'N/A',
                'date_product' => $this->input->post('date_product')
				
			);

			return $this->db->insert('products', $data);

        }

        

        public function edit_product($id){

            $query = $this->db->get_where('products', array('id' => $id));
			return $query->row_array();
            
        }

        public function update_post(){

			$data = array(
				'product' => $this->input->post('product'),
                'location' => $this->input->post('location'),
                'cost' => $this->input->post('cost'),
                'property_no' => $this->input->post('property_no'),
                'serial_no' => $this->input->post('serial_no'),
                'new_custodian' => $this->input->post('new_custodian')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('products', $data);
		}


        public function delete_product($id){

			$this->db->where('id', $id);
			$this->db->delete('products');

			return true;
		}

    }