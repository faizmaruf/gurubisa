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
}
