<?php
class M_kelas extends CI_Model
{

    function get_all_kelas()
    {
        $hsl = $this->db->get('kelas');
        return $hsl;
    }
    function get_all_kelas_limit3()
    {
        $hsl = $this->db->query("SELECT * FROM kelas JOIN mentor ON kelas.id_kelas=mentor.id_kelas LIMIT 3")->result_array();
        return $hsl;
    }

    function get_kelasById($id)
    {
        $hsl = $this->db->query("SELECT user.nama_user,kelas.nama_kelas FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas and user.id_user=$id");
        return $hsl;
    }
    function get_kelasById_ByIdDaftar($id, $id_daftar)
    {
        $hsl = $this->db->query("SELECT kelas.id_kelas FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas and user.id_user=$id WHERE daftar.id_daftar=$id_daftar");
        return $hsl;
    }
}
