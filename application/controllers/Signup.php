<?php

class Signup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
    }
    public function index()
    {
        $x['activenavbar'] =  'Daftar';
        $this->load->view('v_signup', $x);
    }
    public function daftar()
    {
        $nama = $this->input->post('xname');
        $email = $this->input->post('xemail');
        $psw1 = $this->input->post('xpassword1');
        $psw2 = $this->input->post('xpassword2');
        if ($psw1 != $psw2) {
            $url = site_url('signup');
            $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Password tidak Valid!</div>');
            redirect($url);
        } else {
            $data = array(
                'nama_user' => $nama,
                'email_user' => $email,
                'image_user' => 'imagedefult.png',
                'password_user' => password_hash($psw1, PASSWORD_DEFAULT)
            );

            $this->m_user->simpan_user($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert">Registrasi Berhasil! Silakan Login.</div>');
            redirect('Signin');
        }
    }
}
