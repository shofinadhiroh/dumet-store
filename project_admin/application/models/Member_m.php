<?php

class Member_m extends CI_Model {
    
    public function get_all()
    {
      return $this->db->get('member')->result();
    }
    
    public function get_detail($id)
    {
        return $this->db->get_where('member', array('id' => (int)$id))->row();
    }
    
    public function update($data_order = array(), $id)
    {
        $this->db->update('member', $data_order, array('id' => $id));
    }
    
}