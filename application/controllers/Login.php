<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->user_model->doLogin()) {
                if ($_SESSION['admin_logged']) {
                    redirect(site_url('admin'));
                } else {
                    redirect(site_url('barang'));
                }
            }
        }

        // tampilkan halaman login
        $this->load->view("login");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(base_url());
    }
}