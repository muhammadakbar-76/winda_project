<?php 

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['judul'] = "Selamat Datang";
        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}

?>
