<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {
    
    public $admission_date;
    public $name;
    public $salary;
    
    public function __construct()
    {
        parent::__construct();
    }

    public function get_employees()
    {
        $query = $this->db->get('employees');
        return $query->result();
    }

    public function insert_employee($data)
    {
        $time = strtotime($data['admission_date']);

        $newformat = date('Y-m-d',$time);
        $this->admission_date = $newformat;
        $this->name = $data['name'];
        $this->salary = $data['salary'];

        return $this->db->insert('employees', $this);
    }

    public function update_employee($data)
    {
        $time = strtotime($data['admission_date']);

        $newformat = date('Y-m-d',$time);
        $this->admission_date = $newformat;
        $this->name = $data['name'];
        $this->salary = $data['salary'];

        return $this->db->update('employees', $this, array('id' => $data['id']));
    }

    public function create_table(){
        $sql = "CREATE TABLE employees (
            id INT AUTO_INCREMENT PRIMARY KEY, 
            admission_date DATE  NOT NULL,
            name text NOT NULL,
            salary FLOAT NOT NULL
        )";
        $query = $this->db->query($sql);
        return $query;
    }

}

?>