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
        $this->load->model('m_progres');
    }
    public function index()
    {
        $id_user = $this->input->get(['id_user']);
        $id = $id_user['id_user'];



        $id_kelass = $this->input->get(['id_kelas']);
        $id_kelas = $id_kelass['id_kelas'];


        //mendapatkan Id daftar
        $id_daftarkelas = $this->m_daftar->getIdDaftar($id, $id_kelas);
        $id_daftark = $id_daftarkelas[0];
        $id_daftar = $id_daftark['id_daftar'];

        $x['materi'] = $this->m_materi->get_materiByIdDaftarAllElement($id_daftar);


        $x['data'] = $this->m_kelas->get_kelasByIdDaftar($id_daftar);

        // $is_done = $this->m_progres->getIsdoneProgres($id_materi);
        $x['activesidenav'] = "Detail Kelas";
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        $this->load->view('user/v_kursus', $x);
    }
    public function nextvideo()
    {
        $id_user = $this->input->get(['id_user']);
        $id = $id_user['id_user'];



        $id_kelass = $this->input->get(['id_kelas']);
        $id_kelas = $id_kelass['id_kelas'];

        $id_materii = $this->input->get(['id_materi']);
        $id_materi = $id_materii['id_materi'];


        //mendapatkan Id daftar
        $id_daftarkelas = $this->m_daftar->getIdDaftar($id, $id_kelas);
        $id_daftark = $id_daftarkelas[0];
        $id_daftar = $id_daftark['id_daftar'];

        $x['materi'] = $this->m_materi->get_materiByIdDaftarAllElement($id_daftar);


        $x['data'] = $this->m_kelas->get_kelasByIdDaftar($id_daftar);




        // mengeset is_done menjadi 1
        $this->m_progres->setProgresIsDone($id_daftar, $id_materi);

        //mendapatkan Is_done
        $is_doneee = $this->m_progres->getIsdoneProgres($id_materi);
        $is_donee = $is_doneee[0];
        $is_done = $is_donee['is_done'];


        var_dump($id);
        var_dump($id_kelas);
        var_dump($id_daftar);
        var_dump($id_materi);
        var_dump($is_done);
        die;



        $x['activesidenav'] = "$is_done";
        $x['is_done'] = "$is_done";
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        $this->load->view('user/v_kursus', $x);
    }
}
