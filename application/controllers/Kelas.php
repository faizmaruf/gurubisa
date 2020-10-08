<?php

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
        $this->load->model('m_kelas');
    }
    public function index()
    {
        $x['data'] = $this->m_kelas->get_all_kelas_limit3();
        $x['activenavbar'] =  'Kelas';
        $this->load->view('v_kelas', $x);
    }
}
