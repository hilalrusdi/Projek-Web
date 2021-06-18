<?php

class Donate extends Controller {
    public function index()
    {
        $data['judul'] = 'Donate';
        $this->view('templates/header', $data);
        $this->view('donate/index');
        $this->view('templates/footer', $data);
        
    }

    public function input_donation(){
        if ($this->model('Donate_Model')->tambah_donate($_POST) > 0){
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/donate');
            exit;
        } else {
            flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/donate');
            exit;
        }
    }
}

?>