<?php

class User_model extends CI_Model
{
    private $_table = "user";

    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"])
                ->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();
        if (!empty($user)) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
        }
        else {
            $isPasswordTrue = FALSE;
        }
        // jika user terdaftar
        if($user && $isPasswordTrue){

                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->id);
                return true;
            
        }
        
        // login gagal
        if (isset($_POST['submit']) && empty($user)) {
            $this->session->set_flashdata('gagal_login','email/username yang anda masukkan salah');
        }
        elseif (isset($_POST['submit']) && empty($isPasswordTrue)) {
            $this->session->set_flashdata('gagal_login','password yang anda masukkan salah');
        }
        return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id={$user_id}";
        $this->db->query($sql);
    }

}