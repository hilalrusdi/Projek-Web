<?php

class Contact_model{
    private $table = 'contact';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function tambah_data($data)
    {
        $query = "INSERT INTO comment
                    VALUES
                  ('', :name, :email, :massage)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('massage', $data['massage']);

        $this->db->execute();

        return $this->db->rowCount();
    }


}

?>