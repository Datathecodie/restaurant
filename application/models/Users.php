<?php
	defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Users extends CI_Model {
		var $db; 
		function __construct()
		{ parent::__construct(); 
			$this->db = $this->load->database("default", TRUE);  //for db connection
		}
		
		public function save_user($data){
			$this->db->insert("users",$data);
			return true;
		}
		
		public function check_user($username,$pwd){
			$res = $this->db->query("select * from users where username='$username'&& pwd='$pwd'");
			if($res->num_rows()>0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function add_products($data){
			$this->db->insert("products",$data);
		}
		
		public function get_products(){
			$sql = $this->db->get("products");
			return $sql->result();
		}
		
		public function get_product_data($product_id){
			$res = $this->db->query("select * from products where id='$product_id'");
			return $res->row();
		}
		
		public function update_product($id,$data){
			$this->db->where('id',$id);
			$this->db->update('products',$data);
			return;
		}
		
		public function delete_product($product_id){
			$res = $this->db->query("delete from products where id='$product_id'");
			return true;
		}
	}