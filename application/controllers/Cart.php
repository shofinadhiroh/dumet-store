<?php

class Cart extends MY_Controller {
    
        public function __construct()
        {
            parent::__construct();
            if($this->session->userdata('token')){
                $this->session->unset_userdata('token');
            }
            
        }
        
        public function index()
        {
            $data['content'] = 'page/cart/index';
            $data['items'] = $this->cart->contents();
        
            $this->load->view('layout', $data);
        }
        
        public function add()
        {
            if(isset($_POST['add_to_wishlist']))
            {
                //1. Mendapatkan data product berdasarkan id
                $product = $this->product_m->get_detail($this->input->post('id'));
                
                $wishlist = $this->db->get_where('wishlist', array(
                    'product_id' => $product->id,
                    'member_id' => $this->session->userdata('id')
                ));
                
                if($wishlist->num_rows() > 0)
                {
                    $alert_message = 'Produk sudah dimasukkan ke wishlist';
                
                    $this->session->set_flashdata('failed_wishlist', $alert_message);
                    
                    redirect('product/detail/'.$product->id.'/'.$product->slug);
                }
                
                $data = array(
                    'product_id'    => $product->id,
                    'member_id'     => $this->session->userdata('id')
                );
                
                $this->db->insert('wishlist', $data);
                
                $alert_message = 'Produk dimasukkan ke wishlist';
                
                $this->session->set_flashdata('success_wishlist', $alert_message);
                
                redirect('product/detail/'.$product->id.'/'.$product->slug);
                
            }
            
            if(isset($_POST['add_to_cart']))
            {
                //1. Mendapatkan data product berdasarkan id
                $product = $this->product_m->get_detail($this->input->post('id'));
  
                
                //2. Masukkan data ke cart
                $data = array(
                    'id'        =>$product->id,
                    'name'      =>$product->name,
                    'qty'       =>$this->input->post('qty'),
                    'price'     => $product->price,
                    'options'   =>array('color' => $this->input->post('color'))
                );
                
                //echo '<pre>';
                //print_r($data);
                //echo '</pre>';
                $this->cart_m->add($data);
                
                $alert_message = '<a href="'.site_url('cart').'" class = "form-control btn btn-warning"> Got to Cart &raquo;</a>';
                
                $this->session->set_flashdata('success', $alert_message);
                
                redirect('product/detail/'.$product->id.'/'.$product->slug);
            }
        }
        
        public function remove()
        {
            $data = array(
                $this->cart_m->remove($this->uri->segment(3))
                
            );
            
             $alert_message = '<p class = "alert alert-success"> 1 item berhasil dihapus &raquo;</p>';
                
            $this->session->set_flashdata('success', $alert_message);
            
            redirect('cart');
        }
        
        public function update()
        {
            $data = array(
                'rowid' => $this->input->post('rowid'),
                'qty'   => $this->input->post('qty'),
                'color' => $this->input->post('color')
            );

            $this->cart_m->update($data);
            
            
            $alert_message = '<p class = "alert alert-success"> Shopping Cart berhasil diupdate &raquo;</p>';
                
            $this->session->set_flashdata('success', $alert_message);
            
            redirect ('cart');
        }
}