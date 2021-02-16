
<?php
class Submission extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('home');
            redirect($url);
        };
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->model('m_daftar');
        $this->load->model('m_materi');
        $this->load->model('m_progres');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_submission');
    }
    public function index()
    {
        $id_user = $this->input->get(['id_user']);
        $id = $id_user['id_user'];

        $id_kelass = $this->input->get(['id_kelas']);
        $id_kelas = $id_kelass['id_kelas'];
        if ($id_kelas == null) {
            $id_kelas; // baru nyampek sini
            redirect('user/kelassaya');
        }
        $soal = $this->m_submission->get_all_soal($id_kelas);
        if (empty($soal)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Mohon untuk mengambil kelas "Microsoft office Dasar" dikatalog kelas agar dapat mencoba fitur Submission</div>');
            redirect('user/kelassaya');
        }

        // var_dump($soal);
        // die;

        $x['soal'] = $soal;


        //------------ batas soal dengan sideBar---------------------------------

        //mendapatkan Id daftar
        $id_daftarkelas = $this->m_daftar->getIdDaftar($id, $id_kelas);
        $id_daftark = $id_daftarkelas[0];
        $id_daftar = $id_daftark['id_daftar'];

        $id_materii = $this->input->get(['id_materi']);
        $id_materi = $id_materii['id_materi'];


        //mendapatkan Is_done Id_materi 
        $is_doneIdMateri = $this->m_progres->getIsdoneProgres($id_daftar);


        if (($id_materi) == null) {
            // jika di reload user otomatis get ke ambil
            $id_materii = $this->m_materi->geIdMateri($id_kelas);
            $id_materi = $id_materii['id_materi'];
            if (($is_doneIdMateri) == null) {
                $this->m_progres->setProgresIsDone($id_daftar, $id_materi);
            }
        }


        $is_doneIdMateri = $this->m_progres->getIsdoneProgres($id_daftar);



        $ada = 0;
        $i = 0;
        foreach ($is_doneIdMateri as $row) {
            if (($is_doneIdMateri[$i]['id_materi']) == $id_materi) {
                // var_dump($is_doneIdMateri[$i]['id_materi']);
                // die;
                $ada++;
            }
            $is_doneidmaterii[] = $is_doneIdMateri[$i]['id_materi'];
            $i++;
        }


        // mengeset is_done menjadi 1 dan jika belum di tandai maka set dan kurang dari jumlah baris progres
        //$kursusSelesai = $this->m_progres->getJumlahBarisProgres($id_daftar);
        $kursusSelesaii = $this->m_progres->getJumlahBarisProgres($id_daftar);
        $kursusSelesai = $kursusSelesaii[0]["COUNT(progres.is_done)"];
        if ($kursusSelesai <= 6) {
            if ($ada == 0) {
                $this->m_progres->setProgresIsDone($id_daftar, $id_materi);
            }
        }
        // var_dump($is_doneIdMateri);
        // die;


        $x['materi'] = $this->m_materi->get_materiByIdDaftarAllElement($id_daftar);
        //mendapatkan  Materinya Untuk Active Side Nav


        $video_materis = $this->m_materi->get_videomateriByIdmateri($id_materi);
        $video_materi = $video_materis[0]['video_materi'];

        $video_kelass = $this->m_kelas->get_videoKelasByIdKelas($id_kelas);
        $video_kelas = $video_kelass[0]['video_kelas'];

        $x['data'] = $this->m_kelas->get_kelasByIdDaftar($id_daftar);
        $x['idDaftar'] = $id_daftar;

        // $is_done = $this->m_progres->getIsdoneProgres($id_materi);
        $x['activesidenav'] = $id_materi;
        $x['video_materi'] = $video_materi;
        $x['video_kelas'] = $video_kelas;
        $x['is_done'] =  $is_doneidmaterii;
        $x['kursusselesai'] = $kursusSelesai;
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        $ceklis = $this->m_daftar->getNilaiUser($id_daftar)->result_array();
        $x['ceklistSubmission'] = $ceklis[0]["nilai"];

        // $x['progres'] = $this->m_progres->get_progresPersentase($id, $id_daftar);
        $x['activesidenav'] = 'Kelas Saya';
        $this->load->view('user/v_submission', $x);
    }

    public function nilaiSubmission()
    {
        $id_daftar = $this->input->post('id_daftar');
        $id_kelas = $this->input->post('id_kelas');
        $jawaban = $this->input->post('jawaban'); //jawaban user
        $scoreDiraih = $this->_cekScore($jawaban, $id_kelas); // score diraih dari komputasi di private function _cekScore
        $namakelass = $this->db->get_where('kelas', array('id_kelas' => $id_kelas))->result_array();
        $namakelas = $namakelass[0]['nama_kelas'];

        //set nilai user
        $this->m_daftar->setNilaiUser($id_daftar, $scoreDiraih);
        if ($scoreDiraih >= 60) {
            $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Selamat anda lulus kelas ' . $namakelas . ' dengan score ' . $scoreDiraih . ', Silahkan Download Sertifikat dengan masuk kembali ke kelas.</div>');
            redirect('user/kelassaya');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert" data-aos="fade-down" data-aos-duration="2000">Score anda ' . $scoreDiraih . ' belum mencapai 60 % silahkan pelajari lagi dan ulang submission dikelas ' . $namakelas . '</div>');
            redirect('user/kelassaya');
        }
    }


    private function _cekScore($jawaban, $id_kelas)
    {
        $soal = $this->m_submission->get_all_soal($id_kelas);
        $i = 0;
        $score = 0;
        $jawaban = $this->input->post('jawaban'); //jawaban user
        foreach ($jawaban[0] as $jwb) :
            $kunci_jawaban = $soal[$i]["jawaban"];
            if ($jawaban[0][$i] == $kunci_jawaban) {
                $score++;
            }
            $i++;
        endforeach;
        $jumlah_soalll = $this->m_submission->getJumlahSoal($id_kelas);
        $jumlah_soal = $jumlah_soalll[0]["COUNT(soal)"];
        $score_akhir = ($score / $jumlah_soal) * 100;
        return $score_akhir;
    }
}
