<?php

class Barang extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->model('barang_model', 'barang');
        $this->load->model('pesan_model', 'pesan');
        if($this->user->isNotLogin()) redirect(site_url('login'));
    }

    public function index() {
        $data['judul'] = "Pesan Barang";
        $data['barang'] = $this->barang->getBarang();
        $data['username'] = $_SESSION['user_logged'];

        $this->load->view('templates/header1', $data);
        $this->load->view('barang',$data);
        $this->load->view('templates/footer');
    }

    public function pesan() {
        $this->pesan->postPesanan();
        redirect(base_url('status'));
    }

}