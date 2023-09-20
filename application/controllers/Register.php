<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public $page_data;

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Register_model', 'register_model');
		$this->load->helper('form');
		$this->load->helper('url');
    }


	public function index()
	{
		$this->load->view('register');
	}

    public function save()
	{
		$data = $_POST;		
		// echo '<pre>';
		// print_r($data);
		// exit;
		$id = $this->register_model->create([
			'fullname' => $data['fullname'],
			'email' => $data['email'],
			'password' => hash( "sha256", $data['psw'] ),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'is_deleted' => 0
		]);		
		
		if($id){
			redirect('login','refresh');
		}
	}
	
}
