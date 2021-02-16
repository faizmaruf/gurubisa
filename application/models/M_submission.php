<?php
class M_submission extends CI_Model
{

    function get_all_soal($id_kelas)
    {
        $hsl = $this->db->query("SELECT soal.* FROM soal JOIN kelas ON kelas.id_kelas=soal.id_kelas WHERE kelas.id_kelas='$id_kelas'")->result_array();
        return $hsl;
    }
    function getJumlahSoal($id_kelas)
    {
        $hsl = $this->db->query("SELECT COUNT(soal) FROM soal WHERE soal.id_kelas='$id_kelas'")->result_array();
        return $hsl;
    }
}
