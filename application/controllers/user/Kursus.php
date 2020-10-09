<?php

class Kursus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('home');
            redirect($url);
        };
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->model('m_materi');
        $this->load->model('m_daftar');
    }
    public function index()
    {
        $id_user = $this->input->get(['id_user']);
        $id = $id_user['id_user'];



        $id_kelass = $this->input->get(['id_kelas']);
        $id_kelas = $id_kelass['id_kelas'];

        $id_daftar = $this->m_daftar->getIdDaftar($id, $id_kelas);
        $x['materi'] = $this->m_materi->get_materiByIdDaftarAllElement($id_daftar);

        var_dump($x['materi']);
        die;


        $x['activesidenav'] = "Detail Kelas";
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        $this->load->view('user/v_detailkelas', $x);
    }
}
