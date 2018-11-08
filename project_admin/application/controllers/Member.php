<?php

class Member extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect('user');
    }
  
    public function index()
    {
        $data['content'] = 'page/member';
        $data['member'] = $this->member_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
   public function approve()
   {
    $id = $this->uri->segment(3);
    $data['member_detail'] = $this->member_m->get_detail($id);
    
        $data_member = array(
            'status' => '1'
        );
                
        $this->member_m->update($data_member, $id);
        redirect('member');
   }
   
   public function decline($id)
   {
    $$id = $this->uri->segment(3);
    $data['member_detail'] = $this->member_m->get_detail($id);
    
        $data_member = array(
            'status' => '0'
        );
                
        $this->member_m->update($data_member, $id);
        redirect('member');
   }
}
   
