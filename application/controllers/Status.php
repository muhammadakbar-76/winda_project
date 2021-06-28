<?php

class Status extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['judul'] = 'Status Pemesanan';
        $data['username'] = $_SESSION['user_logged'];

        $this->load->view('templates/header1',$data);
        $this->load->view('status');
        $this->load->view('templates/footer');
    }
}