<?php

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("admin_model");
        if($this->admin_model->isNotLogin()) redirect(site_url('adminlogin'));
    }

    public function index(){

        $data['username'] = $_SESSION['admin_logged'];
        $data['judul'] = 'Menu Admin';
        
        $this->load->view('templates/header1',$data);
        $this->load->view('admin/admin');
        $this->load->view('templates/footer');
    }

}