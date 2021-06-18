<?php

class Donate_model{
    private $table = 'donate';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function tambah_donate($data)
    {
        $query = "INSERT INTO donate
                    VALUES
                  ('', :nama_depan, :nama_belakang, :kota, :negara, :kode_pos, :email, :bank, :no_rekening, :jumlah_donasi)";

        $this->db->query($query);
        $this->db->bind('nama_depan', $data['nama_depan']);
        $this->db->bind('nama_belakang', $data['nama_belakang']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('negara', $data['negara']);
        $this->db->bind('kode_pos', $data['kode_pos']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('bank', $data['bank']);
        $this->db->bind('no_rekening', $data['no_rekening']);
        $this->db->bind('jumlah_donasi', $data['jumlah_donasi']);

        $this->db->execute();

        return $this->db->rowCount();
    }


}

?>