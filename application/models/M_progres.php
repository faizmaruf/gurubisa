<?php
class M_progres extends CI_Model
{

    function get_progresPersentase($id, $id_daftar)
    {
        $jumlahmateriselesai = $this->db->query("SELECT COUNT(progres.is_done) FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN progres ON daftar.id_daftar=progres.id_daftar JOIN materi ON progres.id_materi=materi.id_materi and user.id_user=$id and daftar.id_daftar=$id_daftar WHERE progres.is_done='1'");

        $jumlahmateri = $this->db->query("SELECT COUNT(materi.nama_materi) FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas JOIN materi ON materi.id_kelas=kelas.id_kelas and user.id_user=$id WHERE daftar.id_daftar=$id_daftar");

        $persentase = ($jumlahmateriselesai / $jumlahmateri) * 100;
        return $persentase;
    }

    // function getMateriProgresIsDone($id, $id_daftar)
    // {
    //     $result = $this->db->query("SELECT progres.is_done FROM user JOIN daftar ON user.id_user=daftar.id_user JOIN progres ON daftar.id_daftar=progres.id_daftar JOIN materi ON progres.id_materi=materi.id_materi and user.id_user=$id and daftar.id_daftar=$id_daftar WHERE progres.is_done=1");
    //     return $result;
    // }


    function getJumlahBarisProgres($id_daftar)
    {
        $hsl = $this->db->query("SELECT COUNT(progres.is_done) FROM progres JOIN daftar ON daftar.id_daftar=progres.id_daftar WHERE daftar.id_daftar=$id_daftar");
        return $hsl->result_array();
    }
    function getJumlahBarisProgresPerUser($email, $id_daftar)
    {
        $hsl = $this->db->query("SELECT COUNT(progres.is_done) FROM user JOIN daftar ON user.id_user = daftar.id_user JOIN kelas ON daftar.id_kelas=kelas.id_kelas JOIN materi ON kelas.id_kelas= materi.id_kelas JOIN progres ON progres.id_materi=materi.id_materi WHERE user.email_user='$email' AND daftar.id_daftar=$id_daftar");
        return $hsl->result_array();
    }
    function getIsdoneProgres($id_daftar)
    {
        $hsl = $this->db->query("SELECT progres.id_materi FROM materi JOIN progres ON progres.id_materi = materi.id_materi JOIN daftar ON daftar.id_daftar=progres.id_daftar WHERE daftar.id_daftar=$id_daftar");
        return $hsl->result_array();
    }
    function getIsActivedSideNav($id_materi)
    {
        $hsl = $this->db->query("SELECT progres.id_materi FROM materi JOIN progres ON progres.id_materi = materi.id_materi WHERE progres.id_materi=$id_materi");
        return $hsl->result_array();
    }
    function getIsActivedSideNavBuatNextVideo($id_materi)
    {
        $hsl = $this->db->query("SELECT materi.id_materi FROM materi WHERE materi.id_materi=$id_materi");
        return $hsl->result_array();
    }

    function setProgresIsDone($id_daftar, $id_materi)
    {
        $hsl = $this->db->query("INSERT INTO `progres` (`id_progres`, `id_daftar`, `id_materi`, `is_done`) VALUES (NULL, '$id_daftar', '$id_materi', '1')");
        return $hsl;
    }
}
