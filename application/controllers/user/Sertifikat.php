<?php

//ambil emailnya dari url
//panggil kelas yang selesai dengan cara:
//bandingkan jumlah progres dan jumlah materinya 
//jika full maka itu kelas yang di ambilnya sudah bisa dikasih sertifikat

class Sertifikat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->model('m_daftar');
        $this->load->model('m_progres');
        $this->load->library('dompdf_gen');
    }
    public function index()
    {
        $nama_user = $this->input->get(['nama_user']);
        $nama = $nama_user['nama_user'];



        $nama_kelass = $this->input->get(['nama_kelas']);
        $nama_kelas = $nama_kelass['nama_kelas'];

        $email_users = $this->input->get(['email_user']);
        $email_user = $email_users['email_user'];



        $this->_sendEmail($email_user, $nama, $nama_kelas);



        $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Silakan Cek Email Anda Untuk Download Sertifikat Menyelesaikan Kelas.</div>');
        redirect('user/home');
        // $this->load->view('user/v_sertifikat');

        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();


        // $this->dompdf->set_paper($paper_size, $orientation);
        // $this->dompdf->load_html($html);
        // // $this->dompdf->load_html(html_entity_decode($html));
        // //$this->dompdf->render();
        // //$this->dompdf->ob_end_clean();

        // $this->dompdf->stream('SertifikatGuruBisa.pdf', array('attachment' => 0));
    }


    private function _sendEmail($emaill, $nama_user, $nama_kelas)
    {
        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'gurubisa123@gmail.com';
        $config['smtp_pass'] = 'Sriwijay@fc08';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");


        $url = ('<a href="' . base_url() . 'user/sertifikat/serti?email=' . $emaill . '&nama_user=' . ($nama_user) . '&nama_kelas=' . ($nama_kelas) . '">Download Sertifikat</a>');
        $massage = file_get_contents(__DIR__ . '/mesaggeSertifikat.html');
        $massage = str_replace("%link%", "$url", $massage);
        $massage = str_replace("%nama%", "$nama_user", $massage);
        $massage = str_replace("%kelas%", "$nama_kelas", $massage);

        $this->email->from('gurubisa123@gmail.com', 'Team Kiyay dari Guru Bisa');
        $this->email->to($emaill);


        $this->email->subject('Sertifikat Kelulusan Anda');
        $this->email->message($massage);


        // $this->email->subject('Sertifikat Kelulusan Anda');
        // $this->email->message('click Link ini untuk Mendownload Sertifikat : <a href="' . base_url() . 'user/sertifikat/serti?email=' . $emaill . '&nama_user=' . ($nama_user) . '&nama_kelas=' . ($nama_kelas) . '">DownLoad Sertifikat</a>');



        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function serti()
    {
        $nama_user = $this->input->get(['nama_user']);
        $nama = $nama_user['nama_user'];



        $nama_kelass = $this->input->get(['nama_kelas']);
        $nama_kelas = $nama_kelass['nama_kelas'];

        $email_users = $this->input->get(['email_user']);
        $email_user = $email_users['email_user'];

        // var_dump($nama);
        // var_dump($nama_kelas);
        // var_dump($email_user);
        // die;

        $x['nama_user'] = $nama;
        $x['nama_kelas'] = $nama_kelas;
        $x['email_user'] = $email_user;

        $this->load->view('user/v_sertifikat', $x);
    }
}
