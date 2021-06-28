<?php

class Status_model extends CI_Model {
    
    public function getStatus($id_user) {
        $this->db->where('id_user',$id_user);
        $this->db->where('status !=','selesai');
        return $this->db->get('pemesanan')->row_array();
    }

}