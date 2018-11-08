<?php

class Member_area extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->session->userdata('is_login') == TRUE || redirect(base_url());
    }
    
    public function index()
    {
        $data['content'] = 'page/member_area/profile';
        
        $this->db->select('member.*, kota.nama_kota, provinsi.nama_provinsi');
        $this->db->from('member');
        $this->db->join('kota', 'member.kota = kota.id');
        $this->db->join('provinsi', 'member.provinsi = provinsi.id');
        $this->db->where('member.id', $this->session->userdata('id'));
        
        $data['member'] = $this->db->get()->row();
       
        $this->load->view('layout', $data);
        
    }
    
     public function edit_profile()
    {
        $data['content'] = 'page/member_area/edit_profile';
        
        $this->db->select('member.*, kota.nama_kota, provinsi.nama_provinsi');
        $this->db->from('member');
        $this->db->join('kota', 'member.kota = kota.id');
        $this->db->join('provinsi', 'member.provinsi = provinsi.id');
        $this->db->where('member.id', $this->session->userdata('id'));
        
        $data['member'] = $this->db->get()->row();
        
        $data['provinsi'] = $this->db->get('provinsi')->result();
        $data['kota'] = $this->db->get('kota')->result();
        
        if(isset($_POST['submit']))
        {
            //proses edit
        }
        
        $this->load->view('layout', $data);
    }
    
     public function order()
    {
        $data['content'] = 'page/member_area/order';
        $data['order'] = $this->order_m->get_all();
        
        $this->load->view('layout', $data);
    }
    
     public function order_detail()
    {
        $data['content'] = 'page/member_area/order_detail';
        
        $kode = $this->uri->segment(3);
        
        
        $data['order'] = $this->order_m->get_by_kode($kode);
        $data['order_detail'] = $this->order_m->get_detail($kode);
        
        $this->load->view('layout', $data);
    }
    
     public function konfirmasi()
    {
        $data['content'] = 'page/member_area/konfirmasi';
        
        $kode = $this->uri->segment(3);
        $order = $this->db->get_where('order', array('kode' => $kode))->row();
        if(empty($order)) redirect('member_area');
        
        $data['order_id'] = $order->kode;
        
        $data['no_rek'] = $this->db->get('no_rekening')->result();
        
        if(isset($_POST['konfirmasi_submit']))
        {
            $data = array(
                    'order_id' => $this->input->post('order_id'),
                    'rekening_tujuan' => $this->input->post('rekening_tujuan'),
                    'rekening_member' => $this->input->post('rekening_member'),
                    'nama_pemegang' => $this->input->post('nama_pemegang'),
                    'nominal' => $this->input->post('nominal'),
                    'tanggal' => $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('date')
            );
            
            $this->db->insert('konfirmasi', $data);
            
            $this->session->set_flashdata('success', 'Konfirmasi pembayaran anda telah kami terima');
            
            redirect('member_area/order_detail/'.$kode);
        }
        
        $this->load->view('layout', $data);
    }
    
     public function wishlist()
    {
        $data['content'] = 'page/member_area/wishlist';
        
        $this->db->select('products.*, wishlist.id as wishlist_id');
        $this->db->from('wishlist');
        $this->db->join('products', 'wishlist.product_id = products.id');
        $this->db->where('wishlist.member_id', $this->session->userdata('id'));
        
        $data['wishlist'] = $this->db->get()->result();
        
        $this->load->view('layout', $data);
    }
    
    public function remove_wishlist()
    {
        $id = $this->uri->segment(3);
        
        $this->db->delete('wishlist', array('id' =>$id));
        
        $this->session->set_flashdata('remove_success', 'Product berhasil dihapus dari wishlist');
        
        redirect('member_area/wishlist');
    }
}