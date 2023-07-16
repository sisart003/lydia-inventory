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
				'custodian' => $this->input->post('custodian'),
				'new_custodian' => $this->input->post('new_custodian'),
				'product_desc' => $this->input->post('product_desc'),
				'location' => $this->input->post('location'),
				'property_no' => $this->input->post('property_no'),
				'serial_no' => $this->input->post('serial_no'),
				'atn_no' => $this->input->post('atn_no'),
				'date' => $this->input->post('prod_date'),
				'cost' => $this->input->post('cost'),
				'remarks' => $this->input->post('remarks')
			);

			return $this->db->insert('products', $data);

        }

        

        public function edit_product($id){

            $query = $this->db->get_where('products', array('id' => $id));
			return $query->row_array();
            
        }

        public function update_post(){

			$data = array(
				'custodian' => $this->input->post('custodian'),
				'new_custodian' => $this->input->post('new_custodian'),
				'product_desc' => $this->input->post('product_desc'),
				'location' => $this->input->post('location'),
				'property_no' => $this->input->post('property_no'),
				'serial_no' => $this->input->post('serial_no'),
				'atn_no' => $this->input->post('atn_no'),
				'date' => $this->input->post('prod_date'),
				'cost' => $this->input->post('cost'),
				'remarks' => $this->input->post('remarks')
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