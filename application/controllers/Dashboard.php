<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {
		function __construct() 
		{ parent::__construct(); 
		$this->load->library("session");
		$this->load->model("Users"); 
		} 
		
		public function homeScreen(){
			$this->load->view("homeScreen");
		}
	
		public function inventory(){
			$this->load->view("products");
		}
	
		public function suppliers(){
			$this->load->view("products");
		}
		
		public function company(){
			$this->load->view("products");
		}

		public function reports(){
			$this->load->view("products");
		}

		public function invoices(){
			$this->load->view("products");
		}

		public function products(){
			$data['products'] = $this->Users->get_products();
			$this->load->view("products",$data);
		}

		public function add_product(){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$data = array('name'=>$name, 'price'=>$price);
			$this->Users->add_products($data);
			header("Location:../Dashboard/products");
		}
		
		public function edit_products(){
			$product_id = $_REQUEST['id'];
			$data['details'] = $this->Users->get_product_data($product_id);
			$this->load->view("edit_product",$data);
		}
		
		public function update_product(){
			$name = $_POST['pname'];
			$price = $_POST['pprice'];
			$id = $_POST['productid'];
			$data = array('name'=>$name,'price'=>$price);
			$this->Users->update_product($id,$data);
			header("Location:../Dashboard/products");
		}
		
		public function delete_product(){
			$product_id = $_REQUEST['id'];
			$this->Users->delete_product($product_id);
			header("Location:../Dashboard/products");
		}
	}
?>