<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

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
		$this->load->view('task');
	}

	public function list()
	{
		$data = $this->task_model->get_tasks();
		echo json_encode($data);
	}

	public function add()
	{

		$data = $_POST;		
		$id = $this->task_model->create([
			'title' => $data['title'],
			'description' => $data['description'],
			'is_done' => 0,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'is_deleted' => 0
		]);		
		echo json_encode($id);
	}
	
	public function update()
	{
		$data = $_POST;
		if(isset($data['is_deleted']) && $data['is_deleted'] == 1)
		{
			$id = $this->task_model->update($data['id'], [
				'updated_at' => date('Y-m-d H:i:s'),
				'is_deleted' => $data['is_deleted']
			]);
		}
		else if(isset($data['is_done']) && $data['is_done'] == 1 || $data['is_done'] == 0)
		{
			$id = $this->task_model->update($data['id'], [
				'updated_at' => date('Y-m-d H:i:s'),
				'is_done' => $data['is_done']
			]);
		}
		else{

			$id = $this->task_model->update($data['id'], [
				'title' => $data['title'],
				'description' => $data['description'],
				'is_done' => $data['is_done'],
				'updated_at' => date('Y-m-d H:i:s'),
				'is_deleted' => $data['is_deleted']
			]);		
		}
		echo json_encode($id);
	}
}
