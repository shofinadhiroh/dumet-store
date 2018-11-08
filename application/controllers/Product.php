<?php

class Product extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('token')){
            $this->session->unset_userdata('token');
        }
        
    }
    
    public function detail()
    {
        $id = $this->uri->segment(3);
        
        $data['content'] = 'page/Product/detail';
        
        $data['product'] = $this->product_m->get_detail($id);
        
        $this->load->view('layout', $data);
    }
}