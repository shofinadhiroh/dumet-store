<?php

class Order extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect('user');
    }
  
    public function index()
    {
        $data['content'] = 'page/order';
        $this->db->select("order.*, member.nama_depan");
        $this->db->join('member', 'member.id = order.member_id');
        $data['order'] = $this->order_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
   public function approve()
   {
    $id = $this->uri->segment(3);
    $data['order_detail'] = $this->order_m->get_detail($id);
    
        $data_order = array(
            'status' => '1'
        );
                
        $this->order_m->update($data_order, $id);
        redirect('order');
   }
   
   public function decline($id)
   {
    $id = $this->uri->segment(3);
    $data['order_detail'] = $this->order_m->get_detail($id);
    
        $data_order = array(
            'status' => '0'
        );
                
        $this->order_m->update($data_order, $id);
        redirect('order');
   }
}
   
