<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $page_data;

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Login_model', 'login_model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');

		if($this->session->userdata('id')){
			// echo "asdfghjkl";
			// exit;
			redirect('task','refresh');
		}
		
    }


	public function index()
	{
		$this->load->view('login');
	}

    public function check()
	{
		$data = $_POST;
		$username = $data['email'];
        $password = $data['psw'];

        $attempt = $this->login_model->attempt( compact('username', 'password') );

		if($attempt == 'valid')
		{
			$user = $this->db->where( 'email', $username )->order_by('id','desc')->get('users')->row();
        	$this->login_model->login($user);
			
			// echo '<pre>';
			// print_r($user);
			// exit;

			// redirect('task');
			// $this->session->set_userdata('uname', $username);
		}
		else{
			$this->session->set_flashdata('danger', $attempt);


			redirect('login'); 
		}

        redirect('task','refresh');

	}

	public function logout(){
		// $this->session->sess_destroy();
		echo 'hi';
		exit;
	}
	
}
