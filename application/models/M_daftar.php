<?php
class M_daftar extends CI_Model
{

    function getDaftarKelas()
    {
        $hsl = $this->db->get('user');
        return $hsl;
    }

    function daftarKelas($id, $id_kelas, $nilai)
    {
        $hsl = $this->db->query("INSERT INTO `daftar` (`id_daftar`, `id_user`, `id_kelas`, `nilai`) VALUES (NULL, '$id', '$id_kelas', '$nilai')");
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
    function getIdDaftarByEmailAndIdkelas($email, $id_kelas)
    {
        $hasil = $this->db->query("SELECT daftar.id_daftar FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON kelas.id_kelas=daftar.id_kelas WHERE user.email_user='$email' AND daftar.id_kelas='$id_kelas'");
        return $hasil->result_array();
    }
    function setNilaiUser($id_daftar, $scoreDiraih)
    {
        $hasil = $this->db->query("UPDATE daftar SET nilai = '$scoreDiraih' WHERE daftar.id_daftar = '$id_daftar'");
        return $hasil;
    }
    function getNilaiUser($id_daftar)
    {
        $hasil = $this->db->query("SELECT daftar.nilai FROM daftar WHERE daftar.id_daftar = '$id_daftar'");
        return $hasil;
    }
}
