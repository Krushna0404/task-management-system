<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model  {


	// public $table = 'tasks';
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }
    
    public function attempt($data)
	{
		$this->db->where('fullname', $data['username']);
		$this->db->or_where('email', $data['username']);

		$this->db->order_by('id', 'DESC');


		$query = $this->db->get('users');//->result();

		// validate user
		if(!empty($query) && $query->num_rows() > 0){

			// checks the password
			if($query->row()->password == hash( "sha256", $data['password'] )){

				if ($query->row()->is_deleted != 1)
				{
						return 'valid';
				}
				else
				{
					return 'Account is deleted';
				}

			}
			else
				return 'invalid_password'; // if invalid password

		}
        elseif(empty($query->result()))
        {
            return 'User not found';
        }

		return false;

	}

	public function login($row){
		$array = [
			'id' => $row->id,
			'fullname' => $row->fullname,
			'email' => $row->email
		];

		$this->session->set_userdata( $array );

		// echo '<pre>';
		// print_r($array);
		// exit;
	}
   
}