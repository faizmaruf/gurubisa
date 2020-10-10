<?php
class M_materi extends CI_Model
{

    function get_materiByIdDaftarAllElementDanProgres($id_daftar)
    {
        $hsl = $this->db->query("SELECT materi.*,progres.* FROM materi JOIN kelas ON kelas.id_kelas = materi.id_kelas JOIN daftar ON daftar.id_kelas=kelas.id_kelas JOIN progres ON progres.id_materi = materi.id_materi WHERE daftar.id_daftar=$id_daftar")->result_array();
        return $hsl;
    }
    function get_materiById($id)
    {
        $hsl = $this->db->query("SELECT materi.nama_materi FROM materi JOIN kelas ON kelas.id_kelas = materi.id_kelas WHERE kelas.id_kelas=$id")->result_array();
        return $hsl;
    }
    function get_materiByIdDaftarAllElement($id_daftar)
    {
        $hsl = $this->db->query("SELECT materi.* FROM materi JOIN kelas ON kelas.id_kelas = materi.id_kelas JOIN daftar ON daftar.id_kelas=kelas.id_kelas WHERE daftar.id_daftar=$id_daftar")->result_array();
        return $hsl;
    }
    function get_materiYgDiambil($id, $id_daftar)
    {
        $hsl = $this->db->query("SELECT materi.nama_materi FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas JOIN materi ON materi.id_kelas=kelas.id_kelas and user.id_user=$id WHERE daftar.id_daftar=$id_daftar");
        return $hsl;
    }
    function geIdMateri($id_kelas)
    {
        $hsl = $this->db->query("SELECT materi.id_materi FROM materi JOIN kelas ON kelas.id_kelas = materi.id_kelas WHERE kelas.id_kelas=$id_kelas")->row_array();
        return $hsl;
    }
}
