<?php
class M_materi extends CI_Model
{

    function get_materi($id, $id_daftar)
    {
        $hsl = $this->db->query("SELECT materi.nama_materi FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas JOIN materi ON materi.id_kelas=kelas.id_kelas and user.id_user=$id WHERE daftar.id_daftar=$id_daftar");
        return $hsl;
    }
}
