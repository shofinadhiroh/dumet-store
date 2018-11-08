<?php

class Kota_m extends CI_Model {
    
    public function get_kota_by_prov_id($prov_id)
    {
        return $this->db->get_where('kota', array('provinsi_id' => $prov_id))->result();
    }
    
    public function get_provinsi()
    {
        return $this->db->get('provinsi')->result();
    }
}