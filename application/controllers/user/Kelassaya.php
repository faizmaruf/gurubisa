
<?php
class Kelassaya extends CI_Controller
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
        //ambil kelas yang di ambil user
        $id = $this->session->userdata('id_user');
        $x['data'] = $this->m_kelas->get_kelasById($id);
        var_dump($x['data']);
        die;
        $x['activesidenav'] = 'Kelas Saya';
        $this->load->view('user/v_katalogkelas', $x);
    }
}
