<?php

class Status extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Status_model','status');
        $this->load->model('User_model','user');
        if($this->user->isNotLogin()) redirect(site_url('login'));
    }

    public function index() {
        $data['judul'] = 'Status Pemesanan';
        $data['username'] = $_SESSION['user_logged'];
        $data['status'] = $this->status->getStatus($_SESSION['user_logged']->id_user);

        $this->load->view('templates/header1',$data);
        $this->load->view('status');
        $this->load->view('templates/footer');
    }
}