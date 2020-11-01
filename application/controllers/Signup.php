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
            $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Password tidak Valid!</div>');
            redirect($url);
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
                $namaa = $this->input->post('xname');
                // var_dump($emaill);
                // die;

                $this->_sendEmail($token, 'verify', $emaill, $namaa);

                $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Registrasi Berhasil! Silakan Cek Email Anda Untuk Aktifasi.</div>');
                redirect('Signin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-info d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Akun Sudah Ada ! Silahkan Buat Yang Baru.</div>');
                redirect('Signup');
            }
        }
    }
    private function _sendEmail($token, $type, $emaill, $namaa)
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
        $encodeurl = urlencode($token);
        $url = ('<a href="' . base_url() . 'signup/verify?email=' . $emaill . '&token=' . urlencode($token) . '">Aktifasikan !</a>');
        $massage = file_get_contents(__DIR__ . '/massegeActivation.html');
        $massage = str_replace("%link%", "$url", $massage);
        $massage = str_replace("%nama%", "$namaa", $massage);
        // var_dump($url);
        // die;
        $this->email->from('gurubisa123@gmail.com', 'Team Kiyay dari Guru Bisa');
        $this->email->to($emaill);

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message($massage);
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

                $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Akun ' . $email . ' Berhasil Diaktifasi </div>');
                redirect('Signin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Invalid Token !</div>');
                redirect('Signup');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Wrong Email !</div>');
            redirect('Signup');
        }
    }
}
