<?php
class Home extends CI_Controller
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
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        $x['data'] = $this->m_kelas->get_all_kelas();
        $x['activesidenav'] = 'Katalog Kelas';
        $this->load->view('user/v_katalogkelas', $x);
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('signin');
    }
}
