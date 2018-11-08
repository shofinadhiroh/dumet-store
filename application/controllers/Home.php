<?php

class Home extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('token')){
            $this->session->unset_userdata('token');
        }
        
    }
    
    public function index()
    {
        $data['content'] = 'page/home/index';
        $data['products'] = $this->product_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata(array('id', 'nama', 'email', 'is_login'));
        
        redirect(base_url());
    }
}