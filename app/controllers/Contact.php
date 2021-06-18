<?php

class Contact extends Controller {
    public function index()
    {
        $data['judul'] = 'Contact Us';
        // $data['nama'] = $this->model('comment_model')->input_comment();
        $this->view('templates/header', $data);
        $this->view('contact/index');
        $this->view('templates/footer', $data);

    }

    public function input_comment(){
        if ($this->model('Contact_Model')->tambah_data($_POST) > 0){
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/contact');
            exit;
        } else {
            flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/contact');
            exit;
        }
    }
}

?>