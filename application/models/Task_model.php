<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model  {


	// public $table = 'tasks';
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }
    public function create($data)
    {
        $this->db->insert('tasks', $data);
        return $this->db->insert_id();
    }
    public function get_tasks()
    {
        return $this->db->where('is_deleted', 0)->order_by('is_done', 'asc')->order_by('updated_at', 'asc')->get('tasks')->result_array();
    }
    public function update($id, $data)
    {
        $this->db->where("id", $id)->update('tasks', $data);
        return $this->db->insert_id();
    }
   
}