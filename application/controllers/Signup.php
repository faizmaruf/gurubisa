<?php

class Signup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
    }
    public function index()
    {
        $x['activenavbar'] =  'Daftar';
        $this->load->view('v_signup', $x);
    }
    public function daftar()
    {
        $nama = $this->input->post('xname');
        $email = $this->input->post('xemail');
        $psw1 = $this->input->post('xpassword1');
        $psw2 = $this->input->post('xpassword2');
        if ($psw1 != $psw2) {
            $url = site_url('signup');
            $x['alert'] =            $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Password tidak Valid!</div>');
            redirect($url, $x);
        } else {
            $userAda =  $this->db->get_where('user', ['email_user' => $email])->row_array();

            //cek akun sudah ada apa belum
            if (!($userAda)) {

                $data = array(
                    'nama_user' => $nama,
                    'email_user' => $email,
                    'image_user' => 'imagedefult.png',
                    'password_user' => password_hash($psw1, PASSWORD_DEFAULT),
                    'is_active' => '0'
                );

                //siapkantoken
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    "email" => $email,
                    "token" => $token,
                ];
                $this->db->insert('user_token', $user_token);

                $this->m_user->simpan_user($data);
                $emaill = $this->input->post('xemail');
                // var_dump($emaill);
                // die;

                $this->_sendEmail($token, 'verify', $emaill);

                $x['alert'] = $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert">Registrasi Berhasil! Silakan Cek Email Anda Untuk Aktifasi.</div>');
                redirect('Signin', $x);
            } else {
                $x['alert'] = $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Akun Sudah Ada !,Silahkan Buat Yang Baru</div>');
                redirect('Signup', $x);
            }
        }
    }
    private function _sendEmail($token, $type, $emaill)
    {
        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'gurubisa12345@gmail.com';
        $config['smtp_pass'] = 'sriwijayafc08';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");


        $this->email->from('gurubisa12345@gmail.com', 'Team Kiyay dari Guru Bisa');
        $this->email->to($emaill);

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('click Link ini untuk verifikasi : <a href="' . base_url() . 'Signup/verify?email=' . $emaill . '&token=' . urlencode($token) . '">Activate</a>');
        } elseif ($type == 'sertifikat') {
            $this->email->subject('Sertifikat Kelulusan Anda');
            $this->email->message('click Link ini untuk Mendownload : <a href="' . base_url() . 'user/sertifikat?email=' . $emaill . '&token=' . urlencode($token) . '">DownLoad Sertifikat</a>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->db->get_where('user', ['email_user' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->db->set('is_active', 1);
                $this->db->where('email_user', $email);
                $this->db->update('user');

                //delete user di user_token
                $this->db->delete('user_token', ['email' => $email]);

                $x['alert'] = $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert">' . $email . 'Berhasil Diaktifasi </div>');
                redirect('Signin');
            } else {
                $x['alert'] = $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Invalid Token !</div>');
                redirect('Signup');
            }
        } else {
            $x['alert'] = $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Wrong Email !</div>');
            redirect('Signup');
        }
    }
}
