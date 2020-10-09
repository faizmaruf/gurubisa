<?php

class Signin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
        $this->load->model('m_daftar');
    }
    public function index()
    {
        $x['activenavbar'] =  'Masuk';
        $this->load->view('v_signin', $x);
    }
    public function login()
    {
        $email = strip_tags(str_replace("'", "", $this->input->post('xemail', true)));
        $password = strip_tags(str_replace("'", "", $this->input->post('xpassword', true)));

        $cekuser = $this->m_daftar->cekuser($email);
        $xcekuser = $cekuser->row_array();

        if (password_verify($password, $xcekuser['password_user'])) {
            $userIsActived = $this->m_user->isActived($email);
            $userIsActive = $userIsActived["is_active"];
            if ($userIsActive == '1') {
                echo "hello";
                $newdata = array(

                    'email_user' => $xcekuser['email_user'],

                    'logged_in' => true
                );
                $this->session->set_userdata($newdata);
                redirect('user/home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Akun Belum Diaktivasi, Silahkan Cek Pesan Di Email Anda </div>');
                redirect('signin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Password atau email anda salah!</div>');
            redirect('signin');
        }
    }
}
