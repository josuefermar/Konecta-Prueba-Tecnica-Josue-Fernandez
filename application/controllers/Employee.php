<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	
	public function show()
	{
		$action = 'show-employee';
		$this->load->model('employee_model', 'employee_model');
		$employees = $this->employee_model->get_employees();
		$this->load->library('session');
		$message = $this->session->flashdata('item');
		$this->load->view('employee/show', ['action' => $action, 'employees' => $employees, 'message' => $message]);
	}

	public function create()
	{
		$action = 'create-employee';
		$this->load->view('employee/create', ['action' => $action]);
	}

	public function new_employee()
	{
		$this->load->model('employee_model', 'employee_model');
		$this->load->library('session');
		try {
			$this->employee_model->insert_employee($_POST);
			$this->session->set_flashdata('success', 'Se registro el empleado exitosamente.');
			$this->session->keep_flashdata('success');
		} catch (\Throwable $th) {
			$this->session->set_flashdata('error', 'Ocurrio en error al tratar de registrar al empleado.');
			$this->session->keep_flashdata('error');
		}
		$this->load->helper('url');
		return redirect('/index.php/Employee/show');
	}
}
