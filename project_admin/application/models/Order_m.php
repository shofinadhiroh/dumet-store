<?php

class Order_m extends CI_Model {
    
    public function get_all()
    {
      return $this->db->get('order')->result();
    }
    
    public function get_detail($id)
    {
        return $this->db->get_where('order', array('id' => (int)$id))->row();
    }
    
    public function update($data_order = array(), $id)
    {
        $this->db->update('order', $data_order, array('id' => $id));
    }
    
}