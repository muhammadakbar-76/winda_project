<?php

class Adminlogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->admin_model->doLogin()) redirect(site_url('admin'));
        }

        // tampilkan halaman login
        $this->load->view("admin/login");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('adminlogin'));
    }
}