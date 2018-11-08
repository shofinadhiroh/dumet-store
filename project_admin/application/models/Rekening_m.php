<?php

class Rekening_m extends CI_Model {
    
    public function get_all()
    {
      return $this->db->get('no_rekening')->result();
    }
    
    public function insert($data = array())
    {
        $this->db->insert('no_rekening', $data);
    }
    
    public function delete($id)
    {
        $this->db->where('id', $id);
        
        $this->db->delete('no_rekening');
    
    }
    
    public function get_detail($id)
    {
        return $this->db->get_where('no_rekening', array('id' => $id))->row();
    }
    
    public function update($data_rekening = array(), $id)
    {
        $this->db->update('no_rekening', $data_rekening, array('id' => $id));
    }
    
}