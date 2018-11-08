<?php

class Tarif_m extends CI_Model {
    
    public function get_provinsi()
    {
        return $this->db->get('ship_provinsi')->result();
    }
    
     public function get_kota($prov_id)
    {
        return $this->db->get_where('ship_kota', array('kota_prov_id' => $prov_id))->result();
    }
    
    public function get_tarif_id($kota_id)
    {
        return $this->db->limit(1)->get_where('ship_tarif', array('kota_tuju_id' => $kota_id))->row('tarif_id');
    }
    
    public function get_hasil_tarif($tarif_id)
    {
        return $this->db->get_where('ship_tarif', array('tarif_id' => $tarif_id))->row();
    }
    
    public function get_provinsi_by_id($provinsi_id)
    {
        return $this->db->get_where('ship_provinsi', array('provinsi_id' => $provinsi_id))->row();
    }
    
    public function get_kota_by_id($kota_id)
    {
        return $this->db->get_where('ship_kota', array('kota_id' => $kota_id))->row();
    }
    
    public function akumulasi($tarif)
    {
        $berat = $this->session->userdata('berat');
        
        if($berat <= 1000)
        {
            return $tarif;
        }
        else
        {
            return $tarif * (ceil($berat / 1000));
        }
    }
    
    public function get_tarif_akhir($order_id)
    {
        return $this->db->get_where('log_pengiriman', array(
                                                        'order_id' => $order_id,
                                                        'member_id' =>$this->session->userdata('id')
                                                        ))->row('tarif_akhir');
    }
    

}