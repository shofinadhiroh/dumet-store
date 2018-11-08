<?php

class Products extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect('user');
    }
  
    public function index()
    {
        $data['content'] = 'component/insert_product';
                
        $this->form_validation->set_rules('category_id','Category Id', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('slug','Slug', 'required');

        $this->form_validation->set_rules('price','Price', 'required');
        $this->form_validation->set_rules('color','Color', 'required');
        $this->form_validation->set_rules('description','Description', 'required');
        
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
                $config['upload_path']          = '../images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image1'))
                {
                        $data['errors'] = $this->upload->display_errors();

                        $this->load->view('layout', $data);
                }
                else
                {
                 
                    $images = $this->upload->data();
                               
                       $this->products_m->insert(
                        array(
                            'category_id'              =>$this->input->post('category_id'),
                            'name'          =>$this->input->post('name'),
                            'slug'              =>$this->input->post('slug'),
                            'image1'          => $images['file_name'],
                            'image2'              =>$images['file_name'],
                            'price'          =>$this->input->post('price'),
                            'color'              =>$this->input->post('color'),
                            'description'          =>$this->input->post('description')
                            
                        )
                    );
                    
                  redirect('products');  

                }
                
            
        }
        $data['content'] = 'page/products';
        $data['products'] = $this->products_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
    public function remove()
    {
        $id = $this->uri->segment(3);
        
        $this->products_m->delete($id);
        
        redirect('products');
    }
    
    public function edit($id)
    {
        $id = $this->uri->segment(3);
        
        $data['products_detail'] = $this->products_m->get_detail($id);
        
        $data['content'] = 'component/edit_product';
                
        $this->form_validation->set_rules('category_id','Category Id', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('slug','Slug', 'required');

        $this->form_validation->set_rules('price','Price', 'required');
        $this->form_validation->set_rules('color','Color', 'required');
        $this->form_validation->set_rules('description','Description', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            
                $config['upload_path']          = '../images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image1'))
                {
                        $data['errors'] = $this->upload->display_errors();

                        $this->load->view('layout', $data);
                }
                else
                {
                    
                 
                    if(isset($_POST['update']))
                    {
                        $images = $this->upload->data();
                        //tampung data 
                        $data_products = array(
                            'category_id'              =>$this->input->post('category_id'),
                            'name'          =>$this->input->post('name'),
                            'slug'              =>$this->input->post('slug'),
                            'image1'          => $images['file_name'],
                            'image2'              =>$images['file_name'],
                            'price'          =>$this->input->post('price'),
                            'color'              =>$this->input->post('color'),
                            'description'          =>$this->input->post('description')
                            
                    );
                        
                        $id_product = $this->products_m->get_detail('id');
                        
                        //panggil model 
                        $this->products_m->update($data_products, $id);
                        
                        //redirect
                        redirect('products');
                    }
                }
                
            
        }
        $data['content'] = 'page/products';
        $data['products'] = $this->products_m->get_all();
        
        $this->load->view('layout', $data);
    }
}

