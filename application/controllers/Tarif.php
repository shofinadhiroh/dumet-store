<?php

class Tarif extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('token')){
            $this->session->unset_userdata('token');
        }
        
    }
    
    public function index()
    {
        $data['content'] = 'page/checkout/tarif';
        $data['provinsi'] = $this->tarif_m->get_provinsi();
        
        if($this->session->userdata('tarif_id'))
        {
            $data['tarif'] = $this->tarif_m->get_hasil_tarif($this->session->userdata('tarif_id'));
        
            $data['provinsi_asal'] = $this->tarif_m->get_provinsi_by_id($data['tarif']->prov_asal_id)->provinsi_nama;
            $data['kota_asal'] = $this->tarif_m->get_kota_by_id($data['tarif']->kota_asal_id)->kota_nama;
            $data['provinsi_tujuan'] = $this->tarif_m->get_provinsi_by_id($data['tarif']->prov_tuju_id)->provinsi_nama;
            $data['kota_tujuan'] = $this->tarif_m->get_kota_by_id($data['tarif']->kota_tuju_id)->kota_nama;
        }
        
        
        $this->load->view('layout', $data);
    }
    
    public function get_kota()
    {
        $prov_id = $this->input->post('prov_id');
        $kota = $this->tarif_m->get_kota($prov_id);
        
        $output = '';
        
        foreach($kota as $kota)
        {
            $output .= '<option value="'.$kota->kota_id.'">';
            $output .= $kota->kota_nama;
            $output .= '</option>';
        }
        
        
        echo $output;
        
    }
    
    public function cek_tarif()
    {
        $this->form_validation->set_rules('provinsi_tujuan','Provinsi Tujuan', 'required');
        $this->form_validation->set_rules('kota_tujuan','Kota Tujuan', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            //proses cek tarif
            $kota_id = $this->input->post('kota_tujuan');
            $berat = $this->input->post('berat');
            
            $this->session->set_userdata(array(
                'tarif_id' => $this->tarif_m->get_tarif_id($kota_id),
                'berat' => $berat
            ));
            
            redirect('tarif');
        }
    }
    
    public function submit_tarif()
    {
        $tarif = $this->tarif_m->get_hasil_tarif($this->session->userdata('tarif_id'));
        $layanan = $this->input->post('paket');
        
        $this->session->set_userdata(array(
            'layanan_yang_dipilih' => $layanan ,
            'tarif_akhir' => $this->tarif_m->akumulasi($tarif->$layanan)
        ));
        
        redirect('ringkasan');
    }
}