<?php
class Ambilkelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('home');
            redirect($url);
        };
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->model('m_daftar');
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {   //ambil id kelas
        $id_kelass = $this->input->get(['id_kelas']);
        $id_kelas = $id_kelass['id_kelas'];

        //ambil id user
        $email = $this->session->userdata('email_user');
        $id_user = $this->m_user->getIdUserByEmail($email);
        $id = $id_user['id_user'];


        // baru bisa di ambil kelasnya
        $this->m_daftar->daftarKelas($id, $id_kelas);
        $x['user'] = $this->m_user->getUserByEmail($email);
        // $x['data'] = $this->m_kelas->get_all_kelas();
        $x['activesidenav'] = 'Katalog Kelas';
        $this->load->view('user/kelassaya', $x);
    }
}
