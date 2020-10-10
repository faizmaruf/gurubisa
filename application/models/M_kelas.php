<?php
class M_kelas extends CI_Model
{

    function get_all_kelas()
    {
        $hsl = $this->db->query("SELECT * FROM kelas JOIN mentor ON kelas.id_kelas=mentor.id_kelas ")->result_array();
        return $hsl;
    }
    function get_all_kelas_limit3()
    {
        $hsl = $this->db->query("SELECT * FROM kelas JOIN mentor ON kelas.id_kelas=mentor.id_kelas LIMIT 3")->result_array();
        return $hsl;
    }
    function get_kelasByIdKelas($id_kelas)
    {
        $hsl = $this->db->query("SELECT * FROM kelas WHERE kelas.id_kelas='$id_kelas'");
        return $hsl;
    }
    function get_videoKelasByIdKelas($id_kelas)
    {
        $hsl = $this->db->query("SELECT kelas.video_kelas FROM kelas WHERE kelas.id_kelas='$id_kelas'");
        return $hsl->result_array();
    }
    function get_kelasByIdDaftar($id_daftar)
    {
        $hsl = $this->db->query("SELECT kelas.*,mentor.* FROM daftar JOIN kelas ON daftar.id_kelas=kelas.id_kelas JOIN mentor ON kelas.id_kelas=mentor.id_kelas WHERE daftar.id_daftar=$id_daftar");
        return $hsl->result_array();
    }
    function get_kelasByEmail($email)
    {
        $hsl = $this->db->query("SELECT kelas.* FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas WHERE user.email_user='$email'");
        return $hsl;
    }
    function get_idKelasById_ByIdDaftar($id, $id_daftar)
    {
        $hsl = $this->db->query("SELECT kelas.id_kelas FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas and user.id_user=$id WHERE daftar.id_daftar=$id_daftar");
        return $hsl;
    }
}
