<?php

class Product_m extends CI_Model {
    
    public function get_all()
    {
      return $this->db->get('products')->result();
    }
    
    public function get_detail($id = NULL)
    {
        $product = $this->db->get_where('products', array('id' => (int)$id))->row();
        
        if($product->color)
        {
            $product->color = explode(', ', $product->color);
            //explode: mengubah string menjadi array
            //$abc = A, B, C
            //explode (', ', $abc);
            //array('A', 'B', 'C');
        }
        
        return $product;
    }
}