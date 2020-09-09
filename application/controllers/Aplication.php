<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplication extends CI_Controller {
	 
	public function show()
	{
		$action = 'show-aplication';
		$this->load->model('aplication_model', 'aplication_model');
		$aplications = $this->aplication_model->get_aplications();
		$this->load->library('session');
		$message = $this->session->flashdata('success');
		$this->load->view('aplication/show', ['action' => $action, 'aplications' => $aplications, 'message' => $message]);
	}

	public function create()
	{
		$action = 'create-aplication';
		$this->load->model('employee_model', 'employee_model');
		$employees = $this->employee_model->get_employees();
		$this->load->view('aplication/create', ['action' => $action, 'employees' => $employees]);
	}

	public function new_aplication(){
		$this->load->model('aplication_model', 'aplication_model');
		$this->load->library('session');
		try {
			$this->aplication_model->insert_aplication($_POST);
			$this->session->set_flashdata('success', 'Se creo la solicitud exitosamente.');
			$this->session->keep_flashdata('success');
		} catch (\Throwable $th) {
			$this->session->set_flashdata('error', 'Ocurrio en error al tratar de guardar la solicitud.');
			$this->session->keep_flashdata('error');
		}
		$this->load->helper('url');
		return redirect('/index.php/Aplication/show');
	}
}
