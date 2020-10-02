<?php
class M_progres extends CI_Model
{

    function get_progresPersentase($id, $id_daftar)
    {
        $jumlahmateriselesai = $this->db->query("SELECT COUNT(progres.materi_progres) FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN progres ON daftar.id_daftar=progres.id_daftar JOIN materi ON progres.id_materi=materi.id_materi and user.id_user=$id and daftar.id_daftar=$id_daftar WHERE progres.materi_progres=1");

        $jumlahmateri = $this->db->query("SELECT COUNT(materi.nama_materi) FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas JOIN materi ON materi.id_kelas=kelas.id_kelas and user.id_user=$id WHERE daftar.id_daftar=$id_daftar");

        $persentase = ($jumlahmateriselesai / $jumlahmateri) * 100;
        return $persentase;
    }
    function getMateriProgresIsDone($id, $id_daftar)
    {
        $result = $this->db->query("SELECT progres.materi_progres FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN progres ON daftar.id_daftar=progres.id_daftar JOIN materi ON progres.id_materi=materi.id_materi and user.id_user=$id and daftar.id_daftar=$id_daftar WHERE progres.materi_progres=1");
        return $result;
    }
}
