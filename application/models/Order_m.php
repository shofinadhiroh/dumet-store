<?php

class Order_m extends CI_Model {
    
    public function order_submit()
    {
        //proses order submit
        
        //1. Memasukkan data pesanan ke dalam table order
        $orderData = array(
            'status'              => 0,
            'member_id'           => $this->session->userdata('id'),
            'total_product'       => count($this->cart->contents()),
            'total_qty'           => $this->cart->total_items(),
            'total_harga'         => $this->cart->total(),
            'tarif_pengiriman_id' => $this->session->userdata('tarif_id')
        );
        
        $this->db->insert('order', $orderData);
        
        //Masukkan kode/id order history
        $id = $this->db->insert_id();
        $kode = $id . random_string('alnum', 7);
        
        $this->db->update('order', array('kode' => $kode), array('id' => $id));
        
        //2. memasukkan pesanan ke dalam order detail
        foreach($this->cart->contents() as $item)
        {
            $order_detailData = array(
                'order_id'   => $id,
                'product_id' => $item['id'],
                'options'    => $item['options']['color'],
                'qty'        => $item['qty'],
                'sub_total'  => $item['subtotal']
            );
            
            $this->db->insert('order_detail', $order_detailData);
        }
        
        //3. melakukan pengiriman detail pesanan ke email
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        
        $this->email->from('info@dumetstore.com', 'DUMET Store');
        $this->email->to($this->session->userdata('email'));
        $this->email->subject('Pesanan Anda');
        $this->email->message($this->load->view('page/email/order_history', null, TRUE));

        $this->email->send();
        
        //memasukkan data ke dalam log pengiriman
        $data_pengiriman = array(
                            'member_id' =>$this->session->userdata('id'),
                            'order_id'  =>$id,
                            'tarif_id'  =>$this->session->userdata('tarif_id'),
                            'berat'     =>$this->session->userdata('berat'),
                            'layanan_yang_dipilih' =>$this->session->userdata('layanan_yang_dipilih'),
                            'tarif_akhir'=>$this->session->userdata('tarif_akhir')
        );
        
        $this->db->insert('log_pengiriman', $data_pengiriman);
        
        //4. buat session order kode/id
        $this->session->set_userdata('kode', $kode);
        
        $this->cart->destroy();
        
        
    }
    
    public function get_order($kode)
    {
        return $this->db->get_where('order', array('kode' => $kode))->row();
    }
    
    public function get_all()
    {
        return $this->db->get_where('order', array('member_id' => $this->session->userdata('id')))->result();
    }
    
    public function get_detail($kode)
    {
        $order_id = $this->db->get_where('order', array('kode' => $kode))->row('id');
        
        $this->db->select('od.*, p.name, p.price');
        $this->db->from('order_detail od');
        $this->db->join('products p', 'od.product_id = p.id');
        $this->db->where('od.order_id', $order_id);
        
        return $this->db->get()->result();
    }
    
    public function get_by_kode($kode)
    {
        return $this->db->get_where('order', array('kode' => $kode))->row();
    }
}