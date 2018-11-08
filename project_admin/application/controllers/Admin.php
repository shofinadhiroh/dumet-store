<?php

class Admin extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect('user');
    }
  
    public function index()
    {
        $data['content'] = 'component/insert_admin';
                
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            
            $this->admin_m->insert(
                array(
                    'nama'              =>$this->input->post('nama'),
                    'password'          =>$this->input->post('password')
                    
                )
            );
            
          redirect('admin');  
        }
        $data['content'] = 'page/admin';
        $data['admin'] = $this->admin_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
    public function remove()
    {
        $id = $this->uri->segment(3);
        
        $this->admin_m->delete($id);
        
        redirect('admin');
    }
    
    public function edit($id)
    {
        $id = $this->uri->segment(3);
        
        $data['admin_detail'] = $this->admin_m->get_detail($id);
        
        $data['content'] = 'component/edit_admin';
                
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            
            if(isset($_POST['update']))
            {
                //tampung data 
                $data_admin = array(
                    'nama'              =>$this->input->post('nama'),
                    'password'          =>$this->input->post('password')
                    
                );
                
                $id_admin = $this->admin_m->get_detail('id');
                
                //panggil model 
                $this->admin_m->update($data_admin, $id);
                
                //redirect
                redirect('admin');
            }
        }
        $data['content'] = 'page/admin';
        $data['admin'] = $this->admin_m->get_all();
            
        $this->load->view('layout', $data);
    }
}