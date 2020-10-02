<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }
    public function index()
    {
        $x['data'] = $this->m_user->get_all_user();
        $y = var_dump($x);
        $this->load->view('v_home', $y);
    }
}
