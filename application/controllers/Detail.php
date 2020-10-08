<?php

class Detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->model('m_materi');
    }
    public function index()
    {
        $id_kelas = $this->input->get(['id_kelas']);
        $nama_kelas = $this->input->get(['nama_kelas']);
        $deskripsi_kelas = $this->input->get(['deskripsi_kelas']);
        $image_kelas = $this->input->get(['image_kelas']);
        $video_kelas = $this->input->get(['video_kelas']);
        $id_mentor = $this->input->get(['id_mentor']);
        $nama_mentor = $this->input->get(['nama_mentor']);
        $mentor_image = $this->input->get(['mentor_image']);
        $profesi_mentor = $this->input->get(['profesi_mentor']);

        $x['data'] = [
            $id_kelas = $id_kelas['id_kelas'],
            $nama_kelas = $nama_kelas['nama_kelas'],
            $deskripsi_kelas = $deskripsi_kelas['deskripsi_kelas'],
            $image_kelas = $image_kelas['image_kelas'],
            $video_kelas = $video_kelas['video_kelas'],
            $id_mentor = $id_mentor['id_mentor'],
            $nama_mentor = $nama_mentor['nama_mentor'],
            $mentor_image = $mentor_image['mentor_image'],
            $profesi_mentor = $profesi_mentor['profesi_mentor']
        ];
        $id_kelass = $this->input->get(['id_kelas']);
        $id = $id_kelass['id_kelas'];
        $x['materi'] = $this->m_materi->get_materiById($id);
        $x['activenavbar'] = "sikmik";

        $this->load->view('v_detailkelas', $x);
    }
}
