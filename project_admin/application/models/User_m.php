<?php

class User_m extends CI_Model {
    
     public function check_account($nama = '', $password = '')
        {
            return $this->db->get_where('admin',
                array(
                    'nama' => $nama,
                    'password' => $password
                )
            )->row();
        }
}