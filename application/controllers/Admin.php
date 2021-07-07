<?php

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("penjualan_model", "penjualan");
        if($this->user_model->isNotLoginAdmin()) redirect(site_url('login'));
    }

    public function index(){

        $data['username'] = $_SESSION['admin_logged'];
        $data['judul'] = 'Menu Admin';
        
        $this->load->view('templates/header1',$data);
        $this->load->view('admin/admin');
        $this->load->view('templates/footer');
    }

    public function getDataPenjualan($jenis,$tahun) {
        $data['result'] = $this->penjualan->getData($jenis,$tahun);
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
        return $data;
    }

}