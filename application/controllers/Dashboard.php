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
		
		public function sales(){
			$this->load->view("sales");
		}

	
		public function inventory(){
			$this->load->view("inventory");
		}
	
		public function suppliers(){
			$this->load->view("suppliers");
		}
		
		public function company(){
			$this->load->view("company");
		}

		public function reports(){
			$this->load->view("reports");
		}

		public function invoices(){
			$this->load->view("products");
		}

		public function products(){
			$data['products'] = $this->Users->get_products();
			$cat_data['category'] = $this->Users->get_cat();
			$both = $data + $cat_data;
			$this->load->view("products",$both);
		}

		public function add_product(){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$type = $_POST['type'];
			$cat = $_POST['category'];
			$data = array('name'=>$name, 'price'=>$price, 'type'=>$type, 'category'=>$cat);
			$this->Users->add_products($data);
			header("Location:../Dashboard/products");
		}
		
		public function add_category(){
			$category = $_POST['category'];
			$cat = array("cat_name"=>$category);
			$this->Users->add_category($cat);
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
			$type = $_POST['type'];
			$category = $_POST['category'];
			$id = $_POST['productid'];
			$data = array('name'=>$name,'price'=>$price, 'type'=>$type, 'category'=>$category);
			$this->Users->update_product($id,$data);
			header("Location:../Dashboard/products");
		}
		
		public function delete_product(){
			$product_id = $_REQUEST['id'];
			$this->Users->delete_product($product_id);
			header("Location:../Dashboard/products");
		}
		
		public function table_data(){
			$name = $_POST['name'];
			$status = $_POST['status'];
			$data = array('name'=>$name, 'status'=>$status);
			$this->Users->add_tables($data);
			header("Location:../Dashboard/tablecheck"); 
		}
		
		public function tablecheck(){
			
		}		
		
	}
?>