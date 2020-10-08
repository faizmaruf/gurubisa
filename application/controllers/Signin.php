<?php

class Signin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {
        $x['activenavbar'] =  'Masuk';
        $this->load->view('v_signin', $x);
    }
}
