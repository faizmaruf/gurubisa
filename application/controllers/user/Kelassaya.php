
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
        $this->load->model('m_daftar');
        $this->load->model('m_progres');
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        //ambil kelas yang di ambil user

        $id_kelas = $this->input->get(['id_kelas']);

        var_dump($id_kelas);
        die;
        //ambil id user
        $email = $this->session->userdata('email_user');
        $id_user = $this->m_user->getIdUserByEmail($email);
        $id = $id_user['id_user'];

        $id_daftar = $this->m_daftar->getIdDaftar($id, $id_kelas);




        $x['data'] = $this->m_kelas->get_kelasByEmail($email)->result_array();
        $x['progres'] = $this->m_progres->get_progresPersentase($id, $id_daftar);
        $x['activesidenav'] = 'Kelas Saya';
        $this->load->view('user/v_kelassaya', $x);
    }
}
