<?php

class Admin_m extends CI_Model {
    
    public function get_all()
    {
      return $this->db->get('admin')->result();
    }
    
    public function insert($data = array())
    {
        $this->db->insert('admin', $data);
    }
    
    public function delete($id)
    {
        $this->db->where('id', $id);
        
        $this->db->delete('admin');
    
    }
    
    public function get_detail($id)
    {
        return $this->db->get_where('admin', array('id' => $id))->row();
    }
    
    public function update($data_admin = array(), $id)
    {
        $this->db->update('admin', $data_admin, array('id' => $id));
    }
    
}