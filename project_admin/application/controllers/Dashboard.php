<?php

class Dashboard extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect('user');
    }

    public function index()
    {
        $data['content'] = 'page/dashboard';
        
        $this->load->view('layout', $data);
        
    }
}