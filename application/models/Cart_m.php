<?php

class Cart_m extends CI_Model {
    
    public function index()
    {
        echo $this->cart->total();
        echo '<pre>';
        print_r($this->cart->contents());
    }
    
    public function add($data = array())
    {
        
        $this->cart->insert($data);
    }
    
    public function remove($rowid)
    {
        $data = array(
            'rowid' =>$rowid,
            'qty' => 0
        );
        
        $this->cart->update($data);
    
    }
    
    public function remove_all()
    {
        $this->cart->destroy();
        
        echo 'Cart berhasil dikosongkan';
    }
    
    public function update($data = array())
    {
        
        for($i = 0; $i < count($this->cart->contents()); $i++)
        {
            $data_update = array(
                'rowid' => $data['rowid'][$i],
                'qty' => $data['qty'][$i],
                'options' => array('color' => $data['color'][$i])

            );
            
            
             $this->cart->update($data_update);
        }
    }
}