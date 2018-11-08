<?php

class Ringkasan extends MY_Controller {
    
    public function index()
    {
        if($this->session->userdata('token')){
            $this->session->unset_userdata('token');
        }
        
        if(! $this->session->userdata('id')) redirect('account');
        
        $data['content'] = 'page/checkout/ringkasan';
        $data['order'] = $this->cart->contents(); //ringkasan pesanan
        $data['member'] = $this->member_m->get_member_by_id($this->session->userdata('id'));
        
        $this->load->view('layout', $data);
    }
    
    public function order_submit()
    {
        $no_token = random_string('numeric', 5);
        
        $this->order_m->order_submit();
        
        $this->session->set_userdata('token', $no_token);
        
        //4. redirect ke halaman finish
        redirect('ringkasan/finish/'. $no_token);
    }
    
    public function finish($token = NULL)
    {
        if($token == NULL or $this->session->userdata('token') == NULL)
        {
            redirect(base_url());
        }
        else
        {
            if($token != $this->session->userdata('token'))
            {
                redirect(base_url());
            }
        }
        
        if($token != $this->session->userdata('token')) redirect(base_url());
        
        if(! $this->session->userdata('kode')) redirect(base_url());
        
        $data['content'] = 'page/checkout/finish';
        $data['order'] = $this->order_m->get_order($this->session->userdata('kode'));
        
        $this->load->view('layout', $data);
    }
}