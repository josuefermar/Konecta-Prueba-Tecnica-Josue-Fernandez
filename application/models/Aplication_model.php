<?php

class Aplication_model extends CI_Model{
    
    public $code;
    public $description;
    public $summary;
    public $id_employee;

    public function get_aplications()
    {
        $this->db->select('aplications.*, employees.name')
                    ->from('aplications')
                    ->join('employees', 'employees.id = aplications.id_employee');

        $query = $this->db->get();
        return $query->result();
    }

    public function insert_aplication()
    {
        $this->code = $_POST['code'];
        $this->description = $_POST['description'];
        $this->summary = $_POST['summary'];
        $this->id_employee = $_POST['id_employee'];

        $this->db->insert('aplications', $this);
    }

    public function update_aplication()
    {
        $this->code = $_POST['code'];
        $this->description = $_POST['description'];
        $this->summary = $_POST['summary'];
        $this->id_employee = $_POST['id_employee'];
        
        $this->db->update('aplications', $this, array('id' => $_POST['id']));
    }

    public function create_table(){
        $sql = "CREATE TABLE aplications (
            id INT AUTO_INCREMENT PRIMARY KEY, 
            code VARCHAR(60) NOT NULL,
            description VARCHAR(256) NOT NULL,
            summary VARCHAR(256) NOT NULL,
            id_employee INT NOT NULL,
            FOREIGN KEY (id_employee) REFERENCES employees(id)
        )";
        $query = $this->db->query($sql);
        return $query;
    }

}

?>