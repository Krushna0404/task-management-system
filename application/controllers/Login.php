<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $page_data;

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Task_model', 'task_model');
		$this->load->helper('form');
		$this->load->helper('url');
    }


	public function index()
	{
		$this->load->view('login');
	}

    public function save()
	{
		$data = $_POST;		
		$id = $this->task_model->create([
			'fullname' => $data['fullname'],
			'email' => $data['email'],
			'password' => hash( "sha256", $data['password'] ),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'is_deleted' => 0
		]);		
		echo json_encode($id);
	}
	
}
