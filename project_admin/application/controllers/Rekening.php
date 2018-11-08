<?php

class Rekening extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect('user');
    }
  
    public function index()
    {
        $data['content'] = 'component/insert_rekening';
                
        $this->form_validation->set_rules('no_rekening','No Rekening', 'required');
        $this->form_validation->set_rules('nama_pemegang','Nama Pemegang', 'required');
        $this->form_validation->set_rules('bank','Bank', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            
            $this->rekening_m->insert(
                array(
                    'no_rekening'              =>$this->input->post('no_rekening'),
                    'nama_pemegang'          =>$this->input->post('nama_pemegang'),
                    'bank'           =>$this->input->post('bank')
                    
                )
            );
            
          redirect('rekening');  
        }
        $data['content'] = 'page/rekening';
        $data['rekening'] = $this->rekening_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
    public function remove()
    {
        $id = $this->uri->segment(3);
        
        $this->rekening_m->delete($id);
        
        redirect('rekening');
    }
    
    public function edit($id)
    {
        $id = $this->uri->segment(3);
        
        $data['rekening_detail'] = $this->rekening_m->get_detail($id);
        
        $data['content'] = 'component/edit_rekening';
                
        $this->form_validation->set_rules('no_rekening','No Rekening', 'required');
        $this->form_validation->set_rules('nama_pemegang','Nama Pemegang', 'required');
        $this->form_validation->set_rules('bank','Bank', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            
            if(isset($_POST['update']))
            {
                //tampung data 
                $data_rekening = array(
                    'no_rekening'              =>$this->input->post('no_rekening'),
                    'nama_pemegang'          =>$this->input->post('nama_pemegang'),
                    'bank'           =>$this->input->post('bank')
                    
                );
                
                $id_rekening = $this->rekening_m->get_detail('id');
                
                //panggil model 
                $this->rekening_m->update($data_rekening, $id);
                
                //redirect
                redirect('rekening');
            }
        }
        $data['content'] = 'page/rekening';
        $data['rekening'] = $this->rekening_m->get_all();
            
        $this->load->view('layout', $data);
    }
}