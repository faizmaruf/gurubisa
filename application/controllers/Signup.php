<?php

class Signp extends CI_Controller
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

        $this->load->view('v_detailkelas');
    }
}
