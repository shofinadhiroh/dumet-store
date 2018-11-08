<?php

class Products_m extends CI_Model {
    
    public function get_all()
    {
      return $this->db->get('products')->result();
    }
    
    public function insert($data = array())
    {
        $this->db->insert('products', $data);
    }
    
    public function delete($id)
    {
        $this->db->where('id', $id);
        
        $this->db->delete('products');
    }
    
    public function get_detail($id)
    {
        return $this->db->get_where('products', array('id' => $id))->row();
    }
    
    public function update($data_products = array(), $id)
    {
        $this->db->update('products', $data_products, array('id' => $id));
    }
    
}