<?php

class MY_Controller extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model(array('products_m', 'rekening_m', 'order_m', 'user_m', 'admin_m', 'member_m'));
    }
    
}