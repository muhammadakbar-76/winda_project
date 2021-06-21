<?php

class Barang extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'user');
        if($this->user->isNotLogin()) redirect(site_url('login'));
    }

    public function index() {
        $data['judul'] = "Pesan Barang";
        if (isset($_SESSION['user_logged'])) {
            $nama = json_decode(json_encode($_SESSION['user_logged']), true);
            $data['username'] = $nama['username'];
        }
        $this->load->view('templates/header1', $data);
        $this->load->view('barang');
        $this->load->view('templates/footer');
    }

}