<?php

class User extends MY_Controller {
    
    public function index()
    {
        $data['content'] = 'page/user';
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout', $data);
        }
        else
        {
            //proses login
            $nama = $this->input->post('nama');
            $password = $this->input->post('password');
            
            //dapatkan data berdasarkan email dan password
            $user = $this->user_m->check_account($nama, $password);

            //mengecek apakah email dan password ada
            if($user)
            {
                //buat session
                $data_sess = array(
                    'id' => $user->id,
                    'nama' => $user->nama,
                    'password' => $user->password,
                    'is_login' => TRUE
                );
                
                $this->session->set_userdata($data_sess);;
                redirect('dashboard');
            }
            else
            {
                //buat pesan gagal login
                $this->session->set_flashdata('failed', 'Akun anda salah, silahkan coba lagi.');
                
                redirect('user');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata(array('id', 'nama', 'email', 'is_login'));
        
        redirect('user');
    }
}