<?php

class Pesan_model extends CI_Model {
    private $_table = "pemesanan";

    public function postPesanan() {
        $post = $this->input->post();
        $this->id_user = $post['id_user'];
        $this->kd_barang = $post['kd_barang'];
        $this->harga_total = $post["harga_total"];
        $this->total_brg = $post["total_brg"];
        $this->status = $post["status"];
        $this->db->insert($this->_table, $this);
    }

}