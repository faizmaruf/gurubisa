<?php
class M_daftar extends CI_Model
{

    function getDaftarKelas()
    {
        $hsl = $this->db->get('user');
        return $hsl;
    }

    function daftarKelas($id, $id_kelas)
    {
        $hsl = $this->db->query("INSERT INTO `daftar` (`id_daftar`, `id_user`, `id_kelas`) VALUES (NULL, '$id', '$id_kelas')");
        return $hsl;
    }
    function cekuser($email)
    {
        $hasil = $this->db->query("SELECT * FROM user WHERE email_user='$email'");
        return $hasil;
    }
    function getIdDaftar($id, $id_kelas)
    {
        $hasil = $this->db->query("SELECT daftar.id_daftar FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON kelas.id_kelas=daftar.id_kelas WHERE user.id_user='$id' AND daftar.id_kelas='$id_kelas'");
        return $hasil->result_array();
    }
}
