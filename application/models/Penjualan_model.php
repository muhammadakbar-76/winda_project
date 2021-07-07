<?php

class Penjualan_model extends CI_Model {
    
    public function getData($jenis,$tahun) {
        $this->db->where('kd_barang', $jenis);
        $this->db->like('tgl_penjualan', $tahun);
        return $this->db->get('penjualan')->result_array();
    }
}