<?php

class Signup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {
        $x['activenavbar'] =  'Daftar';
        $this->load->view('v_signup', $x);
    }
}
