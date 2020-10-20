<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->model("Users");
	}
	public function index(){
		$this->load->view('login');
	}
	
	public function signup(){
		$this->load->view('signup');
	}
	
	public function save_user(){
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$user_type = $_POST['user_type'];
		$name = $_POST['name'];
		$data = array("username"=>$username, "pwd"=>$pwd, "user_type"=>$user_type, "name"=>$name);
		$this->Users->save_user($data);
		header("Location:index");
	}
	
	public function check_user(){
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$status = $this->Users->check_user($username,$pwd);
		if($status == true){
			header("Location:../Dashboard/homeScreen");
		}
		else{
			header("Location:index");
			$this->session->set_flashdata("msg","Invalid username or password");
		}
	}
}
