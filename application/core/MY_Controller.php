<?php

class MY_Controller extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model(array('product_m', 'cart_m', 'member_m', 'kota_m', 'tarif_m', 'order_m'));
    }
    
    public function kota()
    {
        $prov_id = $this->input->post('prov_id');
        
        $kota = $this->kota_m->get_kota_by_prov_id($prov_id);
        
        $output = '';
        
        if($kota)
        {
            foreach($kota as $result)
            {
                $output .= '<option value="'.$result->id.'">';
                $output .= $result->nama_kota;
                $output .= '</option>';
            }
        }
        
        echo $output;
    }
}