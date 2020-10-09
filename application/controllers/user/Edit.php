<?php
class Edit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('home');
            redirect($url);
        };
        $this->load->model('m_user');
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);

        $x['activesidenav'] = 'Edit Profil';
        $this->load->view('user/v_editprofil', $x);
    }

    public function update()
    {

        $config['upload_path'] = './assets/images/user/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['ximguser']['name'])) {
            if ($this->upload->do_upload('ximguser')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/user/' . $gbr['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '90%';
                $config['width'] = 500;
                $config['height'] = 400;
                $config['new_image'] = './assets/images/user/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $nama = $this->input->post('xname');
                $email = $this->input->post('xemail');
                $nuptk = $this->input->post('xnuptk');
                $jeniskelamin = $this->input->post('xjeniskelamin');

                $id = $this->input->post('xid');
                $where = array('id' => $id);

                $data = array(
                    'nama_user' => $nama,
                    'email_user' => $email,
                    'nuptk_user' => $nuptk,
                    'image_user' => $gambar,
                    'jk_user' => $jeniskelamin,
                );


                $this->m_user->update_user($where, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center zindex-100" role="alert">Profile berhasil diupdate</div>');
                redirect('user/edit');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">tak berhasil diupdate</div>');

                redirect('user/edit');
            }
        }
    }
}
